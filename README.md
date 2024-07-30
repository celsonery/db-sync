# Database Sync - by Celso Nery

[![Maintainer](http://img.shields.io/badge/maintainer-@celsonery-blue.svg?style=flat-square)](https://x.com/celsonery)
[![Latest Version](https://img.shields.io/github/release/celsonery/db-sync.svg?style=flat-square)](https://github.com/celsonery/db-sync/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/celsonery/db-sync.svg?style=flat-square)](https://scrutinizer-ci.com/g/celsonery/db-sync)
[![Quality Score](https://img.shields.io/scrutinizer/g/celsonery/db-sync.svg?style=flat-square)](https://scrutinizer-ci.com/g/celsonery/db-sync/build-status/main)

## Installation

This application is available in Github:

```bash
git clone git@github.com/celsonery/db-sync.git
or
git clone https://github.com/celsonery/db-sync.git

composer update
php artisan key:generate
php artisan serve
```

## How to run in docker
- Build a docker image
```bash
docker build -t <image-name>:<image-version> -f docker/dockerfile
```

- Run the docker image
```bash
docker run -itd --rm --name <name-of-container> -p <local-port>:8000 <image-name>
```

## To run tests run
```bash
php artisan test
```
## You can see coverage tests in html report
```
/reports
```

## All changes
Please see [CHANGELOG](CHANGELOG.md) for more details.

## About DB Sync


## Contributing

Thank you for considering contributing to the db sync! The contribution guide can be found in the [Contribute documentation](.github/CONTRIBUTING.md).

## Security Vulnerabilities

If you discover a security vulnerability within db sync, please send an e-mail to Celso Nery via [celso.nery@gmail.com](mailto:celso.nery@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The DB Sync is open-sourced software licensed under the [MIT license](LICENSE).
