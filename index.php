<?php

require './vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new Twig\Loader\FilesystemLoader('templates');
$twig = new Twig\Environment($loader);

$date = new DateTime('2020-01-01');

$news = array (
    'sections' => array(
        array('title' => 'Sport', 'date' => $date->format('Y-m-d'), 'description' => 'Lorem Ipsum'),
        array('title' => 'Economics', 'date' => $date->format('Y-m-d'), 'description' => 'Lorem Ipsum'),
        array('title' => 'Science', 'date' => $date->format('Y-m-d'), 'description' => 'Lorem Ipsum')
        )
    );

    // echo $twig->render('news.html.twig', $news);
    echo $twig->render('news.html.twig', $news);


?>