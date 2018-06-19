<?php

require __DIR__.'/../vendor/autoload.php';

use AnotherBlog\EntityManager;
use AnotherBlog\Entity\User;

$em = (new EntityManager())->get();
$user = new User();

$user->setFullName('Bob');
$user->setUsername('bob');
$user->setEmail('bob@no-reply.com');
$user->setPassword('password');

$em->persist($user);
$em->flush();
