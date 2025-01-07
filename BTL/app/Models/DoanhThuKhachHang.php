<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class DoanhThuKhachHang extends Model
{
    use HasFactory;
    protected $table = 'view_DoanhThuKhachHang';
    protected $fillable=['makh','hoten','sohd','tongdoanhthu'];
}
