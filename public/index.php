<?php

require_once __DIR__ . "/../vendor/autoload.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if($uri ==! "/") {
    $uri = rtrim($uri, '/');
}

// Tableau associatif de routes
$routes = [
    '/' => __DIR__ . '/../app/views/home.php',
    '/home' => __DIR__ . '/../app/views/home.php',
    "/login" => __DIR__ . "/../app/views/login.php"
];

// Si la route existe, inclure le bon fichier
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    // Page 404 personnalisée
    http_response_code(404);
//    require 'pages/404.php';
}

include_once __DIR__ . "/../app/imports/fonts.php";
?>

