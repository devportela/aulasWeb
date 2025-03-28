<?php
require 'UsuarioOld.class.php';

$usuario = new Usuario();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Senha segura

    if($usuario->cadastrar($nome, $email, $senha)){
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar.";
    }
}
?>
