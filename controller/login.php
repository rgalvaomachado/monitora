<?php

class LoginController {
    function login($post){
        // $usuario = $post['usuario'];
        // $senha = $post['senha'];
        $validado = true;
        
        if($validado){
            session_start();
            return json_encode([
                "acesso" => $validado
            ]);
        }
    }

    function logout(){
        session_start();
        $_SESSION['usuario'] =  "";
        $_SESSION['modo'] = "";
        session_destroy();
    }
}
?>