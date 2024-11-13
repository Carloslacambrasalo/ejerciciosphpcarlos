<?php
function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura ** 2);
    if ($imc < 18.5) {
        $categoria = "Bajo peso";
    } elseif ($imc < 24.9) {
        $categoria = "Peso normal";
    } elseif ($imc < 29.9) {
        $categoria = "Sobrepeso";
    } else {
        $categoria = "Obesidad";
    }
    return ["IMC" => $imc, "Categoría" => $categoria];
}

print_r(calcularIMC(70, 1.75));
?>
