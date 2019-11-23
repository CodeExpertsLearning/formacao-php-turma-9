<?php 
//Estrutura de Controle: Condicionais
$numeroUm = 0;
$numeroDois = 40;

$resultadoSoma = $numeroUm + $numeroDois;

if($resultadoSoma == 50) {
    echo 'Resultado correto...';
} 
else if($resultadoSoma == 40) {

    echo 'Resultado: ' . $resultadoSoma;
} 
else {
    echo 'Resultado não é 50';
}

switch($resultadoSoma) {
    case 50:
        echo 'Resultado correto...';
    break;

    case 40:
        echo 'Resultado: ' . $resultadoSoma;
    break;

    default:
        echo 'Resultado não é 50';
}