<?php

namespace App\Http\Controllers\crm;

use App\Http\Controllers\Controller;
use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChangeInfoController extends Controller
{
    public function marketInfo(Request $request)
    {
        $marketData = DB::table('market')->where('market_id',Auth::guard('market')->id())->first();

        return view("crm/market-info",['marketInfo' => $marketData]);
    }


//    공지사항 수정
    public function changeNotice(Request $request)
    {
        if ($request->json('info') === null)
        {
            return response()->json([
                'error'=>'No Data'
            ],404);
        }
        $updateInfo = $request->json('info');
        $userId = Auth::guard('market')->id();
        $result = Market::where('market_id',$userId)->update([
            'market_notice'=>$updateInfo
        ]);

        return response()-> json([
            'result'=> $result
        ]);
    }

//    가게 이름 수정
    public function changeMarketName(Request $request)
    {
        if ($request->json('info') === null)
        {
            return response()->json([
                'error'=>'No Data'
            ],404);
        }
        $updateInfo = $request->json('info');
        $userId = Auth::guard('market')->id();
        $result = Market::where('market_id',$userId)->update([
            'market_name'=>$updateInfo
        ]);

        return response()-> json([
            'result'=> $result
        ]);
    }

//    위치 수정

    public function changeLocation(Request $request)
    {
        if ($request->json('info') === null)
        {
            return response()->json([
                'error'=>'No Data'
            ],404);
        }
        $updateInfo = $request->json('info');
        $userId = Auth::guard('market')->id();
        $result = Market::where('market_id',$userId)->update([
            'market_location'=>$updateInfo
        ]);

        return response()-> json([
            'result'=> $result
        ]);
    }
}
