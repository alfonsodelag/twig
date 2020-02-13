<?php

require './vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new Twig\Loader\FilesystemLoader('templates');
$twig = new Twig\Environment($loader);

// $news = array
// (
//     newsTitle = array("Title1", "Title2", "Title3")
//     newsDate = array("January", "February", "March")
//     newsDescription = array("Description1", "Description2", "Description3")
// )

$template = $twig->load('home.html.twig');

echo $template->render();

?>