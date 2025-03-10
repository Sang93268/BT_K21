<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nhan_viens')->delete();
        DB::table('nhan_viens')->insert([
            [
                'id' => 1,
                'ho_va_ten' => 'Nguyễn Văn A',
                'email' => 'nguyenvana@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0123456789',
                'tinh_trang' => 1
            ],
            [
                'id' => 2,
                'ho_va_ten' => 'Trần Thị B',
                'email' => 'tranthib@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0123456788',
                'tinh_trang' => 1
            ],
            [
                'id' => 3,
                'ho_va_ten' => 'Lê Văn C',
                'email' => 'levanc@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0123456787',
                'tinh_trang' => 1
            ],
        ]);
    }
}
