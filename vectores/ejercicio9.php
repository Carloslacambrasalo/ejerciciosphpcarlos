<?php
$autos = ["Toyota" => "Japón", "Ford" => "EE.UU.", "BMW" => "Alemania", "Renault" => "Francia"];
unset($autos["BMW"]); // Borra el par con la clave "BMW"
print_r($autos);
?>
