<?php

namespace AnotherBlog;

use Dotenv\Dotenv;
use Doctrine\ORM\Tools\Setup;

class EntityManager
{
    private $em;

    public function __construct()
    {
        $dotenv = new Dotenv(__DIR__.'/../');
        $dotenv->load();

        $paths = array(__DIR__.'/../src/Entity');
        $isDevMode = true;

        $dbParams = array(
            'host' => getenv('DB_HOST'),
            'driver' => getenv('DB_DRIVER'),
            'user' => getenv('DB_USERNAME'),
            'password' => getenv('DB_PASSWORD'),
            'dbname' => getenv('DB_DATABASE'),
        );

        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
        $this->em = \Doctrine\ORM\EntityManager::create($dbParams, $config);
    }

    public function get()
    {
        return $this->em;
    }
}
