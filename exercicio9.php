<?php

function gerarFibonacci($termos) {
    $fibonacci = [0, 1];
    
    for ($i = 2; $i < $termos; $i++) {
        $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
    }
    
    return $fibonacci;
}

$termos = 10;
$sequencia = gerarFibonacci($termos);

echo "Os primeiros $termos números Fibonacci são:\n";
foreach ($sequencia as $indice => $numero) {
    echo ($indice + 1) . ": $numero\n";
}
?>