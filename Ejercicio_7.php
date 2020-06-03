<!DOCTYPE html>
<html>
<body>
<h1>Ejercicio 7</h1>

<?php
for ($i=1; $i<=100; $i++) {
    if (primo($i)) {
        echo "<br>El número ".$i." es primo";
    } else {
        echo "<br>El número ".$i." NO es primo";
    }
}



 
function primo($num)
{
    if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
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
 
<input type="text" id="num" value="" placeholder="introduce un valor numérico">
<input type="button" onclick="primo()" value="Primo">
 
</form>
</body>
</html>