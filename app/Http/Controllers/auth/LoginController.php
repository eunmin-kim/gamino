<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $validate = $request->validate([
            'id'=>'required',
            'pw'=>'required'
        ]);
        $cred = [
            'user_id'=>$validate['id'],
            'password'=>$validate['pw']
        ];
        if (Auth::attempt($cred)) {
            $request->session()->regenerate();
//            $request->session()->setName($cred['user_id']);
            return redirect()->route('main');
        }

        return back()->withErrors([
            '로그인 실패'=>'아이디와 비밀번호를 확인해주세요'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
