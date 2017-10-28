<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

    $sql = new App\DB\Sql();
    $result = $sql->select("Select * from tb_users");

    echo json_encode($result);

});

$app->run();

?>