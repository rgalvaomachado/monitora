<?php
    include_once('env.php');
    include_once('controller/router.php');
    include_once('routes.php');

    if (!session_start()) {
        session_start();
    }

    // SETAR HORARIO DO SERVIDOR
    date_default_timezone_set('America/Sao_Paulo');

    $Router = new Router();
    if($Router->checkApi()){
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        $Router->runApi($routesAPI);
    }else{
        $Router->runView($routesView);
    }
    
?>