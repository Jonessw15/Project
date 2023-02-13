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

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO `redacao`(`nome`, `email`, `senha`) VALUES ('$nome','$email','$senha')";

        if ($conn->query($sql) === TRUE) {
            echo `$nome cadastrado com sucesso!`;
        } else 
            echo `$nome não cadastrado!`;
    ?> <a href="index.php"><input type="button" value="Voltar"></a>
</body>
</html>




