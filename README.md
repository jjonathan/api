# Projeto com o intuito de ser uma API com poucos métodos e testes

## Para fazer o projeto rodar, seguir os passos abaixo:
* `cp .env.example .env`
* `touch /tmp/api.sql`
* `composer install`
* `php artisan migrate`

## Para rodar os testes:
`vendor/bin/phpunit tests/Feature/LocationTest.php`

## Para testar num servidor local:
`php artisan serve`

## Basicamente há 3 métodos:
* GET: /api - Lista a localização do usuário (necessário enviar user_id)
* POST: /api - Grava a localização de um usuário (necessário passar os parâmetros user_id, lat e lon)
* GET: /api/users - Lista todos os ids de usuários gravados préviamente