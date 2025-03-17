<?php

// Mes del año según número entre 1 y 12

$mes = rand(1, 12);

function mesAño($num1)
{
    switch ($num1) {
        case '1':
            echo "Enero";
            break;
        case "2":
            echo "Febrero";
            break;
        case "3":
            echo "Marzo";
            break;
        case "4":
            echo "Abril";
            break;
        case "5":
            echo "Mayo";
            break;
        case "6":
            echo "Junio";
            break;
        case "7":
            echo "Julio";
            break;
        case "8":
            echo "Agosto";
            break;
        case "9":
            echo "Septiembre";
            break;
        case "10":
            echo "Octubre";
            break;
        case "11":
            echo "Noviembre";
            break;
        case "12":
            echo "Diciembre";
            break;
        default:
            echo "El número ingresado no corresponde a un mes del año";
            break;
    }
}

echo mesAño($mes);

?>