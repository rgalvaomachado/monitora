<?php
    include_once('database.php');

    class Backup extends Database{
        public $id;
        public $name_database;
        public $local;
        public $data;
        public $totais;
        public $realizado;
        public $erro;


        function create(){
            $stmt = $this->bd->prepare('INSERT INTO backup (local, name_database, data, totais, realizado, erro) VALUES(:local, :name_database, :data, :totais, :realizado, :erro)');
            $stmt->execute([
                ':local' => $this->local,
                ':name_database' => $this->name_database,
                ':data' => $this->data,
                ':totais' => $this->totais,
                ':realizado' => $this->realizado,
                ':erro' => $this->erro
            ]);
        }

        function get(){
            $stmt =  $this->bd->prepare('SELECT id,nome,matriz,info FROM backup ORDER BY nome ASC');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function getAll($id){
            $stmt =  $this->bd->prepare('SELECT nome,matriz,info FROM backup WHERE id = :id ORDER BY nome ASC');
            $stmt->execute([
                ':id' => $id,
            ]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        function update($id){
            $stmt = $this->bd->prepare('UPDATE backup SET nome = :nome, matriz = :matriz, info = :info WHERE id = :id');
            $stmt->execute([
              ':id'   => $id,
              ':database' => $this->name_database,
              ':totais' => $this->totais,
              ':realizado' => md5($this->realizado)
            ]);
        }

        function delete(){
            $stmt = $this->bd->prepare('DELETE FROM backup where id = :id');
            $stmt->execute([
              ':id' => $this->id,
            ]);
        }
    }
?>