<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quantrivien;

class QuanTriVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsQuanTriVien=quantrivien::all();
        return view('quan-tri-vien.danh-sach',compact('dsQuanTriVien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('quan-tri-vien.form'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quanTriVien = new quantrivien;
        $quanTriVien->ten_dang_nhap = $request->ten_dang_nhap;
        $quanTriVien->mat_khau = $request->mat_khau ;
        $quanTriVien->ho_ten = $request->ho_ten;
        $quanTriVien->save();

        return redirect()->route('quan-tri-vien.danh-sach');
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
         $quanTriVien=quantrivien::find($id);
        return view('quan-tri-vien.form');
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
        $quanTriVien=quantrivien::find($id);
        $quanTriVien->ten_dang_nhap = $request->ten_dang_nhap;
        $quanTriVien->mat_khau = $request->mat_khau ;
        $quanTriVien->ho_ten = $request->ho_ten;
        $quanTriVien->save();

        return redirect()->route('quan-tri-vien.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $quanTriVien=quantrivien::find($id);
         $quanTriVien->delete();
         return redirect()->route('quan-tri-vien.danh-sach');
    }
}
