<?php
$request_uri = $_SERVER['REQUEST_URI'];

$route = strtok($request_uri, '?');
$route = trim($route, '/');

$routes = [
    '' => 'index.php',
    'linc' => 'linc.php'
];

if (array_key_exists($route, $routes)) {
    include($routes[$route]);
} else {
    include('404.php');
}
?>
