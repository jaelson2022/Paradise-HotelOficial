<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clients</title>
</head>
<body>
    <h1>clients List</h1>
    <div class="content">
        <table class="table">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Cpf</td>
                    <td>Email</td>
                    <td>Telefone</td>
                    <td>Senha</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultData as $data): ?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['nome'] ?></td>
                        <td><?= $data['cpf'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['telefone'] ?></td>
                        <td><?= $data['senha'] ?></td>
                    </tr>
                <?php endforeach; ?>    
            </tbody>
        </table>
    </div>
</body>

</html>