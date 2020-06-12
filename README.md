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

```
$ docker-compose up -d --build
$ docker-compose exec app ash
$ composer install # or composer update
```
http://127.0.0.1:10080/

laravelの初期画面が表示されていれば構築は完了

# Google Ads Api
composer.json

```
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

```
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



# facebook marketing api
composer.json

```
"require" : {
    "facebook/php-business-sdk": "5.0.5"
}
```

# Yahoo!広告 Api
必要なクライアントライブラリは別途installが必要。installの後、必要なライブラリ部分（lib配下）だけをフレームワークへ移植。
```
openapi-generator generate -i https://yahoojp-marketing.github.io/ads-search-api-documents/design/v1/Route.yaml -g php -o ./
```

composer.jsonに必要なパッケージとautoloadの設定を追加
```
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
