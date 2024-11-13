<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $frutas=["pera","manzana","limón","plátano","kiwi","fresa","sandía","melón","caqui","mandarina"];
    ?>

    <table border="1">
        
    <?php
        echo "<tr><th>FRUTAS</th></tr>";
        foreach($frutas as $v){
            echo "<tr> <td>$v </td></tr>";
        }
    ?>
    </table>
    
</body>
</html>