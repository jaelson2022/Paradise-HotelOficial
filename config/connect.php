<?php



   define('HOST','localhost');
   define('DATABASENAME','hospedagem');
   define('USER','root');
   define('SENHA','@#Deus2023');

   class connect{
      protected $connection;

      function __construct()
      {
         $this->connectdatabase();    
      }

      function connectdatabase()
      {
         try
         {
            $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, 'SENHA');
         }

         catch (PDOException $e)
         {
            echo "Erro!".$e->getMessage();
            die();
         }
      }
   }


?>