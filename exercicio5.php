<?php


function contarEImprimirPalavras($frase) {
    $palavras = explode(' ', trim($frase));
    $contadorPalavras = count($palavras);
    
    echo "Número total de palavras: $contadorPalavras\n\nPalavras:\n";
    foreach ($palavras as $palavra) {
        echo "$palavra\n";
    }
}


$frase = "PHP é uma linguagem de programação incrível";
contarEImprimirPalavras($frase);
?>