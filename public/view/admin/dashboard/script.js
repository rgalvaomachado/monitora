function monitoraInternet(){
    $.ajax({
        method: "POST",
        url: "/src/controller/controller.php",
        data: {
            metodo: "monitoraInternet"
        },
        complete: function(response) {
            // var response = JSON.parse(response.responseText);
            // if(response.access){
            //     window.location.assign("/login")
            // }else{
            //     const alert = document.getElementById("messageAlert");
            //     alert.innerHTML = response.message;
            //     setTimeout(function(){
            //         alert.innerHTML = "";
            //     }, 2000);
            // }
        }
    });
}