<?php

// Calcular el factorial de un número

$numero = rand(1, 10);
$factorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $factorial = $i * $factorial;
}
echo "El factorial de $numero es $factorial.";

?>