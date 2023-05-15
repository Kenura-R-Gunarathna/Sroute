# Simple Route - PHP #

This is a light weight php routing system.

## Installation ##

You can start using this right away by simply creating a `index.php` file inside your main root directory.

```
<?php

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/routes/web.php';
require_once __DIR__ . '/routes/api.php';

```

Thats all your program will eun smoothly. 

* We would like to mention that we are currenltly working on this routing system to immprove this in a cms like wordpress but with more coding support for simple websites with 1-5 pages which in case Laravel is a heavy framework.

## Managing Routes ##

inside the `routes` folder we have the `web.php` file where we manage the routes of our website.

```
<?php

use KenuraRGunarathna\Sroute\Route;

$route = new Route();

$route->get('/', 'welcome.html');
$route->get('/contact', 'contact.html');

/*
s
$route->post($uri, $callback);
$route->put($uri, $callback);
$route->patch($uri, $callback);
$route->delete($uri, $callback);
$route->options($uri, $callback);

*/
```

You han handle GET, POST, PUT, PATCH, DELETE, OPTIONS requests inside this.

## Managing the Views ##

inside the views folder you can put any type of html, php, blade file to `views` the file in specifig request.