<?php
    /*
        Crea un programa con una variable booleana $lluvia y una variable $temperatura a las que darás valor en el código. 
        El programa debe dar los siguientes mensajes. 

    "La temperatura es xxxx y es una temperatura extrema. No se puede realizar actividad." si la temperatura no está entre -10 y 40. Encaso contrario.
    "La temperatura es xxxx y no llueve A la playa" si la temperatura es mayor que 20 y no llueve, 
    "La temperatura es xxx y no llueve A esquiar" si la temperatura esté entre  y -10 y 5 y no llueve. 
    "La temperatura es xxxx y no llueve. De paseo" si la temperatura está entre 5 y 20 y no llueve.
    "Hoy llueve y debes quedarte en casa" si llueve y la temperatura está entre -10 y 40.
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //genero las variables y les doy valores
        $lluvia=false;
        $temperatura=6;
        //imprimo valores
        echo"Temperatura = $temperatura <br>";
        echo "Hoy ". ($lluvia ? 'llueve ' : 'no llueve ') . "<br>"; //echo no imprime true o false
        //comparo
        if($temperatura<=-10 ||$temperatura>=40){
            echo "La temperatura es extrema, quedate en casa <br>";
        }elseif($lluvia){
            echo "Aunque la temperatura no es extrema, llueve, asi que quedate en casa <br>";
        }elseif($temperatura >-10 &&$temperatura <=5){
            echo("La temperatura es $temperatura y no llueve, A esquiar <br>");


        }elseif($temperatura>5&&$temperatura<=20){
            echo("La temperatura es $temperatura y no llueve, De excursión <br>");
        }elseif($temperatura>20&&$temperatura<40){
            echo("La temperatura es $temperatura y no llueve, A la playa <br>");
        }



    ?>


</body>
</html>