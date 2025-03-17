<?php

$pokemon = [
    "Pikachu",
    "Charmander",
    "Bulbasaur",
    "Squirtle",
    "Giratina",
    "Palkia",
    "Dialga",
    "Groudon",
    "Kyogre",
    "Rayquaza",
    "Bishaarp",
    "Garchomp",
    "Gengar"
];

function valorarPokemon($pokemon)
{
    return rand(0, 4);
}

for ($i = 0; $i < count($pokemon); $i++) {
    echo "$pokemon[$i] tiene una valoracion de " . valorarPokemon($pokemon[$i]) . "<br><br>";
}

?>