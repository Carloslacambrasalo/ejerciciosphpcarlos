<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
         $ciudades=[];
         array_push($ciudades, "Zaragoza", "Huesca","Teruel","Calatayud","Tarazona");//se añaden al final
    ?>

    <table border="1">
        
    <?php
        echo "<tr><th>CIUDADES</th></tr>";
        foreach($ciudades as $v){
            echo "<tr> <td>$v </td></tr>";
        }
    ?>
    </table>
    
</body>
</html>