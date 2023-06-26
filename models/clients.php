<?php

    require_once('./config/connect.php');

    class ClientModel extends connect{
        private $table;

        function __construct()
        {
            parent::__construct();
            $this->table = 'hospede';
        }

        function getAll()
        {
            $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery; 
        }
        
    }
?>