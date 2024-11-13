<?php
$colores = ["Rojo", "Azul", "Verde", "Amarillo", "Negro"];
unset($colores[1]); // Borra el segundo color
$colores = array_values($colores); // Reindexa el array
print_r($colores);
?>
