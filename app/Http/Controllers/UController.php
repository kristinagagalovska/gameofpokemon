<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\User;

 class UController extends Controller
 {
     protected function edit($id)
     {
         $users = User::find($id);
         return view('user.edit')->with('users', $users);
     }

     protected function update(Request $reguest, $id)
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
 }