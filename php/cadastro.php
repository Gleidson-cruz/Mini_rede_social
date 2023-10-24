<?php
ini_set('memory_limit', '3000M');

$_nome = $_POST["nome"];
$_sobrenome = $_POST["sobrenome"];
$_email = $_POST["email"];
$_senha = $_POST["senha"];
$_confirmar_senha = $_POST["confirmar_senha"];

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
      
        $_conteudo = '<?php' . PHP_EOL;
        $_conteudo .= '$_premail = "' . $_POST["email"] . '";' . PHP_EOL;
        $_conteudo .= '$_prsenha = "' . $_POST["senha"] . '";' . PHP_EOL;
        $_conteudo .= '$_prnome = "' . $_POST["nome"] . '";' . PHP_EOL;
        $_conteudo .= '$_prsobrenome = "' . $_POST["sobrenome"] . '";' . PHP_EOL;
        $_conteudo .= '?>';

       file_put_contents("/home/runner/Miniredesocial/db/$_email.php", $_conteudo);

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