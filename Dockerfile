FROM php:cli

RUN apt-get update && apt-get install -y \
    mysql-client
RUN docker-php-ext-install pdo pdo_mysql
