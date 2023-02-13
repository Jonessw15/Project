<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css"> <!-- LINK CSS -->
    <title>Pesquisa</title>
    <style>
      
    </style>
  
</head>
<body>
<?php
    $pesquisa = $_POST['busca'] ??'';

include "action/conexao.php"; 
  $sql = "SELECT * FROM redacao WHERE nome LIKE '%$pesquisa%'";

  $dados = mysqli_query($conn, $sql);

  
?>
 

  <div>
    <form action="pesquisa.php" method="POST">
      <input class="bsc" type="search" placeholder="Pesquisa" name="busca" autofocus> 
      <button class="psq" type="submit">Pesquisa</button>
    </form>
  </div>
  
 

<div class="container">
<div class="box">
<table>
        <thead>
            <tr>
                <th class="col">Nome</th>
                <th class="col">E-mail</th>
                <th class="col">Senha</th>
                <th class="col">Funções</th>
            </tr>
        </thead>
        <tbody>
             <?php
                while($linha = mysqli_fetch_assoc($dados)){
                  $id = $linha['id'];
                  $nome = $linha['nome']; 
                  $email = $linha['email']; 
                  $senha = $linha['senha'];

                  echo "<tr>
                          <th scope='row'>$nome</th>
                          <td>$email</td>
                          <td>$senha</td>
                          <td width='150px'>
                            <a href='cadastro_edit.php?id=$id' class='btn-edit'>Editar</a>
                            <button class='btn-del' onclick='pegarDados($id, `$nome`)'>Excluir</button>
                          </td>";
                }
			?>
        </tbody>
    </table>
</div>
</div>
<a href="index.php"><button>Voltar</button></a>

    <div class="modal-container">
      <form action="excluir_script.php" method="post">
      <div class="modal">
        <h2>Confirmação de exclusão</h2>
        <hr />
        <p>Deseja realmente apagar <b id="nome_pessoa">Nome da pessoa</b>?</p>
        <hr />
        <div class="btns">
          <input type="hidden" name="id" id="id" value="">
          <input type="hidden" name="nome" id="nome_pessoa1" value="">
          <input type="submit" class="btnSim" onclick="closeModal1()" value="Sim">
          </form>
          <button class="btnNao" onclick="closeModal()">Não</button>
        </div>
      </div>
    </div>
 
  <script src="js/script.js"></script>

</body>
</html>
</body>
</html>