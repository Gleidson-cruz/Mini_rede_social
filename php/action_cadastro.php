<?php

$_nome = $_POST['nome'];
$_sobrenome = $_POST['sobrenome'];
$_email = $_POST['email'];
$_senha = $_POST['senha'];
$_confirmar_senha = $_POST['confirmar_senha'];


if (empty($_nome) || empty($_sobrenome) || empty($_email) || empty($_senha) || empty($_confirmar_senha)) {
  $_arquivo = fopen("dados.txt", 'a');
  fwrite ($_arquivo, $_nome);
  fwrite ($_arquivo, $_sobrenome. "\n");
  fwrite ($_arquivo, $_email. "\n");
  fwrite ($_arquivo, $_senha. "\n");
  fclose ($_arquivo);
  header("Location: index.html");
  exit;
} else {
  echo "erro1";
}

?>