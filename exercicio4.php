<?php


function verificarNumero($numero) {
    if ($numero > 0) {
        return "positivo";
    } elseif ($numero < 0) {
        return "negativo";
    } else {
        return "zero";
    }
}


$numeros = [5, -3, 0];
foreach ($numeros as $numero) {
    echo "$numero é " . verificarNumero($numero) . "\n";
}
?>