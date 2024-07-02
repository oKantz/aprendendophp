<?php
function soma(){
    return 1+5;
}

$resultado = soma();

if ($resultado === 3){
    echo "O resultado foi 3 (Correto)";
} else {
    echo "O Resultado está incorreto.";
}

?>