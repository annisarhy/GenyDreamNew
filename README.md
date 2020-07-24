
## GenyDream

a Laravel 7 project

### Links

[Design on Figma](https://www.figma.com/file/XPSwKWdnkGaEMh9p0VT6nn/Geny-Dream?node-id=83%3A2)

[Roadmap on Trello](https://trello.com/b/3s5MhFBj/genydream)

Postman Collections -> TBD

## Prerequisites

- PHP (for running Laravel)

- Composer (package manager)

## Build

- Clone this repo
- Open terminal from inside repo
- Run `composer install` on terminal
- Create an .env (you can use env.example from this repo, just copy it and rename it to .env)
- Run `php artisan key:generate` to generate app key
- Run `php artisan jwt:secret` to generate tymon/jwt-auth secret key
- Create a database (or use existing one)
- Specify the database inside .env that you create
- Run `php artisan migrate`, this will scaffold your DB
- Finally run `php artisan serve`
- Check localhost address (usually localhost:8080) on your browser