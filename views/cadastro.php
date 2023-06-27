
<?php

require_once('../config/connect.php');

$conexao = new Conexao();
$connection = $conexao->getConnection();

if (isset($_POST['submit'])) {
   $nome = $_POST['nome'];
   $cpf = $_POST['cpf'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $senha = $_POST['senha'];

   $query = "INSERT INTO hospede (nome, cpf, email, telefone, senha) VALUES (:nome, :cpf, :email, :telefone, :senha)";
   $stmt = $connection->prepare($query);

   $stmt->bindParam(':nome', $nome);
   $stmt->bindParam(':cpf', $cpf);
   $stmt->bindParam(':email', $email);
   $stmt->bindParam(':telefone', $telefone);
   $stmt->bindParam(':senha', $senha);

   if ($stmt->execute()) {
      echo "Registro inserido com sucesso.";
   } else {
      echo "Erro ao inserir registro: " . $stmt->errorInfo()[2];
   }
}

?>