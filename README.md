# phrest-skeleton

A skeleton application for [phrest](https://github.com/DonUrks/phrest). 

## Installation ([Composer](https://getcomposer.org/))

```sh
composer create-project --stability dev donurks/phrest-skeleton
```

## Usage

Run PHP Webserver (document root should point to public)

```sh
cd phrest-skeleton
composer run-webserver
```

Call Messages-Action

```
http://localhost:8888/messages/12
```

Call Swagger-Action

```
http://localhost:8888/swagger
```

Call Errors-Action

```
http://localhost:8888/errors
```



