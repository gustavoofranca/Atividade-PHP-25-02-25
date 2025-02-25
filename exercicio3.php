<?php


function inverterTexto($texto) {
    $tamanho = strlen($texto);
    $invertido = '';
    
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertido .= $texto[$i];
    }
    
    return $invertido;
}

$texto = "Hello World!";
echo "Original: $texto\n";
echo "Invertido: " . inverterTexto($texto);
?>