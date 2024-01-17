<head>
    <link href="/public/css/global.css" rel="stylesheet">
    <link href="/public/view/login/style.css" rel="stylesheet">
    <script src="/public/view/login/script.js"></script>
</head>
<div class="grid">
    <div class="grid-item">
        <div id="gestor_edu">
            <img id="logo" src='/public/img/hubisg.png'>
            <div id="nao_tem_conta1">
                <label class="cinza open_sans" id="nao_conta">Ainda não tem uma conta?</label>
                </br></br>
                <a class="azul open_sans" id="contato" href="https://hubis.com.br" target="_blank">Entre em contato!</a>
            </div>
        </div>
    </div>
    <div class="grid-item">
        <div id="faca_login">
            <form id="login_usuario">
                </br>
                <label class="title"><b>Faça seu Login</b></label>
                </br></br></br></br>
                <div class="error_login">
                    <em class="fa fa-ban" aria-hidden="true"></em>
                    <label class="message_alert" id="messageAlert"></label>
                </div>
                <input class='input' placeholder="Login" id="login" name="login" type="login" required>
                </br>
                <input class='input' placeholder="Senha" id="senha" name="senha" type="password" required>
                </br></br></br>
                <input class='button fundo-azul open_sans' type="submit" value="Entrar">
                </br></br>
                <!-- <a class="azul">Esqueci minha senha</a> -->
            </form>
        </div>
    </div>
    <div id="nao_tem_conta2">
        <label class="cinza open_sans" id="nao_conta">Ainda não tem uma conta?</label>
        </br></br>
        <a class="azul open_sans" id="contato" href="https://gestoredu.com" target="_blank">Entre em contato!</a>
    </div>
</div>
