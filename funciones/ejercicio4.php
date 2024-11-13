<?php
function calcularRectangulo($largo, $ancho) {
    $area = $largo * $ancho;
    $perimetro = 2 * ($largo + $ancho);
    return ["Área" => $area, "Perímetro" => $perimetro];
}

print_r(calcularRectangulo(5, 10));
?>
