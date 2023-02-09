<?php
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    // SETAR HORARIO DO SERVIDOR
    date_default_timezone_set('America/Sao_Paulo');

    include_once 'routes.php';
    include_once 'controller/router.php';

    $Router = new Router();
    $Router->run($routes);
?>