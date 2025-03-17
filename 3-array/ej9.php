<?php

// Promedio general en 2 grupos de 10 estudiantes cada uno

// Se crean dos arreglos con 10 elementos cada uno
$grupoA = [10];
$grupoB = [10];

// Lleno ambos arreglos con notas aleatorias entre 1 y 10
for ($i = 1; $i <= 10; $i++) {
    $grupoA[$i] = rand(1, 10);
    $grupoB[$i] = rand(1, 10);
}

// Variables para guardar el promedio de cada grupo
$promedioA = 0;
$promedioB = 0;

// Se suman todas las notas del grupo A
foreach ($grupoA as $notaEstudiante) {
    $promedioA += $notaEstudiante;
}
// Se halla el promedio del grupo A
$promedioA = $promedioA / count($grupoA);

// Se suman todas las notas del grupo B
foreach ($grupoB as $notaEstudiante) {
    $promedioB += $notaEstudiante;
}

// Se halla el promedio del grupo B
$promedioB = $promedioB / count($grupoB);

// Se informa el promedio de cada grupo
echo "Promedio del grupo A: $promedioA<br>";
echo "Promedio del grupo B: $promedioB<br>";

// Se halla el promedio general de ambos grupos y se informa
$promedioGeneral = ($promedioA + $promedioB) / 2;
echo "Promedio general de ambos grupos: $promedioGeneral<br>";

// Se compara los promedios de ambos grupos y se informa
// si el grupo A tiene un promedio mayor, si el grupo B tiene un promedio mayor
if ($promedioA > $promedioB) {
    echo "El grupo A tiene un promedio mayor que el grupo B.";
} else if ($promedioA < $promedioB) {
    echo "El grupo B tiene un promedio mayor que el grupo A.";
} else {
    echo "Ambos grupos tienen el mismo promedio.";
}

?>