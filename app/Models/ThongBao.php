<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThongBao extends Model
{
    protected $table = 'thong_baos';
    protected $fillable = [
        'id_nguoi_gui',
        'id_nguoi_nhan',
        'tieu_de',
        'noi_dung'
    ];
}
