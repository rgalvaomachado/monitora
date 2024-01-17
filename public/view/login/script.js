$(document).ready(function() {
    $('#login_usuario').submit(function(e) {
        e.preventDefault();
        var login = $("#login").val();
        var senha = $("#senha").val();
        $.ajax({
            method: "POST",
            url: "/controller/Controller.php",
            data: {
                metodo: "login",
                login: login,
                senha: senha,
            },
            complete: function(response) {
                var response = JSON.parse(response.responseText);
                console.log(response);
                if(response.access){
                    if(response.modo == 'admin'){
                        window.location.assign("/admin/home")
                    }else{
                        window.location.assign("/")
                    }
                }else{
                    $('.error_login').show();
                    const alert = document.getElementById("messageAlert");
                    alert.innerHTML = response.message;
                    setTimeout(function(){
                        alert.innerHTML = "";
                        $('.error_login').hide();
                    }, 2000);
                }
            }
        });
    })
});