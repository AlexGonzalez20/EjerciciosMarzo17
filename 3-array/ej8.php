<?php

// Calcular el promedio de peso de 5 personas y mostrar cuántas personas tienen un peso superior e inferior al promedio

// Array con 5 pesos
$listaPesos = [50.82, 82.05, 70.25, 92.96, 100.52];

$promedio = 0;

for ($i = 0; $i < 5; $i++) {
    $promedio += $listaPesos[$i];
}
$promedio = $promedio / 5;

$superior = 0;
$inferior = 0;

foreach ($listaPesos as $persona) {
    if ($persona > $promedio) {
        $superior++;
    } else if ($persona < $promedio) {
        $inferior++;
    }
}

echo "Promedio de peso entre las 5 personas: $promedio<br>";
echo "*-----------------------------------*<br>";
echo "Cantidad de personas con peso superior al promedio: $superior<br>";
echo "*-----------------------------------*<br>";
echo "Cantidad de personas con peso inferior al promedio: $inferior<br>";

?>