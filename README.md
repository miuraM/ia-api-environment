# third party api environment
サードパーティのAPIクライアントライブラリ実行環境構築用
対象のAPIは下記のとおり

* Google Ads Api
* facebook marketing Api
* Yahoo!広告 Api

# 実行環境
* nginx 1.17.10
* php 7.3.18
* laravel 6.0
* mysql 8.0

# 環境構築
cloneした後、下記のコマンドで環境構築

```command
$ docker-compose up -d --build
$ docker-compose exec app ash
$ composer install # or composer update
```
http://127.0.0.1:10080/

laravelの初期画面が表示されていれば構築は完了

# Google Ads Api
composer.json

```json
"require" : {
    "googleads/google-ads-php": "^3.2"
}
```
また、このAPIを利用するためにはgRPCモジュールが必要。
```
# apkにパッケージが存在しなかったっためpeclからインストールを実行
# phpizeが存在しなかったり、linux headerが足りないものがあったため合わせて実行している
# Dockerfileにまとめて処理追加しています

$ apk add linux-headers
$ apk add --no-cache $PHPIZE_DEPS
$ pecl install grpc
```
## 認証方法
Google Ads APIを利用するために認証キーを事前に作成する。

[参考ページ](https://qiita.com/komedawara_omusubi/items/71f7da499d92289f77b6)

```ini
; 認証ファイルのサンプル

[GOOGLE_ADS]
developerToken = "xxx"

; Required for manager accounts only: Specify the login customer ID used to authenticate API calls.
; This will be the customer ID of the authenticated manager account. You can also specify this later
; in code if your application uses multiple manager account + OAuth pairs.
; loginCustomerId = "INSERT_LOGIN_CUSTOMER_ID_HERE"
[OAUTH2]
clientId = "xxx"
clientSecret = "xxx"
refreshToken = "xxx"
```

認証ファイルをstorageディレクトリなどに置き、envで管理しconfigからファイルを指定できるように定義します
```php
'google_ads_php_path' => storage_path(env('GOOGLE_ADS_AUTH_FILE_PATH', ''))
```
予めサービスプロバイダーを追加しているので、認証までは自動で完了するようにしてあります。
```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Google\Ads\GoogleAds\Lib\V3\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\Lib\OAuth2TokenBuilder;

class GoogleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Binds the Google Ads API client.
        $this->app->singleton('Google\Ads\GoogleAds\Lib\V3\GoogleAdsClient', function () {
            // Constructs a Google Ads API client configured from the properties file.
            return (new GoogleAdsClientBuilder())
                ->fromFile(config('app.google_ads_php_path'))
                ->withOAuth2Credential((new OAuth2TokenBuilder())
                    ->fromFile(config('app.google_ads_php_path'))
                    ->build())
                ->build();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

```
使用方法サンプル：

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Google\Ads\GoogleAds\Lib\V3\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\V3\GoogleAdsServerStreamDecorator;

class SampleController extends Controller
{

    private static $REPORT_TYPE_TO_DEFAULT_SELECTED_FIELDS = [
        'campaign' => ['campaign.id', 'campaign.name', 'campaign.status'],
        'customer' => ['customer.id']
    ];

    public function sample(Request $request, GoogleAdsClient $googleAdsClient)
    {
        if ($request->method() !== 'POST') {
            exit;
        }
        
        $customerId = $request->input('customerId');
        $reportType = $request->input('reportType');
        $reportRange = $request->input('reportRange');
        $entriesPerPage = $request->input('entriesPerPage');

        $selectedFields = array_values(
            $request->except(
                [
                    '_token',
                    'customerId',
                    'reportType',
                    'reportRange',
                    'entriesPerPage'
                ]
            )
        );
        
        $selectedFields = array_merge(
            self::$REPORT_TYPE_TO_DEFAULT_SELECTED_FIELDS[$reportType],
            $selectedFields
        );

        $query = sprintf(
            "SELECT %s FROM %s WHERE metrics.impressions > 0 AND segments.date " .
            "DURING %s LIMIT 100",
            join(", ", $selectedFields),
            $reportType,
            $reportRange
        );

        // 認証が無事に通り、該当のデータが存在すればクエリ実行の戻り値が返ります
        // Searches the results using streaming.
        /** @var GoogleAdsServerStreamDecorator $stream */
        $stream = $googleAdsClient->getGoogleAdsServiceClient()->searchStream(
            $customerId,
            $query
        );
       
        省略
        
    }

}

```

# facebook marketing api
composer.json

```json
"require" : {
    "facebook/php-business-sdk": "5.0.5"
}
```
## 認証方法
認証方法は公式のドキュメントが丁寧に説明されているので参考にしてください
[公式ドキュメント](https://developers.facebook.com/docs/marketing-api/access)

APIの認証に必要なデータは下記の通りです
```php
'facebook_api' => [
    'app_id' => env('FACEBOOK_APP_ID'),
    'app_secret' => env('FACEBOOK_APP_SECRET'),
    'app_access_token' => env('FACEBOOK_APP_ACCESS_TOKEN'),
],
```
予めサービスプロバイダーを追加しているので、認証までは自動で完了するようにしてあります。
```php
<?php

namespace App\Providers;

use FacebookAds\Api;
use Illuminate\Support\ServiceProvider;

class FacebookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Api::class, function () {
            Api::init(
                config('app.facebook_api.app_id'),
                config('app.facebook_api.app_secret'),
                config('app.facebook_api.app_access_token')
            );
            return API::instance();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

```
使用方法サンプル：
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use FacebookAds\Api;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdAccountFields;

class FacebookSampleController extends Controller
{

    protected $api = null;

    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    public function index()
    {
        $fields = [
            AdAccountFields::ID,
            AdAccountFields::NAME,
        ];
        $account_id = xxx;
        $account = (new AdAccount($account_id))->getSelf($fields);
        // 認証が無事に通るとアカウントIDに紐づくアカウント情報を閲覧できます
        dd($account->name);
    }

```


# Yahoo!広告 Api
必要なクライアントライブラリは別途installが必要。
installの後、必要なライブラリ部分（lib配下）だけをフレームワークへ移植。
```
openapi-generator generate -i https://yahoojp-marketing.github.io/ads-search-api-documents/design/v1/Route.yaml -g php -o ./
```

composer.jsonに必要なパッケージとautoloadの設定を追加。
先ほど移動したライブラリをautoloadで利用できるように設定しています。
```json
"require": {
    "ext-curl": "*",
    "ext-json": "*",
    "ext-mbstring": "*",
    "guzzlehttp/guzzle": "^6.2"
}
"autoload": {
    "psr-4": {
        "OpenAPI\\Client\\": "lib/"
    }
},
```

## 認証方法
認証方法は公式のドキュメントを参考にしてください
[公式ドキュメント](https://ads-developers.yahoo.co.jp/developercenter/ja/startup-guide/)

```ini
[access_token]
accessToken=xxx

[account]
accountId=xxx
```

認証ファイルをstorageディレクトリなどに置き、envで管理しconfigからファイルを指定できるように定義します
```php
'yahoo_config_path' => storage_path(env('YAHOO_AUTH_FILE_PATH', '')),
```

他のAPIと違い各処理（レポート操作、アカウント操作など）で認証を通すロジックとなっているため、共通の認証キーをconfigurationに設定するまでをサービスプロバイダに定義しています。
```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use OpenAPI\Client\Configuration;

class YahooServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Configuration::class, function () {
            $api_config = parse_ini_file(config('app.yahoo_config_path'));
            return (new Configuration())
                ->getDefaultConfiguration()
                ->setAccessToken($api_config['accessToken']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

```

使用方法サンプル：
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAPI\Client\Configuration;

class YahooSampleController extends Controller
{
    protected $configuration = null;

    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function index()
    {
        // 
        dd($this->configuration->getDefaultConfiguration());
    }
}
```
