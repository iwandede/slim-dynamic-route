# Dynamic Routing Slim Framework
Slim Framework using Twig Template, Illuminate Eloquent ORM

## Requirments
> - PHP 5.3 or higer
> - Database Driver

## Installation
    run in your command line composer install

Edit config.php

Change your database information

    $capsule->addConnection(array(
		'driver' 	=> 'mysql',
		'host' 		=> 'YOUR_HOST',
		'database' 	=> 'YOUR_DATABASE',
		'username' 	=> 'YOUR_USERNAME',
		'password' 	=> 'YOUR_PASSWORD',
		'charset'  	=> 'utf8',
    	'collation' => 'utf8_general_ci',
    	'prefix'    => ''
    ));

## Description

- Views to place your views using .twig or .html extension
- Models use the query from Eloquent ORM
- App Controller and routing your system

## FAQ
Fork me
