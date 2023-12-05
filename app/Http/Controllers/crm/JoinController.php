<?php

namespace App\Http\Controllers\crm;

use App\Http\Controllers\Controller;
use App\Models\Market;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function register(Request $request)
    {
        // 유효성 검사
        $validate = $request->validate([
            'market_name'=>'required',
            'market_location'=>'required',
            'market_password'=>'required',
            'logo_img' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $market = new Market();
        $market->market_name = $validate['market_name'];
        $market->is_market_online = false;
        $market->market_location = $validate['market_location'];
        $market->password = $validate['market_password'];

        if($request -> hasFile('logo_img')){
        $fileName = time().'_'.$request -> file('logo_img') -> getClientOriginalName();
        $path = $request -> file('logo_img') -> storeAs('public/images', $fileName);
        $market ->market_logo_img_name = $fileName;
        $market -> market_logo_img = $path;
    }
        $market->save();

        return response()->json([
            'success'=>$market
        ]);
    }

}
