<?php
require 'UsuarioOld.class.php';

$usuario = new Usuario();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; // sem hash - **NÃO RECOMENDADO**


    if($usuario->cadastrar($nome, $email, $senha)){
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar.";
    }
}
?>
 