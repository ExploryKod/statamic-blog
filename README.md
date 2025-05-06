# Un blog avec Statamic et Laravel

**Template originellement issue de ce tutoriel**: [ici](https://betterstack.com/community/guides/scaling-php/laravel-docker/)

**Dans un but d'apprentissage j'ai changé le template de ce tutoriel en ajoutant Statamic et autres choses.**

Le but est d'apprendre à se servir de Statamic, Laravel et Docker (sans utiliser Laravel Sail).

Apprentissage en cours : l'installation via docker ne fonctionne pas encore.

![Screenshot or GIF of the application in action](screenshot.jpg)

## 🟢 Prérequis

Avoir sur sa machine:

- [Laravel](https://laravel.com/docs/installation)
- [PHP-8.2 or more](https://www.php.net/downloads)
- [NodeJS-20 or more](https://nodejs.org/en/download/)

Or (Attention c'est en cours de configuration sur l'app):
- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## 📦 Démarrer

### Local (Terminal et IDE):

1. `composer install`
2. `npm install`
3. `php artisan migrate`
4. `php artisan serve`

### docker (ATTENTION: en cours de configuration sur l'app):
`docker compose up -d`
`docker exec -it laravel-blog-app bash`
*Inside the container:*
`composer install`
`php artisan migrate`
`php artisan db:seed`
`php artisan serve`

Statamic, creer un compte super admin: 
`php artisan please make:user`

Puis aller sur `http://localhost:8000`
Et pour le backoffice, aller sur `http://localhost:8000/cp`

## ⚖ License

The code used in this project and in the linked tutorial are licensed under the
[Apache License, Version 2.0](LICENSE)
