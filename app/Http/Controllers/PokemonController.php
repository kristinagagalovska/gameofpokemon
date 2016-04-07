<?php

namespace App\Http\Controllers;

use App\Pokemon;
use App\Http\Requests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;


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
        $this->validate($request, [
           'strength' => 'required|integer|between:1,100'
        ]);

        $car = new Pokemon();
        $car->name = $request->get('name');
        $car->image = $request->get('image');
        $car->strength = $request->get('strength');

        Pokemon::create($request->all());

        return redirect()->route('pokemon.show');
    }

    public function edit($id)
    {
        $pokemon = Pokemon::find($id);

        return view('pokemon.edit')->with('pokemon', $pokemon);
    }

    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->name=$request->get('name');
        $pokemon->image=$request->get('image');
        $pokemon->strength=$request->get('strength');

        $pokemon->save();

        return redirect()->route('pokemon.show');
    }

    public function delete(Request $request, $id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->delete();

        return redirect()->route('pokemon.show');
    }
}