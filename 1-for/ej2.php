<?php

// Mostrar los pisos y oficinas de un edificio de 5 pisos y 6 oficinas por piso

for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= 6; $j++) {
        echo "- Piso $i: Oficina $j.    <br>";
    }
    echo "<br>";
}

?>