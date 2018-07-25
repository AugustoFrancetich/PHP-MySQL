<?php /* en versiones anteriores se pone solamente el <? ?> */

    /* el @ evita que se muestre el error en pantalla */
    echo "Hola mundo!";/* echo se usa para poner un mensaje en pantalla */
    echo "<br>";
    $edad=0; /* asi es declaracion de variable */
    echo $edad."<br>";
    $edad = 15; /* asi se pone la declaracion y definicon de variable */
    echo $edad."<br>";
    $edad = "quince"; /* declaracion con string */
    echo $edad."<br>";

    echo "<br>"."<br>";/* el . seusa para concatenar strings o variables */

    $n1=10;
    $n2=20;
    $n3=1;
    $n4=2;
    $resultado=$n1+$n2+$n3+$n4;/* los operadores se usan normalmente sumar restar dividir etc */
    echo "El resultado es: ".$resultado;
    echo "<br>"."<br>";
    $resultado.=" es el resultado";
    echo $resultado; /* se puede agregar o concatenar algo poniendole el punto al igual */
    echo "<br>"."<br>";

    /* variables globales 
    $_POST ["parametro"];
    $_GET ["parametro"];*/

    $n1=$_GET["n1"]; /* aca no se define el valor que tiene n1 por lo que hay que ingresarlo desde el buscador */
    $n2=$_GET["n2"]; /* o se podria hacer una box con login y demas para que autocomplete los datos requeridos */
    @$n3=$_GET["n3"];
    @$n4=$_GET["n4"];
    $resultado=$n1+$n2+$n3+$n4;

?>


<a href="http://localhost/clase1.php?n1=50&n2=10">50 y 10</a><br>
<a href="http://localhost/clase1.php?n1=3&n2=2">3 y 2</a><br>
<a href="http://localhost/clase1.php?n1=100&n2=3">100 y 3</a><br>
<a href="http://localhost/clase1.php?n1=5&n2=5">5 y 5</a><br>

<form action="http://localhost/clase1.php" method="get">

    <input type="text" name="n1"><br>
    <input type="text" name="n2"><br>
    <input type="text" name="n3"><br>
    <input type="text" name="n4"><br>
    <input type="submit" value="Send">

</form>
<br>
<div style="color:red;"> <?php echo "El resultado es: ".$resultado /* se puede poner efectos de html en php */ ?>
</div>