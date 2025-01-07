<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanVien;
use App\Models\ThanhToanLuong;
use Illuminate\Support\Facades\DB;
class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nhanviens = NhanVien::all();
        return view('nhanviens.index', compact('nhanviens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('nhanviens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $manv = $request->input(key: 'manv');
        $hoten = $request->input(key: 'hoten');
        $diachi = $request->input(key: 'diachi');
        $ngaysinh = $request->input(key: 'ngaysinh');
        $gioitinh = $request->input(key: 'gioitinh');
        $sdt = $request->input(key: 'sdt');
        $luong1gio = $request->input(key: 'luong1gio');
        $giolam = $request->input(key: 'giolam');
        DB::statement('exec insertNhanVien @manv=?,@hoten=?,@diachi=?,@ngaysinh=?,@gioitinh=?,@sdt=?,@luong1gio=?,@giolam=?',
         [$manv, $hoten, $diachi, $ngaysinh, $gioitinh, $sdt, $luong1gio, $giolam] );
        return redirect()->route(route: 'nhanviens.index')->with('success', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nhanvien = NhanVien::findOrFail($id);
        
        return view('nhanviens.edit',compact('nhanvien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $manv = $request->input(key: 'manv');
        $hoten = $request->input(key: 'hoten');
        $diachi = $request->input(key: 'diachi');
        $ngaysinh = $request->input(key: 'ngaysinh');
        $gioitinh = $request->input(key: 'gioitinh');
        $sdt = $request->input(key: 'sdt');
        $luong1gio = $request->input(key: 'luong1gio');
        $giolam = $request->input(key: 'giolam');
        DB::statement('exec updateNhanVien @manv=?,@hoten=?,@diachi=?,@ngaysinh=?,@gioitinh=?,@sdt=?,@luong1gio=?,@giolam=?',
         [$manv, $hoten, $diachi, $ngaysinh, $gioitinh, $sdt, $luong1gio, $giolam] );
        return redirect()->route(route: 'nhanviens.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nhanvien = NhanVien::findOrFail($id);
        DB::statement('exec deleteNhanVien @manv=?',[$id]);
        return redirect()->route('nhanviens.index')->with('success','Xóa thành công');
    }

    public function ttl()
    {
        $thanhtoanluongs = ThanhToanLuong::all();
        
        DB::statement('exec sp_in_thanhtoanluong');
        
        return view('nhanviens.ttl', compact( 'thanhtoanluongs'));
    }

    public function tt()
    {
        return view('nhanviens.tt');
    }

    public function tts(Request $request)
    {
        
        $manv = $request->input(key: 'manv');
        DB::statement('exec insertThanhToanLuong @manv=?',[$manv] );
        return redirect()->route(route: 'nhanviens.index')->with('success', 'Thêm thành công');
    }
}
