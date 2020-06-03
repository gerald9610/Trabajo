<!DOCTYPE html>
<html>
<body>
<h1>Ejercicio 7</h1>



<?php
for ($i=1; $i<=100; $i++) {
    if (primo($i)) {
    } else {
       
    }
}
function primo($num)
{
    if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
        echo "<br>El número ".$num." es primo";
        
       return True;
    } else {
        echo "<br>El número ".$num." no es primo";

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
 
<input type="primo" id="valor" value="" placeholder="introduce un valor numérico">
<input type="submit" value ="ingresar">
 
</form>
</body>
</html>