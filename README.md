# phrest-skeleton

A skeleton application for [phrest](https://github.com/DonUrks/phrest). 

## Installation ([Composer](https://getcomposer.org/))

Change composers minimum-stability due the lack of a stable release

```sh
composer config minimum-stability dev
composer require donurks/phrest-skeleton:dev-master
```

## Usage

Run PHP Webserver (document root should point to public)

```sh
php.exe -S 0.0.0.0:80 -t public
```

Call Messages-Action

```
http://localhost/messages/12
```

Call Swagger-Action

```
http://localhost/swagger
```

Call Errors-Action

```
http://localhost/errors
```



