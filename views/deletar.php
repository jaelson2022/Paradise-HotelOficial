<?php
require_once('../config/connect.php');

$conexao = new Conexao();
$connection = $conexao->getConnection();

// Verifica se foi passado o parâmetro "cpf" na URL
if (isset($_GET['cpf'])) {
   $cpf = $_GET['cpf'];

   // Consulta o registro com o CPF especificado
   $query = "SELECT * FROM hospede WHERE cpf = :cpf";
   $stmt = $connection->prepare($query);
   $stmt->bindParam(':cpf', $cpf);
   $stmt->execute();
   $registro = $stmt->fetch(PDO::FETCH_ASSOC);

   // Verifica se o registro foi encontrado
   if ($registro) {
      // Deleta o registro com o CPF especificado
      $query = "DELETE FROM hospede WHERE cpf = :cpf";
      $stmt = $connection->prepare($query);
      $stmt->bindParam(':cpf', $cpf);
      $stmt->execute();

      echo "Registro deletado com sucesso.";
   } else {
      echo "Registro não encontrado.";
   }
}
?>
