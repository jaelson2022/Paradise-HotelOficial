<?php

class Conexao {
   protected $connection;

   function __construct()
   {
      $this->connectDatabase();    
   }

   function connectDatabase()
   {
      $host = 'localhost';
      $database = 'hospedagem';
      $user = 'root';
      $senha = '@#Deus2023';

      try {
         $this->connection = new PDO('mysql:host='.$host.';dbname='.$database, $user, $senha);
      } catch (PDOException $e) {
         echo "Erro!".$e->getMessage();
         die();
      }
   }

   function getConnection() {
      return $this->connection;
   }
}

?>