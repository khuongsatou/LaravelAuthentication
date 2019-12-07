<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class QuanTriVienController extends Controller
{
    protected  $redirectTo ="linh_vuc";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dangNhap()
    {
        return view('dang-nhap');
    }

    public function xuLyDangNhap(Request $request)
    {
        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;
        if(Auth::attempt(['ten_dang_nhap'=>$ten_dang_nhap,'password'=>$mat_khau])){
            return redirect()->route('trang-chu');

        }
        return "Đăng nhập thất bại";
    }

    public function index()
    {
        //
    }

    public function layThongTin()
    {
        return Auth::id();
    }

    public function dangXuat()
    {
        return Auth::logout();
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
