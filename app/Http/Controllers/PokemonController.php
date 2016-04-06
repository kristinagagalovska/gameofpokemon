<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Routing\Controller;

class PokemonController extends Controller
{
    public function show()
    {
        $pokemons = Pokemon::all();

        return view('pokemon.show')->with('pokemons', $pokemons);
    }

}