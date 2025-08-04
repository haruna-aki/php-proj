<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//dd(parse_url($uri));

// if ($uri === '/home') {
//     require './controllers/home.php';
// } else if ($uri === '/about') {
//     require './controllers/about.php';
// } else if ($uri === '/contact') {
//     require './controllers/contact.php';
// } else {
//     http_response_code(404);
//     echo "404 Not Found";
// }

$routes = [
    '/home' => 'controllers/home.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

function abort($code)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

function routeToController($routes, $uri)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];

    } else {
        abort(404);
    }
    
}

routeToController($routes, $uri);