<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ThanhToanLuong extends Model
{
    use HasFactory;
    protected $table = 'thanhtoanluong';
    protected $fillable = ['matt', 'manv', 'ngaythanhtoan'];

    public function NhanVien()
    {
        return $this->belongsTo(NhanVien::class);
    }
}
