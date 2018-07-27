<?php

    for ($i=0; $i < 5; $i++) { 
        echo $i;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla</title>
</head>
<body>
    <table border=1px ;>
    <?php  for($i=25;$i<41;$i+=5){
        $producto;
        $precio=$i;
        $descuento=$precio/2;
        $total = $precio - ($precio*$descuento/100);   
        $total=round($total,2);
        switch ($i) {
            case 25:
                $producto="Caramelo";
                break;
            case 30:
                $producto="Chocolate";
                break;
            case 35:
                $producto="Gaseosa";
                break;
            case 40:
                $producto="Cerveza";
                break;
        }
        
        ?>
    <tr>
        <td><?php echo $producto ?></td>
        <td><?php echo $precio ?></td>
        <td><?php echo $descuento ?></td>
        <td><?php echo $total ?></td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>