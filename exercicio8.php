<?php

function removerEspacos($texto) {
    return str_replace(' ', '', $texto);
}

$texto = "  Hello   World  com espacos  ";
echo "Original: '$texto'\n";
echo "Sem espaços: '" . removerEspacos($texto) . "'";
?>