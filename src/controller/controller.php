<?php
    include_once('login.php');
    include_once('monitoraInternet.php');

    $metodo = isset($_POST['metodo']) ? $_POST['metodo'] : ""; 
    
    switch($metodo){
        case 'login':
            $login = new LoginController();
            $response = $login->login($_POST);
            break;
        case 'logout':
            $login = new LoginController();
            $response = $login->logout($_POST);
            break;
        ///////////////////////////////////////////////////////////////////////////////
        case 'monitoraInternet':
            $monitoraInternet = new monitoraInternet();
            $response = $monitoraInternet->monitorar($_POST);
            break;
        default:
            $response ="Método não encontrado";
    }

    echo $response;
?>