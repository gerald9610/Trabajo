<!DOCTYPE html>
<html>
<body>
<h1>Ejercicio 7</h1>
<!DOCTYPE HTML>
<html><head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
<title>ejercicio</title></head>
<body style="text-align: center;">
<h1>Ingrese un número:</h1>
<form action="tp.php" method="get">
Número:<input type="text" name="num"><input type="submit" value="Ver lista">
</form></body></html>
?>
<!DOCTYPE html>
<html>
<head>
echo "<html><head><meta charset="UTF-8"></head>";
<title>ejercicio</title></head>
<body style="text-align: center;">
<?php
$num=$_GET['num'];
if (es_primo($num)) {
   //Si la función es_primo devolvió true:
   echo "<h1>El número $num es primo</h1>";
} else {
   //Si devolvió false:
   echo "<h1>El número ".$num." no es primo.</h1>"; 
   // La función devuelve un array, que es recorrido en el foreach.
   foreach(lista_de_primos($num) as $n) echo "$n ";
   echo "<p>Los primos menores que ".$num." son: ";   
}
?>
</body></html>
<?php

function lista_de_primos($x) {
//Retorna un array con los números primos menores que $x.
  for($i=1;$i<$x;$i++) {
    //Si es primo, lo agrego a la lista:
    if(es_primo($i)) $lista[]=$i; 
  }
  return $lista;  //Retorno el array completo.
}
 
function es_primo($n) {
//Retorna true si el número es primo; false si no lo es.
  $divisor=2;
  while($divisor<$n) {
    //Si el resto de alguna división es igual a 0, no es primo.
    if(($n%$divisor)==0) return false; //Alternativa:  return 0;
    $divisor++;
  }
  
}
?>