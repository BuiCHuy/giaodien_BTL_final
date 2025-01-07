<?php

use App\Http\Controllers\cthd_controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoanhThuKhachHangController;
use App\Http\Controllers\DoanhThuNhanVienController;
use App\Http\Controllers\hoadon_controller;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\LoaiHangController;
use App\Http\Controllers\MatHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\ThongKeController;
use App\Http\Controllers\tienlai_ctrl;
use App\Http\Controllers\top5seller_ctrl;
use App\Models\top5seller;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/nhanviens/index', [NhanVienController::class, 'index'])->name('nhanviens.index');
Route::get('/khachhangs/index', [KhachHangController::class, 'index'])->name('khachhangs.index');

Route::get('/nhanviens/ttl', [NhanVienController::class, 'ttl'])->name('nhanviens.ttl');
Route::get('/nhanviens/tt', [NhanVienController::class, 'tt'])->name('nhanviens.tt');



Route::get('/nhanviens/create', [NhanVienController::class, 'create'])->name('nhanviens.create');
Route::post('/nhanviens/store', [NhanVienController::class, 'store'])->name('nhanviens.store');
Route::get('/nhanviens/{id}', [NhanVienController::class, 'show'])->name('nhanviens.show');
Route::get('/nhanviens/{id}/edit', [NhanVienController::class, 'edit'])->name('nhanviens.edit');
Route::put('/nhanviens/{id}', [NhanVienController::class, 'update'])->name('nhanviens.update');
Route::delete('/nhanviens/{id}', [NhanVienController::class, 'destroy'])->name('nhanviens.destroy');

Route::post('/nhanviens', [NhanVienController::class, 'tts'])->name('nhanviens.tts');




Route::get('/khachhangs/create', [KhachHangController::class, 'create'])->name('khachhangs.create');
Route::post('/khachhangs', [KhachHangController::class, 'store'])->name('khachhangs.store');
Route::get('/khachhangs/{id}', [KhachHangController::class, 'show'])->name('khachhangs.show');
Route::get('/khachhangs/{id}/edit', [KhachHangController::class, 'edit'])->name('khachhangs.edit');
Route::put('/khachhangs/{id}', [KhachHangController::class, 'update'])->name('khachhangs.update');
Route::delete('/khachhangs/{id}', [KhachHangController::class, 'destroy'])->name('khachhangs.destroy');

Route::get('/khachhangs', [KhachHangController::class, 'ttd'])->name('khachhangs.ttd');



Route::get('/doanhthukhachhang', [DoanhThuKhachHangController::class, 'index'])->name('doanhthukhachhang.index');
Route::get('/doanhthunhanvien', [DoanhThuNhanVienController::class, 'index'])->name('doanhthunhanvien.index');


Route::get('/dashboardhang', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/loaihang', [LoaiHangController::class, 'index'])->name('nloaihang.index');
Route::get('/loaihang/create', [LoaiHangController::class, 'create'])->name('nloaihang.create');
Route::post('/loaihang/store', [LoaiHangController::class, 'store'])->name('nloaihang.store');
Route::get('/loaihang/{id}/edit', [LoaiHangController::class, 'edit'])->name('nloaihang.edit');
Route::put('/loaihang/{id}', [LoaiHangController::class, 'update'])->name('nloaihang.update');
Route::delete('/loaihang/{id}', [LoaiHangController::class, 'destroy'])->name('nloaihang.destroy');


Route::get('/mathang', [MatHangController::class, 'index'])->name('nmathang.index');
Route::get('/mathang/create', [MathangController::class, 'create'])->name('nmathang.create');
Route::post('/mathang/store', [MathangController::class, 'store'])->name('nmathang.store');
Route::get('/mathang/{id}/edit', [MathangController::class, 'edit'])->name('nmathang.edit');
Route::put('/mathang/{id}', [MathangController::class, 'update'])->name('nmathang.update');
Route::delete('/mathang/{id}', [MathangController::class, 'destroy'])->name('nmathang.destroy');

Route::get('/thongke', [ThongKeController::class, 'index'])->name('thongke.index');
Route::get('/thongke/tieudungkh', [ThongKeController::class, 'tieudungkh'])->name('thongke.khachhangtieudung');
Route::get('/thongke/doanhthumh', [ThongKeController::class, 'doanhthumh'])->name('thongke.doanhthumathang');




Route::get('hoadon/{mahd}/chitiet/create',cthd_controller::class.'@create')->name('cthd.create');
Route::post('/cthd',cthd_controller::class.'@store')->name('cthd.store');
Route::get('/cthd/{mahd}/{mamh}/edit',cthd_controller::class.'@edit')->name('cthd.edit');
Route::post('/cthd/{mahd}/{mamh}',cthd_controller::class.'@update')->name('cthd.update');
Route::delete('/cthd/{mahd}/{mamh}',cthd_controller::class.'@destroy')->name('cthd.destroy');
Route::get('/top5', [top5seller_ctrl::class, 'index'])->name('top5');
Route::get('/lai', [tienlai_ctrl::class, 'index'])->name('lai');
Route::get('/hoadon/index', hoadon_controller::class.'@index')->name('hoadon.index');
Route::get('/hoadon/create', hoadon_controller::class.'@create')->name('hoadon.create');
Route::post('/hoadon', hoadon_controller::class.'@store')->name('hoadon.store');
Route::get('/hoadon/{id}/edit', hoadon_controller::class.'@edit')->name('hoadon.edit');
Route::post('hoadon/{id}', hoadon_controller::class.'@update')->name('hoadon.update');
Route::delete('hoadon/{id}', hoadon_controller::class.'@destroy')->name('hoadon.destroy');
Route::get('hoadon/{id}/chitiet',hoadon_controller::class.'@chitiet')->name('hoadon.chitiet');


Route::get('/hoadons/quydoidiem/{mahd}', [hoadon_controller::class, 'quyDoiDiem'])->name('hoadons.quyDoiDiem');
Route::get('/thongke',function(){
    return view('thongke.index');
})->name('thongke');

