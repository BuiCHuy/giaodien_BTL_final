<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KhachHang;
use App\Models\TheTichDiem;
use Illuminate\Support\Facades\DB;
class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $khachhangs = KhachHang::all();
        return view('khachhangs.index', compact('khachhangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('khachhangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $makh = $request->input(key: 'makh');
        $hoten = $request->input(key: 'hoten');
        $diachi = $request->input(key: 'diachi');
        $sdt = $request->input(key: 'sdt');
        DB::statement('exec insertKhachHang @makh=?,@hoten=?,@diachi=?,@sdt=?',
         [$makh, $hoten, $diachi, $sdt] );
        return redirect()->route(route: 'khachhangs.index')->with('success', 'Thêm thành công');
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
        $khachhang = KhachHang::findOrFail($id);
        
        return view('khachhangs.edit',compact('khachhang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $makh = $request->input(key: 'makh');
        $hoten = $request->input(key: 'hoten');
        $diachi = $request->input(key: 'diachi');
        $sdt = $request->input(key: 'sdt');
        DB::statement('exec updateKhachHang @makh=?,@hoten=?,@diachi=?,@sdt=?',
         [$makh, $hoten, $diachi, $sdt] );
        return redirect()->route(route: 'khachhangs.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $khachhang = KhachHang::findOrFail($id);
        DB::statement('exec deleteKhachHang @makh=?',[$id]);
        return redirect()->route('khachhangs.index')->with('success','Xóa thành công');
    }

    public function ttd()
    {
        $thetichdiems = TheTichDiem::all();
        
        DB::statement('EXEC sp_in_thetichdiem');
        
        return view('khachhangs.ttd', compact('thetichdiems'));
    }
}
