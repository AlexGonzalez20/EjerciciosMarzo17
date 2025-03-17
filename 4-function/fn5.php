<?php

// Calcular el IVA de un producto

$precio = rand(1000, 10000);
$iva = 10;

function calcularIva($precio, $iva)
{
    echo "El precio del producto es: $precio<br>";
    echo "El IVA del producto es: $iva<br>";
    $ivaProducto = $precio * ($iva / 100);
    echo "El IVA del producto es: $ivaProducto";
}

calcularIva($precio, $iva);

?>