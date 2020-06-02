<!DOCTYPE html>
<html>
<body>
<h1>Ejercicio 2</h1>

<?php 
$NombreCLase = "Lenguaje 4";
echo "<html><head><meta charset=\"utf-8\"></head>";
echo "<body>";
echo "<h2>Esta es la clase de $NombreCLase mañana y tarde (simbolo)</h2>";
echo  "<h2>Esta es la otra fila de la clase de ".$NombreCLase."con dos cadenas concatenadas </h2>"; 
echo "</body>";
echo "</html>";
$numero =50;
$calculo = $numero / 2+6;
echo "El rresultado de la operacion es : $calculo";
$logico =true;
$logico2= false;
echo "<p> El contenido de una varable tipo booleana verdadero: $logico y variable booleana falsa: $logico2 >/p>";
$variableNombreClase = "NombreClase";
echo"<p>Esta es un nombre de variable extraido de una cadena".$$variableNombreClase."</p>";

?>

</body>
</html>