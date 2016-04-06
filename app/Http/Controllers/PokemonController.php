<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;


class PokemonController extends Controller
{
    public function show()
    {
        $pokemons = Pokemon::all();

        return view('pokemon.show')->with('pokemons', $pokemons);
    }

    public function create(Request $request)
    {
        return view('pokemon.add');
    }

    public function store(Request $request)
    {
        $car = new Pokemon();
        $car->name = $request->get('name');
        $car->image = $request->get('image');
        $car->strength = $request->get('strength');

        Pokemon::create($request->all());

        return redirect()->route('pokemon.show');
    }

}