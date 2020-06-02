<!DOCTYPE html>
<html>
<body>
<h1>Ejercicio 3</h1>
<?php
echo "<h2>Arreglos</h2>";

$miArreglo = array (10,20,30,40,50);

echo "<p>Contenido del elemento 2 del arreglo: $miArreglo[2]</p>";
echo "<p>Despliega el contenido del arreglo:</p>";

print_r ($miArreglo);//se utiliza esta funcion para ver en forma entendible el contenido de la vvariable

echo "<p>El tamaño del arreglo es :".sizeof($miArreglo)."</p>";

$mifechaArr["dia"]="Lunes";
$mifechaArr["mes"]="Mayo";
$mifechaArr["año"]="2020";

echo "<br><br>";

var_dump ($mifechaArr);//muestra informacion de la variable indicada

unset ($mifechaArr["año"]);//Elimina el elemento indicado del arreglo

echo "<br><br>";
print_r ($mifechaArr);
$MiArregloReves = array_reverse($miArreglo);

echo "<br><br>";
print_r ($MiArregloReves);//este nuevo arreglo loe elementos en forma inversa

?>
</body>
</html>
