<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="../views/Login/teladecadastro.css">
   
</head>
<body>
    <div class="box">
        <form action="/views/teladecadastro.php" method="POST">
            <fieldset>
                <legend><b>Fórmulario de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput"><span>Nome Completo</span> </label>
                    <br>
                </div>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput"><span>CPF</span></label>
                    <br>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput"><span>E-mail</span></label>
                    <br>
                </div>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput"><span>Telefone</span></label>
                    <br>
                </div>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput"><span>Senha</span></label>
                    <p><span>Após preenchimento do Formulário de Cadastro,
                        basta clicar em ENVIAR, que seus dados aparecerão na tela de Pagamento. Clique em IR PARA PAGAMENTO,
                        para finalizar sua Reserva</span></p>
                </div>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>