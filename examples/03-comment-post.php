<?php

require __DIR__.'/../vendor/autoload.php';

use AnotherBlog\EntityManager;
use AnotherBlog\Entity\Comment;

$em = (new EntityManager())->get();

$user = $em->find('AnotherBlog\Entity\User', 2); // bob

$comment = new Comment();
$comment->setContent('Hi there. This is a comment.');
$comment->setAuthor($user);
$comment->setPublishedAt(new \DateTime());

$post = $em->find('AnotherBlog\Entity\Post', 1); // lorem-ipsum
$post->addComment($comment);

$em->persist($post);
$em->flush();
