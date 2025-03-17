<?php

// Programa que recibe una palabra y la divide en letras
// Dada una palabra
$palabra = "zweSxrdctIfvqewrygbUuhnijmUok,..";
// Se calcula la cantidad de letras que tiene la palabra, usando la función strlen
$cantidad = strlen($palabra);
// Se informa la cantidad de letras que tiene la palabra
echo "La palabra tiene $cantidad letras.<br><br>";

// Se crea un arreglo con la cantidad de letras que tiene la palabra
$lista = [$cantidad];

// Se llena el arreglo con las letras de la palabra
for ($i = 0; $i < $cantidad; $i++) {
    $lista[$i] = $palabra[$i];
}

// Se recorre el arreglo con un ciclo foreach
foreach ($lista as $letra) {
    echo "$letra<br>";
}

?>