<?php
    include_once ("src/model/backup.php");
    class BackupController {
        function get($data = null, $token = null){
            echo 'getBackups';
        }

        function create($data = null, $token = null){
            $Backup = new Backup();
            $Backup->local = $data['id'];
            $Backup->name_database = $data['name_database'];
            $Backup->data = $data['data'];
            $Backup->totais = $data['total'];
            $Backup->realizado = $data['realizado'];
            $Backup->erro = $data['erro'];

            $Backup->create();
        }
    }