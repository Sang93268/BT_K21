<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    protected $table = 'danh_gias';
    protected $fillable = [
        'id_ung_vien',
        'id_nha_tuyen_dung',
        'noi_dung'
    ];
}
