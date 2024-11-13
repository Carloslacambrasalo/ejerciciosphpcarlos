<?php
function validarContrasena($contrasena) {
    if (strlen($contrasena) <= 8) return false;
    if (!preg_match('/[A-Z]/', $contrasena)) return false;
    if (!preg_match('/[a-z]/', $contrasena)) return false;
    if (!preg_match('/[^0-9a-zA-Z]/', $contrasena)) return false;
    return true;
}

var_dump(validarContrasena("Contr@123")); // true
var_dump(validarContrasena("password"));  // false
?>
