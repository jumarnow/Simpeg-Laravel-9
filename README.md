# Sistem Informasi Kepegawaian Laravel 9
Sistem Informasi Kepegawaian Sederhana menggunakan Laravel 9, merupakan pengembangan dari https://github.com/jumarnow/simpeg_magang.
## Fitur yang diupdate
1. Laravel 9
2. migration dan seeder dgn faker
3. Login menggunakan username/email
4. Paginate dan searching
5. Notifikasi Toast
6. Konfirmasi Hapus
7. Perbaikan bug

## Demo
Address : http://13.250.112.156/
## Requirement
- PHP >= 8.1
- Composer
- Apache / Nginx

## Installation

``` bash
# install composer dependencies
$ composer install
# run migration and seed
$ php artisan migrate --seed
# run manually
$ php artisan serve
```

## Login Credential
```
Username: admin
Password: 123456
```

## Dotenv Configuration
### Database Configuration
Please make a fresh database and edit this configuration in .env file. Make sure the database credential is correct
- DB_DATABASE
- DB_USERNAME
- DB_PASSWORD
