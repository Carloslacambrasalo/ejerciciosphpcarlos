<?php
function convertirTemperatura($temperatura, $escala) {
    if ($escala === "C") {
        return $temperatura * 9/5 + 32; // Celsius a Fahrenheit
    } elseif ($escala === "F") {
        return ($temperatura - 32) * 5/9; // Fahrenheit a Celsius
    } else {
        return "Escala no válida";
    }
}

echo convertirTemperatura(100, "C") . "\n"; // Celsius a Fahrenheit
echo convertirTemperatura(212, "F") . "\n"; // Fahrenheit a Celsius
?>
