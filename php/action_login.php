<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if (isset($_POST["usuario"]) && isset($_POST["senha_login"])) {
     $_email = $_POST["usuario"];
     $_senha = $_POST["senha_login"];

    include ("/home/runner/Miniredesocial/db/$_email.php");

    if ($_email === $_premail && $_senha === $_prsenha) {
      header ("location: /html/profile.html");
    } else {
      header ("refresh:3;url=/index.html");
      echo '<!DOCTYPE html>
<html>
<head>
    <title>Erro ao realizar o login</title>
</head>
<body>
    <h1 style="text-align: center; color: #FF0000;">Erro ao realizar o cadastro</h1>
    <p style="text-align: center;">Usuario ou senha não conferem.<br>Você será redirecionado para tentar novamente em 3 segundos.</p>
</body>
</html>';
    }
      
  }
  
   
  
   

 
    
}
?>
