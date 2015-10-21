<?php
//set up your routes
$app->get('/test', function() use ($app) {
    $data = Users::all()->toJson();
    echo $data;
});

?>
