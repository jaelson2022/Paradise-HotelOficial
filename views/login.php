<?php

require_once('../config/connect.php');

$conexao = new Conexao();
$connection = $conexao->getConnection();

if (isset($_POST['submit'])) {
   $cpf = $_POST['cpf'];
   $senha = $_POST['senha'];

   $query = "SELECT * FROM hospede WHERE cpf = :cpf AND senha = :senha";
   $stmt = $connection->prepare($query);

   $stmt->bindParam(':cpf', $cpf);
   $stmt->bindParam(':senha', $senha);

   if ($stmt->execute()) {
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($result) {
         // Login bem-sucedido
         echo "Login realizado com sucesso. Bem-vindo, " . $result['nome'] . "!";
      } else {
         // Login inválido
         echo "Credenciais inválidas. Por favor, verifique seu CPF e senha.";
      }
   } else {
      echo "Erro ao executar a consulta: " . $stmt->errorInfo()[2];
   }
}

?>
