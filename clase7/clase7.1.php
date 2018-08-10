<?php
    //$arch=fopen('ruta','modo')
function leercsv($ruta)
{
    $archivo=fopen("$ruta","r");

    if(!$archivo){
        echo 'el archivo no se abrio bien';
    }else{
        //fwrite($archivo,"Roco/Pitbull/6/35kg");
        //fpassthru($archivo);
        //fseek($archivo,7);
        /*$cabeceras=array("Nombre","Raza","Edad","Peso");
        $txtArchivo= fread($archivo, filesize('perro.p2f'));
        $datos = explode("/" , $txtArchivo);
        $nuevosDatos=array_combine($cabeceras,$datos);
        var_dump($nuevosDatos);*/
        $registros=array();
        $encabezados = array();
        $flag=true;
        while($linea = fgetcsv($archivo))
        {
            if($flag){
                $encabezados=$linea;
                $flag=false;
                continue;
            }
            $registros[] = array_combine($encabezados,$linea);
        }
        return $registros;
        fclose($archivo);
    }
}

var_dump(leercsv("perros.csv"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>