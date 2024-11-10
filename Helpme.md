# Docker Laravel - Guia de Gerenciamento de Pacotes

Este guia explica como gerenciar pacotes e bibliotecas em um projeto Laravel utilizando Docker.

## Instalação de Pacotes

### Método 1: Dentro do Container

Entre no container e execute os comandos diretamente:

```bash
# Entrar no container
docker compose exec laravel.test bash

# Dentro do container, usar o composer para adicionar packages
composer require nome-do-pacote
```

### Método 2: Execução Direta

Execute comandos sem entrar no container:

```bash
docker compose exec laravel.test composer require nome-do-pacote
```
ex.:
```bash
docker compose exec laravel.test composer require laravel/breeze --dev
```

## Exemplos Práticos

### Instalando Laravel Sanctum

```bash
docker compose exec laravel.test composer require laravel/sanctum
```

### Executando Migrations

Após instalar pacotes que necessitam de migrations:

```bash
docker compose exec laravel.test php artisan migrate
```

## Comandos Úteis

### Listar Pacotes Instalados

```bash
docker compose exec laravel.test composer show
```

### Atualizar Todos os Pacotes

```bash
docker compose exec laravel.test composer update
```
### Criar Classes

```bash
docker compose exec laravel.test php artisan make:model Concurso --migration
docker compose exec laravel.test php artisan migrate
docker compose exec laravel.test php artisan migrate:rollback
docker compose exec laravel.test php artisan route:list 
```

## Observações Importantes

- O nome `laravel.test` é o padrão do serviço no Laravel Sail
- Caso tenha personalizado o nome do serviço no seu `docker-compose.yml`, ajuste os comandos adequadamente
- Certifique-se de que o Docker está em execução antes de executar estes comandos

## Suporte

Se precisar de ajuda adicional ou tiver dúvidas sobre a instalação de pacotes específicos, sinta-se à vontade para abrir uma issue.




