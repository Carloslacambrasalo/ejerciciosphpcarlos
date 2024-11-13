<?php
function promedioYMediana($numeros) {
    $promedio = array_sum($numeros) / count($numeros);
    sort($numeros);
    $n = count($numeros);
    $mediana = ($n % 2 == 0) ? ($numeros[$n / 2 - 1] + $numeros[$n / 2]) / 2 : $numeros[floor($n / 2)];
    return ["Promedio" => $promedio, "Mediana" => $mediana];
}

print_r(promedioYMediana([1, 3, 5, 7, 9]));
?>
