<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CongViec extends Model
{
    protected $table = 'cong_viecs';
    protected $fillable = [
        'id_nha_tuyen_dung',
        'id_danh_muc',
        'id_dia_diem',
        'tieu_de',
        'slug_tieu_de',
        'mo_ta',
        'yeu_cau',
        'luong_toi_thieu',
        'luong_toi_da',
        'ngay_dang',
        'han_nop',
        'tinh_trang',
        'ten_cong_ty',
    ];
}
