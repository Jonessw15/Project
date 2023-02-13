<?php
    $_SESSION = ($server = "localhost");
    $_SESSION = ($user = "root");
    $_SESSION = ($password = "");
    $_SESSION = ($bd = "crud");

   if ($conn = mysqli_connect($server, $user, $password, $bd)) {
    // echo "Conexão concluída!";
   } else {
    echo "Conexão não feita";
   }


?>