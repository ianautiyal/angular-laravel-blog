# Angular Laravel Blog
Angular 6, Laravel 5.6 Blog

## Prerequisites
- PHP >= 7.1.3
- Composer PHP OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON
- MySql >= 5.7
- Apache Webserver >= 2.4
- Ram >= 2 GB

## Built With

* [Laravel](https://laravel.com/docs/5.6) - v5.6
* [Angular](https://angular.io/guide/quickstart) - v6.0.4
* [Bootstrap](https://getbootstrap.com/docs/4.1/getting-started/introduction/) - v4.1.1

### Installing
Clone repository and install dependencies with composer and npm.
```
mkdir blog && git clone git@github.com:ianautiyal/angular-laravel-blog.git .
composer install && npm install
composer run-script post-root-package-install
php artisan key:generate
php artisan jwt:secret
```

Create a database and update credentials and other info in .env

### Running App

```
php artisan serve
npm run watch
```

## Authors

* [**Ajay Nautiyal**](https://github.com/ianautiyal)
