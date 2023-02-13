<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
        include "action/conexao.php";

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "UPDATE `redacao` SET `nome`= '$nome', `email` = '$email', `senha` = '$senha' WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            echo `$nome alterado com sucesso!`;
        } else 
            echo `$nome não alterado!`;
    ?> <a href="index.php"><input type="button" value="Voltar"></a>
</body>
</html>