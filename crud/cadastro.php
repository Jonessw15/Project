<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<body>
<!--         <div class="container">
            <div class="box">
            <div id="tit">
 -->           
 
                <section>
    

                <h2> Cadastro </h2>
                <form action="../cadastro_script.php" method="POST">
                    

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
                    
                    <button type="submit "class="signin">Cadastrar</button>
                    <hr>

                </form>
                <a href="index.php"><input type="button" value="Voltar" class="voltar"></a>
                <footer>
                    <div>&copy;JonesTech</div>
                </footer>
                </div>

                    

                    



                                
                                
                
                
                
                <!-- <div class="alt">
                    <input type="text" id="nome" name="nome" class="input" required>
                    <label for="nome" id="name">Nome</label>
                </div>
                <div class="alt">
                    <input type="email" id="email" name="email" class="input" required>
                    <label for="email" id="e-mail">Email</label>
                </div>
                <div class="alt">
                    <input type="password" id="senha" name="senha" class="input" required>
                    <label for="password" id="pass">Senha</label>
                </div>
                <div>
                    <input type="submit" value="Enviar"  class="submit">
                </div> -->
        </section>
</body>
</html>