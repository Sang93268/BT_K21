<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class NhaTuyenDung extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $table = 'nha_tuyen_dungs';
    protected $fillable = [
        'ten_cong_ty',
        'slug_cong_ty',
        'nguoi_dai_dien',
        'email',
        'password',
        'so_dien_thoai',
        'dia_chi',
        'mo_ta_cong_ty',
        'tinh_trang',
        'cong_viec_da_dang',
        'ngay_dang_gan_nhat'
    ];

}
