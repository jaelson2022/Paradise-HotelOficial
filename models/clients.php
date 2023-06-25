<?php

    require_once('./config/conexao.php');

    class ClientModel extends Conexao{
        private $table;

        function __construct()
        {
            parent::__construct();
            $this->table = 'hospede';
        }

        function getAll()
        {
            $sqlSelect = $this->conexao->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery; 
        }
        
    }
?>