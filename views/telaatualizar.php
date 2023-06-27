<?php

require_once('../config/connect.php');

$conexao = new Conexao();
$connection = $conexao->getConnection();

// Consulta todos os registros da tabela "hospede"
$query = "SELECT * FROM hospede";
$stmt = $connection->prepare($query);
$stmt->execute();
$registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
   <title>Lista de Cadastros</title>
</head>
<body>
   <h2>Lista de Cadastros</h2>
   <table>
      <thead>
         <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ação</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($registros as $registro) { ?>
            <tr>
               <td><?php echo $registro['nome']; ?></td>
               <td><?php echo $registro['cpf']; ?></td>
               <td><?php echo $registro['email']; ?></td>
               <td><?php echo $registro['telefone']; ?></td>
               <td><a href="editar.php?cpf=<?php echo $registro['cpf']; ?>">Editar</a></td>
               <td><a href="deletar.php?cpf=<?php echo $registro['cpf']; ?>">DELETAR</a></td>
            </tr>
         <?php } ?>
      </tbody>
   </table>
</body>
</html>
