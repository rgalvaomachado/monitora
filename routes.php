<?php
    $routesAPI = [
        // [METODO, PATH, CONTROLLER, FUNCTION],
        ['GET','/backup','BackupController','get'],
        ['POST','/backup/*','BackupController','create'],
    ];

    $routesView = [
        // [PATH, VIEW],
        ['login','public/view/login/index.php'],

        ['admin/dashboard','public/view/admin/dashboard/index.php'],
        ['admin/local','public/view/admin/local/index.php'],
        ['admin/usuario','public/view/admin/usuario/index.php'],
        
        ['client','public/view/client/index.php'],
    ];
?>