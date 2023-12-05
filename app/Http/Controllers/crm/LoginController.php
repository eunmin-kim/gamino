<?php

namespace App\Http\Controllers\crm;

use App\Http\Controllers\Controller;
use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
      $validate = $request->validate([
          'market_name'=>'required',
          'market_password'=>'required'
      ]);

      if (Auth::guard('market')->attempt([
          'market_name'=>$validate['market_name'],
          'password'=>$validate['market_password']
      ]))
        {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            '로그인 실패'=>'아이디와 비밀번호를 확인해주세요'
        ]);

    }

    public function logout(Request $request)
    {
        Auth::guard('market')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
