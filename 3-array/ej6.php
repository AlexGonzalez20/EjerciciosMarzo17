<?php

// Crear un array asociativo

$datos = array(
    "Nombre" => "Juan Orozco",
    "Direccion" => "Cra 48 A # 22",
    "Telefono" => 3215489621,
);

foreach ($datos as $indice => $valor) {
    echo "$indice: $valor <br>";
}

?>