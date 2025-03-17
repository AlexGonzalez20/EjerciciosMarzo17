<?php

// Programa que muestra el numero mayor de un array de 50 números
// Crear un array de 50 elementos
$lista = [50];

// Llenar el array con 50 números aleatorios
for ($i = 0; $i < 50; $i++) {
    $lista[$i] = rand(1, 50);
}

// Variable para el numero mayor del array
$mayor = 0;

// Ciclo condicional para encontrar el número mayor del array
for ($i = 0; $i < 50; $i++) {
    if ($lista[$i] > $mayor) {
        $mayor = $lista[$i];
    }
}

echo "El número mayor del array es $mayor.<br>";

echo "*-----------------------------------*<br>";

// Segunda forma, array con numero fijosd

$numeros = [12, 45, 23, 25, 8, 39, 27, 41, 30];

$mayor = 0;

foreach ($numeros as $numero) {
    if ($numero > $mayor) {
        $mayor = $numero;
    }
}

echo "El número mayor del array es: $mayor";


?>