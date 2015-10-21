<?php
session_start();
if (__DIR__ == '__DIR__') {
	die('you need php 5.3 get this working…'); 
}

//define root path
define('ROOT', realpath(__DIR__).'/');

require_once ROOT.'vendor/autoload.php';
require_once ROOT.'config.php';

$app = new \Slim\Slim([
        'debug' => true,
        'templates.path' => 'views'
    ]);
 
$app->view = new \Slim\Views\Twig();
$app->view->setTemplatesDirectory('views');

// Template configuration
$view = $app->view();
$view->parserOptions = ['debug' => true];
$view->parserExtensions = [new \Slim\Views\TwigExtension()];
// cookies configuration
$app->add(new \Slim\Middleware\SessionCookie(array(
    'expires' => '30 minutes',
    'path' => '/',
    'domain' => null,
    'secure' => false,
    'httponly' => false,
    'name' => 'slim_session',
    'secret' => '*r^aH@$1a%',
    'cipher' => MCRYPT_RIJNDAEL_256,
    'cipher_mode' => MCRYPT_MODE_CBC
)));

// app router
$app->hook("slim.before.router",function() use ($app){
	$files = scandir("app");
	foreach($files as $file){
		if(is_file("app/".$file)){
			require_once('app/'.$file);			
		} else {
			$app->get('/', function() use ($app){
				return $app->render('profile.html');
			});
		}
	}
});

$app->notFound(function () use ($app) {
	$app->render('error_404.html');
});
$app->run();


