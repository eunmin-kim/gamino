<?php

namespace App\Http\Controllers\crm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function marketWait()
    {
        /**
         * 대기 정보 보여주기
         *
         */
        $waitingData = DB::table('order_waiting')->join('users','order_waiting.id','=','users.id') -> where([['markets_id',Auth::guard('market')->id()],['is_order_finish',0]])->get();
        return view('crm/market-wait',['waiting'=>$waitingData]);
    }
    //    입장 시키기 (완료)

    public function waitingFinish(Request $request)
    {
        /**
         * 입장 시키기 ajax
         */
        DB::table('order_waiting')->update([
            'is_order_finish'=>1
        ]);
        return;
    }

    public function getMenu()
    {
        return view('wait-menu');
    }

}
