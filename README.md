## About Vehbur

Vehbur is a project inspired by [gofundme.com](https://www.gofundme.com/) which helped a lot of people in different countries. It is not a replica of it, but we got some inspirations from it.

## To Run this project
- clone this repository
```
git clone git@github.com:ReubenSiama/vehbur.git
```
- install requirements
```
composer install && npm install
```
- copy `.env.example` and rename it to `.env`
```
cp .env.example .env
```
- generate app key
```
php artisan key:generate
```
- edit `.env` file for database connections
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=db_username
DB_PASSWORD=db_password (leave blank for no password)
```
- run migration and seed: `php artisan migrate --seed`
- serve the project `php artisan serve`
