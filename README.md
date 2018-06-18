## Doctrine without Symfony

This is Doctrine without Symfony, or a standalone Doctrine app if you like. Another blog in the form of a few PHP CLI examples with Docker.

### 1. Create the `.env` File

First things first, create the following `.env` file in the app's root folder.

    DB_DRIVER=pdo_mysql
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=another_blog
    DB_USERNAME=another_blog
    DB_PASSWORD=secret
    MYSQL_ROOT_PASSWORD=secret

### 2. Install Dependencies

Via composer:

    $ composer install

### 3. Start the Docker Services

    docker-compose up --build
