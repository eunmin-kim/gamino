<?php

namespace App\Http\Controllers;

use App\Models\OrderWaiting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function order(Request $request)
    {
//        $validate = $request->validate([
//            'where'=>'required',
//            'totalPrice'=>'required',
//            'orderMenu'=>'required'
//        ]);
////        $req = $request->all();
//        $validate = json_decode($req,true);
        $orderMenu = $request->json('orderMenu');
        $where = $request->json('where');
        $totalPrice = $request->json('totalPrice');
        $orderNotice = $request->json('orderNotice');
        if ($orderMenu === "")
        {
            return response()->json([
                'error'=>'주문하신 음식이 없습니다.'
            ],404);
        }
        $id = Auth::id();
        $order = new OrderWaiting();
        $order->order_menu = $orderMenu;
        $order->order_menu_price = $totalPrice;
        $order->delivery_or_inhouse = $where;
        $order->is_order_finish = 0;
        $order->id = $id;
        $order->markets_id = 5;
        $order->order_notice = $orderNotice;
        $order->save();
        Auth::getSession()->put("order",true);
        return response() -> json([
            'success'=> "order"
        ]);
    }
}
