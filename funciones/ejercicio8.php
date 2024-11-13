<?php
function numeroMasFrecuente(...$numeros) {
    $frecuencias = array_count_values($numeros);
    arsort($frecuencias);
    return array_key_first($frecuencias);
}

echo numeroMasFrecuente(1, 2, 2, 3, 3, 3, 4, 4, 4, 4);
?>
