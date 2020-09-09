<?php

$user = $_POST['usuario'];
$pass = md5($_POST['senha']);

$bd = mysqli_connect("localhost", "root", "", "dashbackup");
$sql = "SELECT senha FROM tb_usuario WHERE usuario='$user'";
$consulta = mysqli_query($bd, $sql) or die (mysqli_error()) ;
$dados = mysqli_fetch_array($consulta);
$senha = $dados["senha"];

if ($senha == $pass) {
    session_start();
    $_SESSION['entrar'] = "sim";
    header("Location:dashboard.php");
} else {
    echo '<center>Falha no logon, por favor tente novamente! <a href="index.php">Voltar</a></center>';
}
?>