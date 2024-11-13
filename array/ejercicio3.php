<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        //creo el array
        $animales=["leon","tigre","elefante","jirafa","mono"];
        //lo muestro con print_r
        print_r($animales);;
        //modifico el tercer elemento;
        $animales[2]="juanjo";
        //lo muestro con var_dump()
        echo"<br> MODIFICO EL TERCER ELEMENTO <br>";
        var_dump($animales);


    ?>
    
</body>
</html>