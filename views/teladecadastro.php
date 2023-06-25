
<?php

class conexao{

    public function conectar(){
        if(isset($_POST['submit']))
{
   include_once('./config/conexao.php');

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $CPF = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
    $password = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "INSERT INTO hospede (nome, cpf, email, telefone, senha) VALUES ('$nome', '$CPF', '$email', '$telefone', '$password')";
    $result = mysqli_query($conexao, $query);

    if($result) {
        echo "Registro inserido com sucesso.";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conexao);
    }
}

    }
}

$conecta = new conexao();
$conecta->conectar();

?>