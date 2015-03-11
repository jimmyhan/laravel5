## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

The Laravel 5 starter website.

## Installation

1.composer create-project laravel/laravel --prefer-dist laravel5
clone a local copy to the folder "laravel5".

2.create a new repository "laravel5" and upload the project to github

## configuration

1.config/app.php: 'timezone' => 'America/Vancouver'

2.setting local database
(1)create a new "local" folder under the config
(2)copy database.php from config to local
(3)update DB connection information (server/database/username/password)

### tables migration and try authentication

1.create a new database (i.g. laravel5)
2.initialize migration table: artisan migrate:install (generated migrations table)
3.migrate tables: artisan migrate (generated users, password_resets tables)
4.try http://laravel5/home
5.click Register in page http://laravel5/auth/login
6.a new record will be added to users after created a new account

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
