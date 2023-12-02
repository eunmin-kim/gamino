<?php

namespace App\Http\Controllers;

use App\Models\OrderWaiting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Pest\Laravel\json;

class StreamController extends Controller
{
   public function stream() {
        return response()-> stream(function() {
            while (true) {
                if (connection_aborted())
                {
                    break;
                }
                $waitingNumber = DB::table('order_waiting')->where('is_order_finish','=',0)->count("waiting_id");
                $startNumber = DB::table('order_waiting')->where('is_order_finish','=',0)->orderBy('waiting_id')->first();
//                $id = DB::table('users')->where('user_id','=',$request->session()->getName())->get("id");
                $id = Auth::id();
                $sessionNumber = DB::table('order_waiting')->where('is_order_finish','=',0)->where('id',$id)->get('waiting_id');
                $arr = [
                    "waiting_number"=>$waitingNumber,
                    "start"=>$startNumber,
                    "session_number"=>$sessionNumber
                ];
                echo "event: wait\n";
                echo 'data: '.json_encode($arr)."\n\n";
                ob_flush();
                flush();


                sleep(3);
            }
        },200,[
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'text/event-stream',
        ]);
   }
}
