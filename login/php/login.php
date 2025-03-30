<?php
require 'Usuario.class.php';


$usuario = new Usuario();

if(!$usuario){ 
    echo "<h1>Banco indisponível. Tente mais tarde</h1>";
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de login</title>
</head>
<style>
        body {
            background-color: #007bff; /* Fundo azul */
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            height: 100vh; /* Altura total da janela */
            margin: 0; /* Remove a margem padrão */
            font-family: Arial, sans-serif; /* Fonte para o texto */
        }

        /* Estilo para o formulário */
        form {
            background-color: #fff; /* Fundo branco para o formulário */
            padding: 30px; /* Espaçamento interno */
            border-radius: 8px; /* Bordas arredondadas */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
            width: 300px; /* Largura fixa do formulário */
            display: flex;
            flex-direction: column;
            gap: 15px; /* Espaçamento entre os campos */
        }

        /* Estilo para os campos de entrada */
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc; /* Borda leve */
            border-radius: 4px; /* Bordas arredondadas */
            font-size: 16px;
        }

        /* Estilo para o botão de submit */
        input[type="submit"] {
            padding: 10px;
            background-color: #007bff; /* Cor azul */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Alteração no botão ao passar o mouse */
        input[type="submit"]:hover {
            background-color: #0056b3; /* Azul mais escuro ao passar o mouse */
        }

        /* Estilo para o texto de placeholder */
        input::placeholder {
            color: #888;
        }

</style>
<body>
    <form action = "teste.php" method = "post">
        <input type="text" name="nome" placeholder="Digite um Nome">
        <input type="text" name="email" placeholder="Digite um Email">
        <input type="text" name="senha" placeholder="Digite um Senha">

        <input type="submit" value = "Cadastrar">
    </form> 
</body>
</html>