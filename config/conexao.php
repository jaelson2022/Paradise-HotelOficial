<?php

use conexao as GlobalConexao;

   define('HOST','localhost');
   define('DATABASENAME','hospedagem');
   define('USER','root');
   define('SENHA','@#Deus2023');

   class conexao{
      protected $conexao;

      function __construct()
      {
         $this->connectdatabase();    
      }

      function connectdatabase()
      {
         try
         {
            $this->conexao = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, 'SENHA');
         }

         catch (PDOException $e)
         {
            echo "Erro!".$e->getMessage();
            die();
         }
      }
   }


?>