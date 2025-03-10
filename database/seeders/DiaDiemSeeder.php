<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaDiemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dia_diems')->delete();
        DB::table('dia_diems')->insert([
            [
                'id' => 1,
                'ten_dia_diem' => 'Hà Nội',
                'slug_dia_diem' => 'ha-noi',
                'tinh_trang' => 1
            ],
            [
                'id' => 2,
                'ten_dia_diem' => 'Hồ Chí Minh',
                'slug_dia_diem' => 'ho-chi-minh',
                'tinh_trang' => 1
            ],
            [
                'id' => 3,
                'ten_dia_diem' => 'Đà Nẵng',
                'slug_dia_diem' => 'da-nang',
                'tinh_trang' => 1
            ],
            [
                'id' => 4,
                'ten_dia_diem' => 'Hải Phòng',
                'slug_dia_diem' => 'hai-phong',
                'tinh_trang' => 1
            ],
            [
                'id' => 5,
                'ten_dia_diem' => 'Cần Thơ',
                'slug_dia_diem' => 'can-tho',
                'tinh_trang' => 1
            ],
            [
                'id' => 6,
                'ten_dia_diem' => 'Bình Dương',
                'slug_dia_diem' => 'binh-duong',
                'tinh_trang' => 1
            ],
            [
                'id' => 7,
                'ten_dia_diem' => 'Đồng Nai',
                'slug_dia_diem' => 'dong-nai',
                'tinh_trang' => 1
            ],
            [
                'id' => 8,
                'ten_dia_diem' => 'Huế',
                'slug_dia_diem' => 'hue',
                'tinh_trang' => 1
            ],
            [
                'id' => 9,
                'ten_dia_diem' => 'Nha Trang',
                'slug_dia_diem' => 'nha-trang',
                'tinh_trang' => 1
            ],
            [
                'id' => 10,
                'ten_dia_diem' => 'Vũng Tàu',
                'slug_dia_diem' => 'vung-tau',
                'tinh_trang' => 1
            ],
        ]);
    }
}
