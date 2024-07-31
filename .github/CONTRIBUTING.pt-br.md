# Contribuindo

Contribuições são **bem-vindas** via Pull Requests no [Github](https://github.com/celsonery/db-sync).

Uma leitura interessante é [Contribuindo para um Projeto Github](http://jasonlewis.me/article/contributing-to-a-github-project).

Tente também codificar no mesmo estilo do Laravel (que segue as diretrizes do [padrão PSR](http://www.php-fig.org/)).

Se você quiser executar o conjunto de testes do Package, experimente os comandos `composer tests` ou `php artisan test` ou `./vendor/bin/phpunit`.

## Coisas para fazer
Se você quiser contribuir, mas não sabe por onde começar, esta lista fornece alguns pontos de partida.
- Teste vários comandos, bem como as diferentes opções.
- Teste o Conveyor e o Wrapping por conta própria.
- Teste os comandos `publish` e `tests`.
- Remover um pacote deixa (vários) espaços em branco em composer.json. Isso pode ser feito de forma diferente?

## Solicitações de pull

- **Adicione testes!** - Seu patch provavelmente não será aceito se não tiver testes.

- **Documente qualquer mudança no comportamento** - Certifique-se de que o `readme.md`, `changlog.md` e qualquer outra documentação relevante sejam mantidos atualizados.

- **Considere nosso ciclo de lançamento** - Tentamos seguir [SemVer 2.0.0](http://semver.org/). Quebrar APIs públicas aleatoriamente não é uma opção.

- **Uma solicitação de pull por recurso** - Se você quiser fazer mais de uma coisa, envie várias solicitações de pull.

- **Envie um histórico coerente** - Certifique-se de que cada commit individual em sua solicitação de pull seja significativo. Se você teve que fazer vários commits intermediários durante o desenvolvimento, por favor, [esmague-os](http://www.git-scm.com/book/en/v2/Git-Tools-Rewriting-History#Changing-Multiple-Commit-Messages) antes de enviar.

**Boa codificação**!
