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
        $deportes=["futbol","tenis de mesa","balonmano","baloncesto","judo","patinaje","frontón"];
        //lo muestro desordenado
    ?>

    <table border="1">
        
    <?php
        //imprimir el array en una tabla
        //Se pueden definir estilos en una hoja css
        echo "<tr><th>Deportes</th></tr>";
        foreach($deportes as $v){
            echo "<tr> <td>$v </td></tr>";
        }
    ?>
    </table>

    <table border="1">
        
        <?php
            //ordeno el array y lo imprimo
            sort($deportes);
            echo "<tr><th>Deportes ordenados alfabeticamente </th></tr>";
            foreach($deportes as $v){
                echo "<tr> <td>$v </td></tr>";
            }
        ?>
        </table>



   
</body>
</html>