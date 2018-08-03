<?php /*
if(isset($_GET["pagina"])){
    $paginaActual = $_GET["pagina"].".php";
    require_once("cabecera.php");
    require_once($paginaActual);
    require_once("pie.php");
}else{
    require_once("cabecera.php");
    require_once("inicio.php");
    require_once("pie.php");
} */  

function pagina($parametro, &$paginaActual){
    switch ($parametro) {
        case 'p': //producto
            $paginaActual="producto.php";
            break;
        case 'ps': //productos
            $paginaActual="productos.php";
            break;
        case 'i': //inicio
            $paginaActual="inicio.php";
            break;    
        case 'c': //contacto
            $paginaActual="contacto.php";
            break;
        case 'in': //ingreso
            $paginaActual="ingreso.php";
            break;
        case 'r': //registro
            $paginaActual="registro.php";
            break;
        default:
            $paginaActual="inicio.php";
            break;
    }
}

if(isset($_GET["pagina"])){
    $parametro = $_GET["pagina"];
    $paginaActual="";

    pagina($parametro, $paginaActual);
   
    require_once("cabecera.php");
    require_once($paginaActual);
    require_once("pie.php");
 }else{
    require_once("cabecera.php");
    require_once("inicio.php");
    require_once("pie.php");
 }
?>