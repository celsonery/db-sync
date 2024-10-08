# Database Sync - Celso Nery

[![Maintainer](http://img.shields.io/badge/maintainer-@celsonery-blue.svg?style=flat-square)](https://x.com/celsonery)
[![Latest Version](https://img.shields.io/github/release/celsonery/db-sync.svg?style=flat-square)](https://github.com/celsonery/db-sync/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/celsonery/db-sync.svg?style=flat-square)](https://scrutinizer-ci.com/g/celsonery/db-sync)
[![Quality Score](https://img.shields.io/scrutinizer/g/celsonery/db-sync.svg?style=flat-square)](https://scrutinizer-ci.com/g/celsonery/db-sync/build-status/main)

# English README
[![en](https://img.shields.io/badge/lang-en-blue.svg)](https://github.com/celsonery/db-sync/blob/main/README.md)

## Sobre DB Sync
O aplicativo DB Sync nasceu porque a equipe de desenvolvimento precisava transferir dados dos bancos de dados prod para dev.
Este aplicativo descarta, cria e transfere dados do database-name para database-name_dev, se _dev não existir,
o aplicativo o criará.

## Requisitos
```shell
PHP 8.2+
```

- Pacotes
```shell
zip unzip libzip libzip-dev libpq-dev libpng-dev oniguruma-dev git lynx nodejs npm postgresql-client
```

- PHP Extensões
```shell
php82-bcmath php82-bz2 php82-calendar php82-exif php82-gettext php82-opcache php82-pcntl php82-zip php82-pgsql
```

## Instalação

Este aplicativo está disponível via Github/Gitlab
```shell
git clone git@github.com/celsonery/db-sync.git

ou

git clone https://github.com/celsonery/db-sync.git
```
- 
- Primeiro você deve criar as variáveis de ambiente
```shell
export PGHOST=<ip-do-servidor-postgresql>
export PGUSER=<usuario-do-postgresql>
export PGPASSWORD=<senha-do-usuario-postgresql>
```

- Execute estes comandos na pasta do aplicativo em um terminal ou prompt de comando
```shell
composer update
php artisan key:generate
php artisan optimize
php artisan serve
```

> Agora você deve abrir a url informada pelo comando acima.

## Como rodar no Docker
- Contrua a imagem Docker
```shell
docker build -t <nome-da-imagem>:<versao-da-imagem> -f docker/dockerfile
```

- Rodando o conteiner Docker
```shell
docker run -itd --rm \
  --name <nome-do-conteiner> \
  -p <porta-local>:8000 \
  -e PGHOST=<ip-do-servidor-postgresql> \
  -e PGUSER=<usuario-do-postgresql> \
  -e PGPASSWORD=<senha-do-usuario-postgresql> \
  <nome-da-imagem-docker-criada-anteriormente>
```
> Agora você deve abrir a url http://localhost:8000 no seu browser

## Para rodar os testes automatizados
```shell
php artisan test
```

## Gerar relatório da cobertura de tests
```shell
XDEBUG_MODE=coverage php artisan test --coverage-html reports/
```

## Você pode ver a cobertura de testes na pasta reports
```shell
/reports
```

## Modificações
Por favor veja em [CHANGELOG](CHANGELOG.md) para mais detalhes.

## Contribuindo
Obrigado por considerar contribuir para a DB Sync! O guia de contribuição pode ser encontrado na [documentação do Contribute](.github/CONTRIBUTING.pt-br.md).


## Vulnerabilidades de Segurança
Se você descobrir uma vulnerabilidade de segurança no DB Sync, envie um e-mail para Celso Nery via [celso.nery@gmail.com](mailto:celso.nery@gmail.com). Todas as vulnerabilidades de segurança serão prontamente tratadas.

## Licença
O DB Sync é um software de código aberto licenciado sob a [licença MIT](LICENSE).
