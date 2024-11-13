<?php
function calcularPrecioConDescuento($precio, $descuento) {
    return $precio - ($precio * $descuento / 100);
}

echo calcularPrecioConDescuento(100, 15);
?>
