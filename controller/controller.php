<?php
    include_once('login.php');

    $metodo = isset($_POST['metodo']) ? $_POST['metodo'] : ""; 
    
    switch($metodo){
        case 'login':
            $login = new LoginController();
            $response = $login->login($_POST);
            break;
        ///////////////////////////////////////////////////////////////////////////////
        default:
            $response ="Método não encontrado";
    }

    echo $response;
?>