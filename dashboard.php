<html lang="pt-br">
    <?php
    session_start();
    if ($_SESSION['entrar'] != "sim") {
        header('location:index.php');
    }
    ?>
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" href="img/Icone.ico" type="image/x-icon" />
        <title>CNS Backup - Dash</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <center>
        <div class="row cabecalho" style="width:100%" >
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                <img style="height:100%" src="img\Logo_CNS.png" align="left">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h1><center>DashBackup</center></h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                <form action="sair.php" style="float:right;">
                    <input style="width:70px; height:25px;" type="submit" value="Sair">
                </form>
            </div>
        </div>
        <?php
        include 'importa_pracas.php';

        //Tabela Itau Cinemas
        include 'tabelas/tabela_itau.php';

        // Tabela Moviecom_Bia
        include 'tabelas/tabela_moviecom_bia.php';
        
        ?>
    </center>
</body>
</html>