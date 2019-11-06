<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BaiHat;
class BaiHatController extends Controller
{
    public function layDanhSach(Request $request)
    {
        $bai_hat=BaiHat::all();
        $result = [
            'success'   => true,
            'bai_hat'   => $bai_hat
        ];  
    	return response()->json($result);
    }

    public function layBaiHat(Request $request, $id)
    {
         $bai_hat=BaiHat::find($id);
         if($bai_hat==null)
         {
            return response()->json(['success'=>false]);
         }
         $result=[
            'success'=>true,
            'bai_hat'=>$bai_hat
         ];
         return response()->json($result);
    }
}
