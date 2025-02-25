<?php

function isPalindrome($word) {
    $word = strtolower(str_replace(' ', '', $word));
    return $word === strrev($word);
}

$words = ["arara", "radar", "php", "ovo"];
foreach ($words as $word) {
    echo "$word " . (isPalindrome($word) ? "é" : "não é") . " um palíndromo\n";
}
?>