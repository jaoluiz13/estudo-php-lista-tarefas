<?php

class Conexao {

    private $host = 'localhost';
    private $dbname ='lista_tarefas';
    private $port = '3307';
    private $user = 'root';
    private $pass = '';
    
    public function conectar(){
        try{

            $conexao = new PDO (
                "mysql:host=$this->host;port=$this->port;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );
            return $conexao;

        }catch(PDOException $e){
            echo '<p>'. $e->getMessage(). '</p>';
        }

    }
}

?>