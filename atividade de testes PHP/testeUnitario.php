<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function datanascimento($datanascimento) {
    $anoatual = date('Y');
    return $anoatual - $datanascimento;
}

$idade = datanascimento(1990);
echo "<br>";
echo "Idade calculada: " . $idade . "\n";

if ($idade === 34) {
    echo "<br>";
    echo "Teste passou! A idade foi calculada corretamente.\n";
} else {
    echo "<br>";
    echo "Teste falhou! O cálculo da idade está incorreto.\n";

    
}



// No exemplo, a função calcularIdade recebe como parâmetro o ano de nascimento e faz o calculo com base no ano atual (Exemplo: Nasceu em 1980, ou seja, 2024-1980)
// Depois declaramos a data de nascimento de exemplo como 1990
// Depois fizemos um if para sabermos se a idade vai ser exatamente 34, caso sim estará correto e caso não estará incorreto.

?>
</body>
</html>