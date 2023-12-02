<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class JoinController extends Controller
{

    public function register(Request $request)
    {
        $validated = $request->validate([
            'id'=>'required',
            'pw'=>'required',
            'pw2'=>'required',
            'name'=>'required',
            'phone_number'=>'required'
        ]);
        $id = $validated['id'];
        $pw = $validated['pw'];
        $pw2 = $validated['pw2'];
        $name = $validated['name'];
        $phoneNumber = $validated['phone_number'];

        $user = new User();
        $user->user_id = $id;
        $user->password = $pw;
        $user->name = $name;
        $user->phone_number = $phoneNumber;
        $user->save();

        return response()->redirectToRoute("login");
    }
}
