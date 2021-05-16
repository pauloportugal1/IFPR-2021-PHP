<?php

function receberPokemons($limit = 15, $offset = 0){
    $pokemons = [];

    for ($i = ($offset + 1); $i <= ($limit + $offset); $i++) {
        $result = file_get_contents("https://pokeapi.co/api/v2/pokemon/" . $i);
        $pokeMatriz = json_decode($result, true);

        $pokemons[$i]['altura'] = $pokeMatriz['height'];
        $pokemons[$i]['nome'] = $pokeMatriz['forms'][0]['name'];
        $pokemons[$i]['habilidades'] = $pokeMatriz['abilities'];
        $pokemons[$i]['imagem'] = $pokeMatriz['sprites']['other']['dream_world']['front_default'];
        $pokemons[$i]['peso'] = $pokeMatriz['weight'];
    }

    return $pokemons;
}