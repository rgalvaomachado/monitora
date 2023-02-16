$(document).ready(function() {
    $('#login').submit(function(e) {
        e.preventDefault();
        $.ajax({
            method: "POST",
            url: "controller/controller.php",
            data: {
                metodo: "login",
                email: $('#email').val(),
                senha: $('#senha').val()
            },
            complete: function(response) {
                var response = JSON.parse(response.responseText);
                if (response.acesso) {
                    window.location.href = "dashboard.php";
                } else {
                    $('#RepostaController').show();
                    $('#RepostaController').html(response.resposta);
                    $('#RepostaController').css('color','red');
                    setTimeout(function(){
                        $('#RepostaController').hide();
                        $('#RepostaController').html("");
                    }, 2000);
                }
            }
        });
    });
});

function logout(){
    $(function(){
        $.ajax({
            method: "POST",
            url: "controller/controller.php",
            data: {
                metodo: "logout",
            },
            complete: function(response) {
                var response = JSON.parse(response.responseText);
                if(response.acesso){
                    window.location.assign('login.php');
                }
            }
        });
    });
}