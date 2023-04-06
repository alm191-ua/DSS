#!/bin/bash
cp .env.example .env
composer install
php artisan migrate:refresh --seed
php artisan storage:link
php artisan key:generate
php artisan serve
