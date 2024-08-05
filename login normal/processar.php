<?php
    $conexao = mysqli_connect("localhost", "root", ""); // Aqui você insira o nome da host, o nome de usuário e depois a senha que é vazia.
    mysqli_select_db($conexao, "tutocrudphp"); // Seleciona o banco de dados chamado 'tutocrudphp'.
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title> <!-- O texto vai aparecer na aba do navegador. -->
</head>
<body>
    <?php
        $nome = $_POST["nome"]; // Você preenchera o nome.
        $user = $_POST["user"]; // Você preenchera o usuário.
        $pass = $_POST["pass"]; // Você preenchera a senha.
 
        $inserir = "INSERT INTO usuarios (id, nome, usuario, senha) VALUES (NULL, '$nome', '$user', '$pass');"; // Aqui adicionara o (NULL no id), (nome no $nome), (usuario no $user) e a (senha no $pass). 
 
        mysqli_query($conexao, $inserir) or die (mysqli_error($conexao)); // Primeiro vai executar a parte do $inserir e depois vai verificar se a consulta foi executada com sucesso ou se falhar aparecera uma mensagem de erro.
        echo"Você foi cadastrado com sucesso. Clique <a href='login.html'>aqui</a> para fazer log-in."; // Aqui aparecera a mensagem que foi cadastrado com sucesso.
    ?>
</body>
</html>