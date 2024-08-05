<!DOCTYPE html>
<?php
    $conexao = mysqli_connect ("localhost", "root", ""); // Aqui você insira o nome da host, o nome de usuário e depois a senha que é vazia.
    mysqli_select_db ($conexao, "tutocrudphp"); // Seleciona o banco de dados chamado 'tutocrudphp'.
    session_start(); // Inicia a sessão para que as variáveis de sessão possam ser acessadas.

    if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) { // Verifica se as variáveis de sessão "usuario" e "senha" não estão definidas.
        header ("Location: login.html"); // Se as variáveis de sessão "usuario" ou "senha" não estiverem definidas, este código envia um cabeçalho para redirecionar o navegador para a página "login.html".
        exit; // Encerrar imediatamente a execução.
    }
?>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Index</title> <!-- O texto vai aparecer na aba do navegador. -->
    </head>
    <body>
        <h3> Logado. <a href="logout.php">Logout</a></h3> <!-- Quando o usuário logar na conta irá aparecer a mensagem 'Logado' e em seguida aparecerá um link chamado 'Logout' caso ele queria encerrar a sessão. -->
    </body> 
</html>