# Database Sync - by Celso Nery

[![Maintainer](http://img.shields.io/badge/maintainer-@celsonery-blue.svg?style=flat-square)](https://x.com/celsonery)
[![Latest Version](https://img.shields.io/github/release/celsonery/db-sync.svg?style=flat-square)](https://github.com/celsonery/db-sync/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/celsonery/db-sync.svg?style=flat-square)](https://scrutinizer-ci.com/g/celsonery/db-sync)
[![Quality Score](https://img.shields.io/scrutinizer/g/celsonery/db-sync.svg?style=flat-square)](https://scrutinizer-ci.com/g/celsonery/db-sync/build-status/main)

## About DB Sync
The DB Sync application was born because the development team needed to transfer data from prod to dev databases.
This application drops, creates and transfers data from database-name to database-name_dev, if _dev does not exist,
the application will create it.

## Requirements
```shell
PHP 8.2+
```

- Packages
```shell
zip unzip libzip libzip-dev libpq-dev libpng-dev oniguruma-dev git lynx postgresql-client
```

- PHP Extensions
```shell
php82-bz2 php82-calendar php82-exif php82-fpm php82-gd php82-gettext php82-opcache php82-pcntl php82-zip php82-pgsql
php82-redis php82-xdebug php82-sockets
```

## Installation

This application is available in Github/Gitlab:
```shell
git clone git@github.com/celsonery/db-sync.git

or

git clone https://github.com/celsonery/db-sync.git
```

- First you must create environment variables
```shell
export PGHOST=<ip-of-postgresql-server>
export PGUSER=<username-of-postgresql-user>
export PGPASSWORD=<password-of-postgresql-user>
```

- Run these commands in the application folder in terminal or command prompt
```shell
composer update
php artisan key:generate
php artisan serve
```

> Now you must open your browser in the url shared by above command


## How to run in Docker
- Build a docker image
```shell
docker build -t <image-name>:<image-version> -f docker/dockerfile
```

- Run the docker container
```shell
docker run -itd --rm \
  --name <container-name> \
  -p <local-port>:8000 \
  -e PGHOST=<ip-of-postgresql-server> \
  -e PGUSER=<user-of-postgresql-user> \
  -e PGPASSWORD=<password-of-postgresql-user-password> \
  <image-name-created-before>
```
> Now you must open your browser in the http://localhost:8000

## To run tests
```shell
php artisan test
```

## You can see coverage tests in reports folder
```
/reports
```

## All changes
Please see [CHANGELOG](CHANGELOG.md) for more details.

## Contributing

Thank you for considering contributing to the db sync! The contribution guide can be found in the [Contribute documentation](.github/CONTRIBUTING.md).

## Security Vulnerabilities

If you discover a security vulnerability within DB Sync, please send an e-mail to Celso Nery via [celso.nery@gmail.com](mailto:celso.nery@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The DB Sync is open-sourced software licensed under the [MIT license](LICENSE).
