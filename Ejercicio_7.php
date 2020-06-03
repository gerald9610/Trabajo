<!DOCTYPE html>
<html>
<body>
<h1>Ejercicio 7</h1>

<?php




 
function primo($num)
{
    if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
        printf("Cuantos primos desea mostrar: ");
        echo "<h3> Numeros Primos"  .$_GET['primo']."</h3>";
        return True;
    } else {
        // comprobamos si es par
        if ($num % 2 != 0) {
            // comprobamos solo por los impares
            for ($i = 3; $i <= sqrt($num); $i += 2) {
                if ($num % $i == 0) {
                    return False;
                }
            }
            return True;
        }
    }
    return False;

}

?>

<form>
<h4>Determinar si un valor es primo</h4>
 
<input type="text" id="valor" value="" placeholder="introduce un valor numérico">
<input type="button" onclick="primo()" value="Primo">
 
<div id="resultado"></div>
</form>
</body>
</html>