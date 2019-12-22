# Laravel 雛形

## Usage

```
$ git clone --recursive git@github.com:r-tamashiro/lara_template_6.4.1.git
$ cp .env.example .env
$ cp laradock_env laradock/.env
$ cp laradock_my.cnf laradock/mysql/my.cnf
```

起動
```
$ cd laradock
$ docker-compose -p sample up --build -d nginx mysql workspace
$ docker-compose -p sample up -d nginx mysql
```

コンテナへ接続

```
$ docker-compose -p sample exec --user=laradock workspace bash
```

```
laradock@123456789012:/var/www$ composer install
laradock@123456789012:/var/www$ composer dump-autoload
laradock@123456789012:/var/www$ php artisan key:generate
laradock@123456789012:/var/www$ php artisan config:cache
laradock@123456789012:/var/www$ php artisan migrate
laradock@123456789012:/var/www$ npm install
laradock@123456789012:/var/www$ npm run watch
laradock@123456789012:/var/www$ php artisan db:seed --class=UsersTableSeeder
```

データベースをリフレッシュして全シードを実行
```
laradock@123456789012:/var/www$ php artisan migrate:refresh --seed
```


開発DB(MySQL)への接続

```
docker-compose -p sample exec mysql mysql -udefault -psecret dev_laravel
```
