# Project Test EDII
```
Dependency:
Laravel 5.5
php 7.0
```

## installation

```
git clone https://github.com/brilliangit/edii_test.git

cd ~/edii_test

sudo chgrp -R www-data storage/logs/ storage/framework/ bootstrap/cache/

composer update

php artisan key:generate

setting Database config in .env
php artisan migrate OR import manualy database edii.sql

php artisan serve
```
