<?php

// Calcular el volumen de un cilindro

$radio = rand(1, 10);
$altura = rand(1, 10);

function volCilindro($radio, $altura)
{
    $volumen = pi() * $radio * $radio * $altura;
    echo $volumen;
}

volCilindro($radio, $altura);

?>