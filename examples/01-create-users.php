<?php

require __DIR__.'/../vendor/autoload.php';

use AnotherBlog\EntityManager;
use AnotherBlog\Entity\User;

$em = (new EntityManager())->get();

$bob = new User();
$bob->setFullName('Alice');
$bob->setUsername('alice');
$bob->setEmail('alice@no-reply.com');
$bob->setPassword('password');

$alice = new User();
$alice->setFullName('Bob');
$alice->setUsername('bob');
$alice->setEmail('bob@no-reply.com');
$alice->setPassword('password');

$em->persist($alice);
$em->persist($bob);
$em->flush();
