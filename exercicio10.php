<?php

function isPangram($text) {
    $text = strtolower($text);
    $text = preg_replace('/[^a-z]/', '', $text);
    $letters = array_unique(str_split($text));
    
    return count($letters) === 26;
}

// Exemplos de uso
$texts = [
    "Um pequeno jabuti xereta viu dez cegonhas felizes", 
    "Jane quer LP, fax, CD, giz, TV e bom whisky",        
    "O rápido cachorro marrom pula sobre o cão preguiçoso", 
    "Esta frase não é um pangrama"                         
];

foreach ($texts as $text) {
    echo "\nTexto: $text\n";
    echo "É um pangrama? " . (isPangram($text) ? "Sim" : "Não") . "\n";
}
?>