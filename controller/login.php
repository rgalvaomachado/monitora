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

    public function logout(){
        $_SESSION['modo'] = "";
        return json_encode([
            "access" => true,
            "message" => "Logout efetuado com sucesso",
        ]);
    }
}
?>