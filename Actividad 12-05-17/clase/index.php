<?php
include ("clase.php");

$n1=10;
$n2=5;

echo "El numero 1 es: $n1";
echo "<br>El numero 2 es: $n2<br>";
echo "<br>La suma es : " .matematica::sumar($n1,$n2);

echo "<br>La resta es : " .matematica::restar($n1,$n2);

echo "<br>La multiplicacion es : " .matematica::multiplicar($n1,$n2);

echo "<br>La division es : " .matematica::dividir($n1,$n2);

?>