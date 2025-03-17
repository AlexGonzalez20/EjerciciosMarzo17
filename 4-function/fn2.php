<?php

// Numero par o impar

$num1 = rand(1, 1000);

function esPar($num1)
{
    if ($num1 % 2 == 0) {
        echo "El número $num1 es par.";
    } else {
        echo "El número $num1 es impar.";
    }
}

echo esPar($num1);

?>