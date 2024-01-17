<?php
    include_once('../src/controller/monitoraInternet.php');
    require_once ('../vendor/autoload.php');

    echo 'Monitorando...';
    $Monitorar = new MonitoraInternet();
    $Monitorar->monitorar();
    echo 'Monitoramento Concluido';
?>