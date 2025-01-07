<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class TheTichDiem extends Model
{
    use HasFactory;
    protected $table = 'thetichdiem';
    protected $fillable = ['mathe', 'makh', 'diemtichluy'];

    public function KhachHang()
    {
        return $this->belongsTo(KhachHang::class);
    }
}
