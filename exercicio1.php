<?php


function substituirVogais($string) {
    return preg_replace('/[aeiouAEIOU]/', '*', $string);
}


$texto = "Hello World!";
echo "Original: $texto\n";
echo "Modificado: " . substituirVogais($texto);
?>