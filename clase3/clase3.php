 <?php
    $alumnos=["Gonzalez", "Perez", "Gomez", "Fernandez"];
    $promedio=[7,8,4,1];
?>
<table border="1">
    <tr>
        <td>Alumnos</td>
        <td>Promedio</td>
    </tr>
<?php
    for ($i=0; $i < count($alumnos); $i++) { 
    ?>
    <tr>
        <td><?php echo $alumnos[$i];?></td>
        <td><?php echo $promedio[$i];?></td>
    </tr>
<?php
    }
?>
</table>
<br><br><br>
<?php
    for ($i=0; $i <count($alumnos) ; $i++) { 
?>
        <div><?php echo $alumnos[$i]. " tiene un promedio de: ".$promedio[$i];?></div><br>
<?php   
}
?>
<br><br>
<?php
    $promedios=[
                    "Gonzalez"=>7,
                    "Perez"=>8,
                    "Gomez"=>4,
                    "Fernandez"=>1
                ];

    foreach ($promedios as $clave=>$elemento) {
        echo $clave." tiene un promedio de: ".$elemento."<br><br>";
    }


    /*implode(); de array a syting y es "delimitador",$array*/
    /*explode(); de string a array y es "delimitador",$string*/
$respuesta="";
$min=0;
$max=0;
$promTotal=0;
$sumaTotal=0;
$primeraVuelta=1;
$cantidadAlumnos=count($promedios);
if(isset($_GET["notaGonzalez"])) {
    $promedios=[
                "Gonzalez"=>$_GET["notaGonzalez"],
                "Perez"=>$_GET["notaPerez"],
                "Gomez"=>$_GET["notaGomez"],
                "Fernandez"=>$_GET["notaFernandez"]
                ];
    foreach (($promedios) as $alumnos => $promedio) {
        $sumaTotal+=$promedio;
        if($primeraVuelta==1){
            $max=$promedio;
            $min=$promedio;
            $primeraVuelta++;
        }
        if ($promedio>$max) {
            $max=$promedio;
        }
        if ($promedio<$min) {
            $min=$promedio;
        }
        $promTotal=$sumaTotal/$cantidadAlumnos;       
    }
    $respuesta='<table><tr><td>Alumno</td><td>Nota</td></tr>';
    foreach ($promedios as $alumnos => $promedio) {
        $respuesta .= '<tr><td>'.$alumnos.'</td><td>'.$promedio.'</td></tr>';
    }
    $respuesta .= '<tr><td colspan="2">Max: '.$max.' Min: ' .$min.' Promedio total: ' .$promTotal.'</td></tr></table>';
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>promedios</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    Gonzalez: <input type="number" name="notaGonzalez" ><br>
    Perez: <input type="number" name="notaPerez"><br>
    Gomez: <input type="number" name="notaGomez"><br>
    Fernandez: <input type="number" name="notaFernandez"><br><br>
    <input type="submit" value="Enviar">
    </form>
    <?php echo $respuesta;?>  
</body>
</html>
