<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\User;
 use App\Pokemon;

 class UController extends Controller
 {
     public function edit($id)
     {
         $users = User::find($id);
         return view('user.edit')->with('users', $users);
     }

     public function update(Request $reguest, $id)
     {
         $user = User::find($id);
         $user->name = $reguest->get('name');
         $user->fullname = $reguest->get('fullname');
         $user->bday = $reguest->get('bday');
         $user->image = $reguest->get('image');
         $user->email = $reguest->get('email');
         $user->password = bcrypt($reguest->get('password'));
         $user->save();

         return redirect('/home');
     }

     public function select($id)
     {
         $mypokemons = Pokemon::all()->where('user_id', $id);
         $brojac=0;

         foreach($mypokemons as $mypokemon)
         {
             $brojac++;
         }

         if($brojac<5) {
             $pokemons = Pokemon::all()->where('user_id', null);

             return view('user.pokemon')->with('pokemons', $pokemons)->with('id', $id);
         } else {
             return request('/home');
         }
     }

     public function save(Request $request, $id)
     {
         $pid = $request->get('select');

         $pokemon = Pokemon::find($pid);
         $pokemon->user_id = $id;

         $pokemon->save();

         return redirect('/home');
     }

     public function mypo($id)
     {
         $pokemons = Pokemon::all()->where('user_id', $id);

         return view('user.mypokemons')->with('pokemons', $pokemons);
     }

     public function abandon(Request $request, $id)
     {
         $pokemon = Pokemon::find($id);
         $pokemon->user_id = null;

         $pokemon->save();

         return redirect('/home');
     }

     public function myStrength(Request $request, $id)
     {
         $pokemons = Pokemon::all()->where('user_id', $id);
         var_dump($pokemons);
     }
 }