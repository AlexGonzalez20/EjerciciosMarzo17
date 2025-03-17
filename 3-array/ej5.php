<?php

// Crear un array y recorrerlo con un foreach

$lista[4] = 80;
$lista[9] = "Hola";
$lista[22] = 99;
$lista[156] = "Mundo";

foreach ($lista as $indice => $valor) {
    echo "$indice: $valor <br>";
}

?>