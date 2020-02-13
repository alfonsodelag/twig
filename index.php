<?php

require './vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new Twig\Loader\FilesystemLoader('templates');
$twig = new Twig\Environment($loader);

$date = new DateTime('2020-01-01');
// $news = array
// (
//     newsTitle = array("Title1", "Title2", "Title3")
//     newsDate = array("January", "February", "March")
//     newsDescription = array("Description1", "Description2", "Description3")
// )

// $template = $twig->load('news.html.twig');



// echo $template->render('news.html.twig', array(array(news1 => 'Sport', 'date' => $date->format('Y-m-d'), 'description' => 'Lorem Ipsum')
// array(news2 => 'Business', 'date' => $date->format('Y-m-d'), 'description' => 'Lorem Ipsum')
// array(news3 => 'Sport', 'Travels' => $date->format('Y-m-d'), 'description' => 'Lorem Ipsum')));

$news = array (
    'sections' => array(
        array('title' => 'Sport', 'date' => $date->format('Y-m-d'), 'description' => 'Lorem Ipsum'),
        array('title' => 'Business', 'date' => $date->format('Y-m-d'), 'description' => 'Lorem Ipsum'),
        array('title' => 'Travels', 'date' => $date->format('Y-m-d'), 'description' => 'Lorem Ipsum')
        )
    );

    // echo $twig->render('news.html.twig', $news);
    echo $twig->render('empty.html.twig', $news);


?>