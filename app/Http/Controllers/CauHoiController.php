<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cauhoi;
use App\linhvuc;
class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsCauHoi=cauhoi::all();
        return view('cau-hoi.danh-sach',compact('dsCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $dsLinhVuc=linhvuc::all();
        return view('cau-hoi.form',compact('dsLinhVuc')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cauHoi = new cauhoi;
        $cauHoi->noi_dung= $request->noi_dung;
        $cauHoi->linh_vuc_id= $request->linh_vuc;
        $cauHoi->phuong_an_a= $request->phuong_an_a;
        $cauHoi->phuong_an_b= $request->phuong_an_b;
        $cauHoi->phuong_an_c= $request->phuong_an_c;
        $cauHoi->phuong_an_d= $request->phuong_an_d;
        $cauHoi->dap_an= $request->dap_an;
        $cauHoi->save();

        return redirect()->route('cau-hoi.danh-sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $cauHoi= cauhoi::find($id);
        $dsLinhVuc= linhvuc::all();
        return view('cau-hoi.form',compact('cauHoi','dsLinhVuc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cauHoi=cauhoi::find($id);
        $cauHoi->noi_dung= $request->noi_dung;
        $cauHoi->linh_vuc_id= $request->linh_vuc;
        $cauHoi->phuong_an_a= $request->phuong_an_a;
        $cauHoi->phuong_an_b= $request->phuong_an_b;
        $cauHoi->phuong_an_c= $request->phuong_an_c;
        $cauHoi->phuong_an_d= $request->phuong_an_d;
        $cauHoi->dap_an= $request->dap_an;
        $cauHoi->save();

        return redirect()->route('cau-hoi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $cauHoi=cauhoi::find($id);
        $cauHoi->delete();
        return redirect()->route('cau-hoi.danh-sach');
    }
}
