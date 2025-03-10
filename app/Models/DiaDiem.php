<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{
    protected $table = 'dia_diems';
    protected $fillable = [
        'ten_dia_diem',
        'slug_dia_diem',
        'tinh_trang',
    ];
}
