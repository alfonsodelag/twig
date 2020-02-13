<?php

$loader = new \Twig\Loader\FilesystemLoader($templateDir);
$twig = new \Twig\Environment($loader, ['debug' => true]);

$news = array
(
    newsTitle = array("Title1", "Title2", "Title3")
    newsDate = array("January", "February", "March")
    newsDescription = array("Description1", "Description2", "Description3")
)




?>