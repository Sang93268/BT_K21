<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UngVien extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $table = 'ung_viens';
    protected $fillable = [
        'ho_va_ten',
        'email',
        'password',
        'so_dien_thoai',
        'dia_chi',
        'ngay_sinh',
        'gioi_tinh',
        'kinh_nghiem',
        'ky_nang',
        'tinh_trang',
        'so_luong_ung_tuyen',
    ];
}
