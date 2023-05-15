<?php

use KenuraRGunarathna\Sroute\Route;

$route = new Route();

$route->get('/', 'welcome.html');
$route->get('/contact', 'contact.html');

/*

$route->post($uri, $callback);
$route->put($uri, $callback);
$route->patch($uri, $callback);
$route->delete($uri, $callback);
$route->options($uri, $callback);

*/