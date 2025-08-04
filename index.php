<?php

require 'functions.php';
require 'router.php';

// connect to our MySQL database.

$dsn = "mysql:host=localhost; port=3306; user=root; dbname=myapp; charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

//dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}