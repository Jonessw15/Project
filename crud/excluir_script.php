<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de cadastro</title>
</head>
<body>
    <?php
        include "action/conexao.php";

        $id = $_POST['id'];
        $nome = $_POST['nome'];

        $sql = "DELETE from `redacao` WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            echo `$nome excluido com sucesso!`;
        } else 
            echo `$nome não excluido!`;
    ?> <a href="index.php"><input type="button" value="Voltar"></a>
</body>
</html>