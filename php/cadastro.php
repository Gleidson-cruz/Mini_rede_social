<?php
ini_set('memory_limit', '3000M');
include("userdb.php");

if (empty($_nome) || empty($_sobrenome) || empty($_email) || empty($_senha) || empty($_confirmar_senha)) {
  
  header("refresh:3;url=/html/cadastro.html");
  
    echo '<!DOCTYPE html>
<html>
<head>
    <title>Erro ao realizar o cadastro</title>
</head>
<body>
    <h1 style="text-align: center; color: #FF0000;">Erro ao realizar o cadastro</h1>
    <p style="text-align: center;">Preencha todos os campos corretamente.<br>Você será redirecionado para tentar novamente em 3 segundos.</p>
</body>
</html>';
  
  } else {

    if ($_senha === $_confirmar_senha) {
      
    header("refresh:3;url=/index.html");
    
    echo '<!DOCTYPE html>
        <html>
        <head>
            <title>Cadastro realizado com sucesso</title>
        </head>
        <body>
            <h1 style="text-align: center; color: #0077b6;">Cadastro realizado com sucesso</h1>
            <p style="text-align: center;">Você será redirecionado para fazer login em 3 segundos.</p>
        </body>
        </html> ';
  } else { 
      
      header("refresh:3;url=/html/cadastro.html");
  
    echo '<!DOCTYPE html>
<html>
<head>
    <title>Erro ao realizar o cadastro</title>
</head>
<body>
    <h1 style="text-align: center; color: #FF0000;">Erro ao realizar o cadastro</h1>
    <p style="text-align: center;">As senhas inseridas não conferem.<br>Você será redirecionado para tentar novamente em 3 segundos.</p>
</body>
</html>';
      
  }
}
  

?>