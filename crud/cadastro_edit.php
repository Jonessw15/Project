<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Alteração de Cadastro</title>
</head>
<body style="background: gray">

    <?php
        include "action/conexao.php";

        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM redacao WHERE id = $id";

        $dados = mysqli_query($conn, $sql);

        $linha = mysqli_fetch_assoc($dados);
    ?>

    <section>
        <div class="container">
            <div class="box">
            <div id="tit">
            <h1>Alteração de Cadastro</h1>
            </div>

                <form action="edit_script.php" method="POST">
                <div class="alt">
                    <input type="text" id="nome" name="nome" class="input" required value="<?php echo $linha['nome']; ?>">
                    <label for="nome" id="name">Nome</label>
                </div>
                <div class="alt">
                    <input type="email" id="email" name="email" class="input" required value="<?php echo $linha['email']; ?>">
                    <label for="email" id="e-mail">Email</label>
                </div>
                <div class="alt">
                    <input type="password" id="senha" name="senha" class="input" required value="<?php echo $linha['senha']; ?>"> 
                    <label for="password" id="pass">Senha</label>
                </div>
                <div>
                    <input type="submit" class="Sa" value="Salvar Alterações">
                    <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                </div>
                </form>
                    <a href="index.php"><input type="button" value="Voltar" class="voltar"></a>
            </div>
        </div>
    </section>
    <footer>
        <div>&copy;JonesTech</div>
    </footer>
</body>
</html>