<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
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

$capsule->setAsGlobal();
$capsule->bootEloquent();
?>
