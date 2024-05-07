<?php

$nome ="Ricardo";
$dia = 11;
echo $nome;
 echo $dia;
 $diaext = "7";

 echo $diaext;
 if($dia == $diaext){
     echo "igual";
 }

 echo " testando se é igual a 7<br>";
    if($dia != 7)
    {
        echo "diferente1";
    }
    else {
        echo "igual a 7";
    }
    
    echo "<br> Operador ternario<br>";
    $resposta = $dia < 10 ? "Menor que 10" : "Maior ou igual";
    echo $resposta;













?>