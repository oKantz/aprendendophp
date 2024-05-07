<?php
    echo "<h1>Olá Mundo</h1>";
    echo "<h1>Hello World</h1>";


    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];
    $aniversario = $_POST ['data'];
    $sexo = $_POST ['sexo'];

    echo '<p> SEU NOME É: </p>';
    echo $nome;
    echo '<p> SEU EMAIL É: </p>';
    echo $email;
    echo '<p> SUA SENHA É: </p>';
    echo $senha;
    echo '<p> SEU ANIVERSÁRIO É: </p>';
    echo $aniversario;
    echo '<p> SEU GÊNERO É: </p>';
    echo $sexo;



?>
