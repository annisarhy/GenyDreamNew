
## GenyDream

a Laravel 7 project

### Links

[Design on Figma](https://www.figma.com/file/XPSwKWdnkGaEMh9p0VT6nn/Geny-Dream?node-id=83%3A2)

[Roadmap on Trello](https://trello.com/b/3s5MhFBj/genydream)

Postman Collections -> TBD

## Prerequisites

- Git
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

## Setup Mailtrap

- https://blog.mailtrap.io/send-email-in-laravel/

- Open and register an account in mailtrap.io (use github/gmail for faster registration~)

- Open demo inbox

- Then you will get something like this

  ```
  MAIL_MAILER=smtp
  MAIL_HOST=smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=[USERNAME]
  MAIL_PASSWORD=[PASSWORD]
  MAIL_ENCRYPTION=tls
  ```

- After that, copy that to .env, the default config is (you can recheck on .env.example)

  ```
  MAIL_MAILER=smtp
  MAIL_HOST=smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=[input USERNAME from mailtrap.io]
  MAIL_PASSWORD=[input PASSWORD from mailtrap.io]
  MAIL_ENCRYPTION=tls
  #don't forget this
  MAIL_FROM_ADDRESS=genydream@mail.id
  MAIL_FROM_NAME="${APP_NAME}"
  ```

- Done, test by registering an account.

