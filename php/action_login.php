<?php
var_dump($_POST);
var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['usuario']) && isset($_POST['senha_login']) && !empty($_POST['usuario']) && !empty($_POST['senha_login'])) {
        $_email = $_POST["usuario"];
        $_senha = $_POST["senha_login"];

        $_sqlfile = "/home/runner/Miniredesocial/db/$_email.sql";
        if (file_exists($_sqlfile)) {
            $_autlogin = file_get_contents($_sqlfile);

            if (strpos($_autlogin, "email: $_email, senha: $_senha") !== false) {
                header("Location: /html/profile.html");
                exit();
            } else {
                echo "Credenciais de login inválidas. Tente novamente.";
            }
        } else {
            echo "Usuário não encontrado. Verifique suas credenciais.";
        }
    } else {
        // Lida com o caso em que os campos não foram preenchidos
        echo "Por favor, preencha ambos os campos de email e senha.";
    }
} else {
    // Lida com o caso em que o método da solicitação não é POST
    echo "Método de solicitação inválido.";
}
?>
