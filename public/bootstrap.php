<?php

require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
//    'cache' => '../cache',
]);

// Get the URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove any trailing slash from URI
if(substr($uri, -1) == '/') {
    $uri = substr($uri, 0, -1);
}

// Set URI to array
$uriSegments = explode("/", $uri );
unset($uriSegments[0]);

// See if the right template exists
if (file_exists('../templates'.$uri)) {

    // URI is a directory
    $template = '/'.$uri.'/index.twig';

} elseif(file_exists('../templates'.$uri.'.twig')) {

    // URI is a file
    $template = '/'.$uri.'.twig';

} else {
    echo "There is no template for this URI.";
}