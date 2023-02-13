<?php

include "crud/action/conexao.php";


if(isset($_POST['btn-entrar'])):
    $login = mysqli_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    $sql = "SELECT email, senha FROM redacao WHERE email = '$login' AND senha = '$senha'";
    
    if ($result = mysqli_query($conn, $sql)) {
        $num_registros = mysqli_num_rows($result);

            if ($num_registros == 1) {
                $linha = mysqli_fetch_assoc($result);

                if (($login == $linha['email']) AND ($senha == $linha['senha'])) {
                    session_start();
                    $_SESSION['login'] = "Jones";
                    header("location: crud");
                } else {
                    echo "Login inválido";
                }       
            } else {
                echo "Login ou senha não encontrados ou inválidos";
              }
        } else {
            echo "Nenhum resultado no banco de dados";
        } else :
            echo '';
        endif;

 ?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crud/css/styleLogin.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>    
    <title>Login</title>
</head>
<body>

    <div class="container">
        <div class="box">
            <div class="esconder">
                <div class="h">
                    <h1>Você é:</h1>
                </div>
                <div class="choose">
                    <form action="">
                        <img src="crud/img/Estudante.png" id="estuda">
                        <input type="submit" class="btn-input-log" value="" id="login-aluno">
                        <img src="crud/img/Professor.png" id="prof">
                        <input type="submit" class="btn-input-cad" value="" id="login-professor">
                    </form>
                </div>
            </div>

    <!-- Login e cadastro -->

    <div class="box-form">
        <div class="box-login">
            <div class="form">
                <h2 class="h">Estudante</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <label for="text">E-mail</label>
                    <p><input type="email" class="estiloInput" placeholder="Digite seu e-mail" name="email" required></p>
                    <br>
                    <label for="text">Senha</label>
                    <p><input type="password" class="estiloInput" id="pwd" placeholder="Digite sua senha" name="senha" required></p>
                    <span>
                        <i class="fa fa-eye" aria-hidden="true" id="eye"></i>
                        <i class="fa fa-eye-slash" aria-hidden="true" id="eyeClose"></i>
                    </span>
                    <input type="submit" name="btn-entrar" value="Enviar" class="enviar">
                </form>
            </div>
        </div>
    

    
    <div class="box-cadastro">
    <h2 class="h"> Professor </h2>
                <form action="crud/cadastro_script.php" method="POST">
                    <label for="text">E-mail</label>
                    <input type="email" class="estiloInput" name="email" class="input" placeholder="Digite seu e-mail" required>
                    <br>
                    <br>
                    <label for="text">Senha</label>
                    <input type="password" class="estiloInput" name="senha" class="input" placeholder="Digite sua senha" required>
                    <br>
                    
                    <input type="submit" name="btn-entrar" value="Enviar" class="enviar">
                    <br>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="crud/js/scriptLogin.js"></script>
</body>
</html>