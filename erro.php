<?php
    $cliente=$_GET["Cliente"];
    $praca=$_GET["Praca"];
    $erro=$_GET["Erro"];
    echo '<b>Local:</b> '.$praca.'<br>';
    echo '</br>';
    $arquivo = file("files\\$cliente\\$praca\\$erro");
    foreach($arquivo as $frase){
        echo $frase;
    }
?>