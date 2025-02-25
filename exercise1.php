<?php


function substituirVogais($string) {
    return preg_replace('/[aeiouAEIOU]/', '*', $string);
}


$text = "Hello World!";
echo "Original: $text\n";
echo "Modificado: " . substituirVogais($text);
?>