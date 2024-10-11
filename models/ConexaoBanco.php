<?php

require_once './config/init.php';

class ConexaoBanco {
    protected $conBD;
    
        function __construct(){
            if(isset($this->conDB)== false) {
                $this-> fazerConexaoBanco();
            }
        }

    function fazerConexaoBanco() {
        try {
            $this -> conBD = new PDO("mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME, DB_USER, DB_PASS);

        } catch(PDOException $e) {
            echo "Erro ao conectar ao Banco de Dados:" . $e->getMessage();
        }
    }
}
