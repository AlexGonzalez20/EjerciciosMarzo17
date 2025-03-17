<?php

// Suma de cinco números
function sumarCincoNumeros($num1, $num2, $num3, $num4, $num5)
{
    $suma = $num1 + $num2 + $num3 + $num4 + $num5;
    echo "La suma de los cinco números es: $suma";
}

sumarCincoNumeros(
    rand(1, 10),
    rand(1, 10),
    rand(1, 10),
    rand(1, 10),
    rand(1, 10)
);

?>