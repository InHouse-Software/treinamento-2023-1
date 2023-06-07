#### Treinamento HTML5

Estamos fazendo um site de receitas usando somente HTML5, CSS3, PHP e Javascript
sem usar nenhum framework.

Existem alguns pontos que são más práticas de programação mas que vamos
corrigindo conforme a turma for avançando


#### Requisitos

- PHP 8.1.2 ou maior
- php-pgsql
- Postgresql

#### Como rodar o projeto

- Iniciar o servidor:

```shell
php -S localhost:8000
```

- Criar um banco de dados postgresql chamado `recipes_db` com usuário `postgres`
  e senha `postgres`

- Criar uma tabela de receitas contendo o `id`, `title`, `description`,
  `created_at`, `updated_at` (ainda vamos adicionar o schema)

- Navegar para http://localhost:8000
