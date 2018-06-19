## Doctrine without Symfony

This is Doctrine without Symfony, or a standalone Doctrine app if you like -- another blog in the form of a few PHP CLI examples with Docker.

### Create the `.env` File

First things first, create the following `.env` file in the app's root folder.

    DB_DRIVER=pdo_mysql
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=another_blog
    DB_USERNAME=root
    DB_PASSWORD=password

### Install Dependencies

Via composer:

    $ composer install

### Start the Docker Services

    docker-compose up --build

### Run the PHP CLI Examples

SSH the blog container:

    sudo docker exec -it <container name> /bin/bash

Create the database schema:

    php vendor/bin/doctrine orm:schema-tool:create

Run the examples:

    php examples/01-create-users.php
    php examples/02-write-post.php
    php examples/03-comment-post.php
