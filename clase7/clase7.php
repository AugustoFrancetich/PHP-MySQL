<?php

//define('CONSTANTE',50); //definicion de constante

//echo CONSTANTE."<br><br>";
define('PI',3.14);
$respuesta;

if(isset($_POST['ValRadio'])){
    $area;
    $radio=$_POST['ValRadio']; 
    $area=PI * pow($radio,2);
    $respuesta='el area es: '.$area;
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">radio del circulo
    
    <input type="number" name="ValRadio"><br>
    <input type="submit" value="Calcular area">
    </form>
    <br>
    <?php echo @$respuesta; ?>
</body>
</html>