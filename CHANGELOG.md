<!--- BEGIN HEADER -->
# Changelog


<!--- END HEADER -->

## [1.3.1](https://github.com/celsonery/db-sync/compare/v1.3.0...v1.3.1) (2024-08-12)

### Correções de erros

* Corrige conflitos e refatora extra.ini, dockerfile e dockerfile-full ([2a76cf](https://github.com/celsonery/db-sync/commit/2a76cf8c524433790a77a88023f135c8cd7481e2))
* Insere no código host e username do postgres ([dafd08](https://github.com/celsonery/db-sync/commit/dafd080ba92ab6acad9c8fb861bcd1d37550c736))
* Modifica dockerfile para usar entrypoint.sh ([175dd1](https://github.com/celsonery/db-sync/commit/175dd1dafd09817dc937c044c988c40eedde751f))

### Refatorações

* Modifica encapsulamento das variaveis ([8d03b7](https://github.com/celsonery/db-sync/commit/8d03b72b0a28f54ba3a39829afae25f2952fac09))

### Integração continua

* Alterna dockerfiles ([068388](https://github.com/celsonery/db-sync/commit/06838882c80d7aeb1e1bfa4910a972ecf06d6281))


---

## [1.3.0](https://github.com/celsonery/db-sync/compare/v1.2.3...v1.3.0) (2024-08-12)

### Novas funcionalidades

* Cria dockerfile-full ([f7cd27](https://github.com/celsonery/db-sync/commit/f7cd270c88b30205592b6fbb81d0b65486a4d429))

### Refatorações

* Adiciona sonar-project.properties ao .gitignore ([37c5ee](https://github.com/celsonery/db-sync/commit/37c5eee0cf0c4a156b4eb2382cdff5a7ff96e4b2))
* Altera encapsulamento das variaveis pgHost e pgUser para protected ([1893ff](https://github.com/celsonery/db-sync/commit/1893ffe72cf41d5cfad0eb86773995ddc110d712))
* Altera porta do conteiner para 80 ([7e6788](https://github.com/celsonery/db-sync/commit/7e6788711c9f1ab4ecba2551ac3f16bba80199c6))

### Alterações sem importâncias

* Adiciona log de erro no commando Process. ([4f5974](https://github.com/celsonery/db-sync/commit/4f5974fb6ba1bc3cd079ae02292a32ae7bdc6a82))
* Adiciona log dockerfile-php-fpm-nginx-mysql ([356ee5](https://github.com/celsonery/db-sync/commit/356ee511a85da7e840371ce02f618b5a03a61123))


---

## [1.2.3](https://github.com/celsonery/db-sync/compare/v1.2.2...v1.2.3) (2024-08-09)

### Correções de erros

* Acrescenta Variaveis de ambiente no extra.ini ([55a6b4](https://github.com/celsonery/db-sync/commit/55a6b458fd235b9bd19188e11d2e011e3ae3104b))
* Corrige PGUSERNAME na variavel de ambiente ([8cb71f](https://github.com/celsonery/db-sync/commit/8cb71ffcfa6530a93cbf49c98d788a06d98c3537))
* Corrige variaveis de ambientes ([25b936](https://github.com/celsonery/db-sync/commit/25b936c56643b92b46caf6197277c5d34434150c))

### Refatorações

* Adiciona alt pagina principal ([5d1c0d](https://github.com/celsonery/db-sync/commit/5d1c0d109f8195732483851b016b534a7f7b4136))
* Adiciona novas variaveis ao ambiente em deployments.yml ([d80203](https://github.com/celsonery/db-sync/commit/d80203a08825bd0a6de5999b1ece0484b4eeae54))
* Altera dockerfile para adicionar variables_order no php.ini e cria database.sqlite vazio ([69c2a7](https://github.com/celsonery/db-sync/commit/69c2a7a5e6765835436057ec14b6973972aa7049))
* Altera imagens docker ([e18473](https://github.com/celsonery/db-sync/commit/e184735d2bd19c77773286b594268d0884655b84))
* Altera logo da aplicação ([f978a8](https://github.com/celsonery/db-sync/commit/f978a8b75e9d4539534234e61cedfbd9d97268c6))
* Altera posição script e template ([899341](https://github.com/celsonery/db-sync/commit/89934131f88b9bf0d0b7e75ddf5f759a1aaabd5c))
* Altera página principal para login ([5c8fe7](https://github.com/celsonery/db-sync/commit/5c8fe7319078a139585cc7f025066d47ff85c746))
* Cria os usuários no banco com senha aleatória ([208ff6](https://github.com/celsonery/db-sync/commit/208ff68d3daa368fef633b70b7d7a81e3730e39a))

### Alterações sem importâncias

* Acrescenta arquivos buildados do front e da cobertura de tests no .gitignore ([191c95](https://github.com/celsonery/db-sync/commit/191c9597493ae999f9f196af7daa510021fbfe52))
* Update composer.json ([e456b1](https://github.com/celsonery/db-sync/commit/e456b1dfe743233d9044e9a324b3868af3f54810))


---

## [1.2.3](https://github.com/celsonery/db-sync/compare/v1.2.2...v1.2.3) (2024-08-09)

### Correções de erros

* Acrescenta Variaveis de ambiente no extra.ini ([55a6b4](https://github.com/celsonery/db-sync/commit/55a6b458fd235b9bd19188e11d2e011e3ae3104b))
* Corrige PGUSERNAME na variavel de ambiente ([8cb71f](https://github.com/celsonery/db-sync/commit/8cb71ffcfa6530a93cbf49c98d788a06d98c3537))
* Corrige variaveis de ambientes ([25b936](https://github.com/celsonery/db-sync/commit/25b936c56643b92b46caf6197277c5d34434150c))

### Refatorações

* Adiciona alt pagina principal ([5d1c0d](https://github.com/celsonery/db-sync/commit/5d1c0d109f8195732483851b016b534a7f7b4136))
* Adiciona novas variaveis ao ambiente em deployments.yml ([d80203](https://github.com/celsonery/db-sync/commit/d80203a08825bd0a6de5999b1ece0484b4eeae54))
* Altera dockerfile para adicionar variables_order no php.ini e cria database.sqlite vazio ([69c2a7](https://github.com/celsonery/db-sync/commit/69c2a7a5e6765835436057ec14b6973972aa7049))
* Altera imagens docker ([e18473](https://github.com/celsonery/db-sync/commit/e184735d2bd19c77773286b594268d0884655b84))
* Altera logo da aplicação ([f978a8](https://github.com/celsonery/db-sync/commit/f978a8b75e9d4539534234e61cedfbd9d97268c6))
* Altera posição script e template ([899341](https://github.com/celsonery/db-sync/commit/89934131f88b9bf0d0b7e75ddf5f759a1aaabd5c))
* Altera página principal para login ([5c8fe7](https://github.com/celsonery/db-sync/commit/5c8fe7319078a139585cc7f025066d47ff85c746))
* Cria os usuários no banco com senha aleatória ([208ff6](https://github.com/celsonery/db-sync/commit/208ff68d3daa368fef633b70b7d7a81e3730e39a))

### Alterações sem importâncias

* Acrescenta arquivos buildados do front e da cobertura de tests no .gitignore ([191c95](https://github.com/celsonery/db-sync/commit/191c9597493ae999f9f196af7daa510021fbfe52))
* Update composer.json ([e456b1](https://github.com/celsonery/db-sync/commit/e456b1dfe743233d9044e9a324b3868af3f54810))


---

## [1.2.2](https://github.com/celsonery/db-sync/compare/v1.2.1...v1.2.2) (2024-08-02)

### Correções de erros

* Altera nome da aplicação no kubernetes ([f17f93](https://github.com/celsonery/db-sync/commit/f17f93cf420e3326d4c27af829d7b92164511193))
* Corrige a falta de conexão com banco postgresql ([bfa742](https://github.com/celsonery/db-sync/commit/bfa7426276b891e83524716e8f96f6b79fd7ecbd))

### Refatorações

* Altera .gitlab-ci.yml ([2331c3](https://github.com/celsonery/db-sync/commit/2331c3f434e7ee7196a1294b5aaefcd455052ace))

### Alterações sem importâncias

* Altera versão ([dbdbe0](https://github.com/celsonery/db-sync/commit/dbdbe0aff0492a4571a008a227be45b0470d40a7))


---

## [1.2.2](https://github.com/celsonery/db-sync/compare/v1.2.1...v1.2.2) (2024-08-02)

### Correções de erros

* Altera nome da aplicação no kubernetes ([f17f93](https://github.com/celsonery/db-sync/commit/f17f93cf420e3326d4c27af829d7b92164511193))
* Corrige a falta de conexão com banco postgresql ([bfa742](https://github.com/celsonery/db-sync/commit/bfa7426276b891e83524716e8f96f6b79fd7ecbd))

### Refatorações

* Altera .gitlab-ci.yml ([2331c3](https://github.com/celsonery/db-sync/commit/2331c3f434e7ee7196a1294b5aaefcd455052ace))

### Alterações sem importâncias

* Altera versão ([dbdbe0](https://github.com/celsonery/db-sync/commit/dbdbe0aff0492a4571a008a227be45b0470d40a7))


---

## [1.2.2](https://github.com/celsonery/db-sync/compare/v1.2.1...v1.2.2) (2024-08-02)

### Refatorações

* Altera .gitlab-ci.yml ([2331c3](https://github.com/celsonery/db-sync/commit/2331c3f434e7ee7196a1294b5aaefcd455052ace))


---

## [1.2.1](https://github.com/celsonery/db-sync/compare/v1.2.0...v1.2.1) (2024-08-02)

### Correções de erros

* Corrige dockerfile .gitlab-ci.yml e deployments.yml ([ced3f7](https://github.com/celsonery/db-sync/commit/ced3f78e914529a603a3d8beff95c857b7ced2a9))

### Refatorações

* Ordena .dockerignore e acrescenta alguns arquivo e pastas ([a81605](https://github.com/celsonery/db-sync/commit/a8160570bbdb787d13df565df8e660739c9024b9))


---

## [1.2.0](https://github.com/celsonery/db-sync/compare/v1.1.1...v1.2.0) (2024-08-02)

### Novas funcionalidades

* Adiciona Gitlab-CI e Deployment para kubernetes ([3fc9d1](https://github.com/celsonery/db-sync/commit/3fc9d1b9818cc3a7f3d4225bbd6c4af52f72bbfa))
* Adiciona sonarqube ([39d591](https://github.com/celsonery/db-sync/commit/39d59165680154072b46875deb19b0162c3c5915))
* Cria dockerfile para criação de conteiner ([425fc7](https://github.com/celsonery/db-sync/commit/425fc76119f03fe8faf289ef507f8c483486decb))

### Correções de erros

* Adiciona public/build ([2ded10](https://github.com/celsonery/db-sync/commit/2ded1033f2d08b4e55aa7074b1eb977adeaa9668))
* Corrige composer.json script pint ([d51b91](https://github.com/celsonery/db-sync/commit/d51b91d601447a0fa8f33cd90586825279e489c5))
* Volta /public/build do .gitignore ([61cd06](https://github.com/celsonery/db-sync/commit/61cd067f57fb0fc48ddd06dcd736eea8f4bb0386))

### Refatorações

* Aplicado pint para code quality ([f8702d](https://github.com/celsonery/db-sync/commit/f8702dfb52adfbefcadc3b7a2e0152ea1751c2c0))

### Integração continua

* Adiciona migrate ([3c8d69](https://github.com/celsonery/db-sync/commit/3c8d69d1a5b9f42b4b9f6c7c4ddeba23e663c88f))
* Altera APP_ENV para local e acerta sobre em README.pt-br.md ([96a9d2](https://github.com/celsonery/db-sync/commit/96a9d28b20b9e77dc9620e61903935d8c17e1317))


---

## [1.1.1](https://github.com/celsonery/db-sync/compare/v1.1.0...v1.1.1) (2024-07-31)

### Correções de erros

* Retorna ExampleTest.php em Unit tests ([9594b5](https://github.com/celsonery/db-sync/commit/9594b56870e231758c2e3809e82ea7232841e3d8))


---

## [1.1.0](https://github.com/celsonery/db-sync/compare/v1.0.0...v1.1.0) (2024-07-31)

### Novas funcionalidades

* Cria CHANGELOG.md ([16765b](https://github.com/celsonery/db-sync/commit/16765bb2ea282d20401184aafd9239693e8cf53c))

### Testes

* Altera Testes ([f36cd9](https://github.com/celsonery/db-sync/commit/f36cd929a693acd7e00393bca04a3a0f36db9d7b))

### Documentação

* Ajusta README.md, CONTRIBUTING.pt-br.md, README.pt-br.md e SECURITY.pt-br.md ([3922c7](https://github.com/celsonery/db-sync/commit/3922c71edd4c28b83d848ca2c85bad9626630aa5))

### Alterações sem importâncias

* Ajusta .env.example ([5c8f14](https://github.com/celsonery/db-sync/commit/5c8f14351054337478361a914cae47bba151652b))
* Altera README.md ([b4d015](https://github.com/celsonery/db-sync/commit/b4d015f3d92c5da5d07457f9a508b7cd4d899dfe))


---

## [1.0.0](https://github.com/celsonery/db-sync/compare/17e71ea0ef1b8544c5e01b1a194004a2d7f582b2...v1.0.0) (2024-07-30)

### Novas funcionalidades

* Adiciona Github Action ([67a053](https://github.com/celsonery/db-sync/commit/67a053585bad3792058b42000dda1dd5808633fa))
* Adiciona LICENSE ([b551ef](https://github.com/celsonery/db-sync/commit/b551ef8f039e0328fcefdd7f3430e42afc553dcf))
* Adiciona PHP Auto CHANGELOG ([c07462](https://github.com/celsonery/db-sync/commit/c07462c9da7183aeeb7553d1ecf3cfbe1e3e020a))
* Configura scrutinizer ([a1ed29](https://github.com/celsonery/db-sync/commit/a1ed29dcfbb34cb5ee8accff57ad17642a9eba2c))
* Cria a sicronizacao de bancos ([a1803e](https://github.com/celsonery/db-sync/commit/a1803e937279da1ef852acec4a80f9e6604a3697))
* Cria os retornos dos banco de dados ([b0126b](https://github.com/celsonery/db-sync/commit/b0126b9a70f9dc36474d8959e6bf2bea92974ee3))
* Cria sincronizacao, service e atualiza reports coverage ([928a35](https://github.com/celsonery/db-sync/commit/928a35e99c7c5868fbe40c9a7d4c8f1b3e1f9697))
* Traduzindo mensagens do Laravel ([2c28b5](https://github.com/celsonery/db-sync/commit/2c28b5f5a31cd4f815969b1aad24c9c48d74360f))

### Correções de erros

* Corrige Code Quality ([37f304](https://github.com/celsonery/db-sync/commit/37f30470bb8b151fdf2a0c7f4f3880eb190446be))

### Refatorações

* Altera README.md ([5fc7b6](https://github.com/celsonery/db-sync/commit/5fc7b6eb4d630ca23d15fc3cfcc996e9baffe846))
* Limpa consoles.logs em Dashboard.vue ([91d815](https://github.com/celsonery/db-sync/commit/91d8150400c1273769757adc4071291da1d4348e))

### Testes

* Geração do report coverage ([6bc78a](https://github.com/celsonery/db-sync/commit/6bc78ad9e4fdacccc0a1ef4e13c27281e40f8689))

### Builds

* Ativa sqlite database e database em memória no phpunit.xml ([adf306](https://github.com/celsonery/db-sync/commit/adf306efd4623408bef36ccd3d3e0a62081444db))


---

