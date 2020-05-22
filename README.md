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
    "googleads/googleads-php-lib": "^47.0"
}
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
