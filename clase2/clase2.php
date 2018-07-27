<?php
    @$numero1=$_GET["numero1"];
    @$numero2=$_GET["numero2"];
    @$operacion=$_GET["operacion"];
    @$resultado;   
        if($operacion==1){
            $resultado=$numero1+$numero2;
        }
        if($operacion==2){
            $resultado=$numero1-$numero2;
        }
        if($operacion==3){
            $resultado=$numero1*$numero2;
        }
        if($operacion==4){
            $resultado=$numero1/$numero2;
        }
    ?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>clase 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>Calculadora 2.2</h1><br>
    <form action="http://localhost/clase2/clase2.php" method="get">
    Numero 1: <input type="number" name="numero1" required><br>
    Numero 2: <input type="number" name="numero2" required><br>
    Operacion: <input type="number" name="operacion" min="1" max="4" required><br>
    <input type="submit" name="enviar"><br>
    </form>
    <?php if(@!is_null($resultado)){ ?>
        <p>el resultado es <?php echo $resultado; ?> </p>
    <?php } else if(isset($_GET["numero1"])){
        echo"<br>Ingrese los valores necesarios para realizar la operacion"; /* is_null pregunta, esta vacio? y el isset pregunta, existe? */
        }?>
</body>
</html>