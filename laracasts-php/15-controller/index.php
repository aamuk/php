<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

echo $uri;

if ($uri === '/LAPTOP/PHP/laracasts-php/15-controller/'){
    require 'controllers/index.php';
} elseif ($uri === '/LAPTOP/PHP/laracasts-php/15-controller/about.php') {
    require 'controllers/about.php';
}