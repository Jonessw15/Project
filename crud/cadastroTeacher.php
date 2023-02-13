<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<body> 
        <section>
                <h2> Cadastro </h2>
                <form action="../cadastro_scriptTeacher.php" method="POST">
                    

                    <input type="text" class="text" name="nome" required>
                    <span>nome</span>
                    <br>

                    <br>
                    <input type="email" class="text" name="email" class="input" required>
                    <span>Email</span>
                    <br>
                    
                    <br>
                    <input type="password" class="text" name="senha" class="input" required>
                    <span>password</span>
                    <br>
                    
                    <button type="submit">Cadastrar</button>
                    <hr>

                </form>
                <a href="index.php"><input type="button" value="Voltar" class="voltar"></a>
                <footer>
                    <div>&copy;JonesTech</div>
                </footer>
                </div>
        </section>
</body>
</html>