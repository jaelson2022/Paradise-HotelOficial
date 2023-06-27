<?php
require_once('../config/connect.php');

$conexao = new Conexao();
$connection = $conexao->getConnection();

if (isset($_POST['submit'])) {
   $cpf = $_POST['cpf'];
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $senha = $_POST['senha'];

   $query = "UPDATE hospede SET nome = :nome, email = :email, telefone = :telefone, senha = :senha WHERE cpf = :cpf";
   $stmt = $connection->prepare($query);
   $stmt->bindParam(':nome', $nome);
   $stmt->bindParam(':email', $email);
   $stmt->bindParam(':telefone', $telefone);
   $stmt->bindParam(':senha', $senha);
   $stmt->bindParam(':cpf', $cpf);

   if ($stmt->execute()) {
      echo "Registro atualizado com sucesso.";
   } else {
      echo "Erro ao atualizar registro: " . $stmt->errorInfo()[2];
   }
}

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
?>

<!DOCTYPE html>
<html>
<head>
   <title>Editar Cadastro</title>
</head>
<body>
   <h2>Editar Cadastro</h2>
   <form method="POST" action="">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" value="<?php echo $registro['nome']; ?>"><br>

      <label for="cpf">CPF:</label>
      <input type="text" name="cpf" id="cpf" value="<?php echo $registro['cpf']; ?>" readonly><br>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="<?php echo $registro['email']; ?>"><br>

      <label for="telefone">Telefone:</label>
      <input type="text" name="telefone" id="telefone" value="<?php echo $registro['telefone']; ?>"><br>

      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" value="<?php echo $registro['senha']; ?>"><br>

      <input type="submit" name="submit" value="Atualizar">
   </form>
</body>
</html>

<?php
   } else {
      echo "Registro não encontrado.";
   }
}
?>
