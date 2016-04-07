<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class AdminController extends Controller
{
    public function view()
    {
        $users = User::all()->where('admin', 0);

        return view('admin.view')->with('users', $users);
    }

    public function mark($id)
    {
        $user = User::find($id);

        return view('admin.mark')->with('user', $user);
    }

    public function save(Request $request, $id)
    {

        $user = User::find($id);
        $user->admin = 1;
        $user->save();

        return redirect('admin/view');
    }


}