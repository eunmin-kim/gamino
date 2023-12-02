<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $id = $request['id'];
        $pw = $request['pw'];
        dd($id,$pw);
    }
}
