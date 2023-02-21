<?php

require 'functions.php';

$dsn = "'mysql:server=localhost;dbname=myapp', 'root', 'lollol'";

$pdo = new PDO($dsn);
$statement = $pdo->prepare("select * from posts");
$statement->execute();
$posts = $statement->fetchAll();
dd($posts);

