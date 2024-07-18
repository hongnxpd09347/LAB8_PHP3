<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dienthoai extends Model
{
    use HasFactory;

    protected $table = 'dienthoai'; 

    protected $fillable = [
        'tenDT', 'moTa', 'ngayCapNhat', 'gia', 'giaKM', 'urlHinh',
        'soLuongTonkho', 'hot', 'anHien', 'baiViet', 'ghiChu', 'idLoai',
    ];
}
