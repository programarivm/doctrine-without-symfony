<?php

require __DIR__.'/../vendor/autoload.php';

use AnotherBlog\EntityManager;
use AnotherBlog\Entity\Post;
use AnotherBlog\Entity\User;

$em = (new EntityManager())->get();

$user = $em->find('AnotherBlog\Entity\User', 1); // alice

$post = new Post();
$post->setTitle('Lorem ipsum');
$post->setSlug('lorem-ipsum');
$post->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.');
$post->setSummary('Lorem ipsum dolor sit amet.');
$post->setAuthor($user);
$post->setPublishedAt(new \DateTime());

$em->persist($post);
$em->flush();
