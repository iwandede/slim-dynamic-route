<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection(array(
		'driver' 	=> 'mysql',
		'host' 		=> '127.0.0.1',
		'database' 	=> 'boykepedia',
		'username' 	=> 'root',
		'password' 	=> 'rahasia',
		'charset'  	=> 'utf8',
    	'collation' => 'utf8_general_ci',
    	'prefix'    => ''
));

$capsule->setAsGlobal();
$capsule->bootEloquent();
?>
