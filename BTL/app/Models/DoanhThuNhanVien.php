<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class DoanhThuNhanVien extends Model
{
    use HasFactory;
    protected $table = 'view_DoanhThuNhanVien';
    protected $fillable=['manv','hoten','sohd','tongdoanhthu'];
}
