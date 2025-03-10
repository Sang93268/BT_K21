<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UngTuyen extends Model
{
    protected $table = 'ung_tuyens';
    protected $fillable = [
        'id_ung_vien',
        'id_cong_viec',
        'ngay_ung_tuyen',
        'tinh_trang',
    ];
}
