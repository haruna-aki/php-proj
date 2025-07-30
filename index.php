<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/home') {
    require './controllers/home.php';
} else if ($uri === '/about') {
    require './controllers/about.php';
} else if ($uri === '/contact') {
    require './controllers/contact.php';
} else {
    http_response_code(404);
    require './views/404.view.php';
}