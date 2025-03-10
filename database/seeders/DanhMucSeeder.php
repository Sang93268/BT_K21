<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danh_mucs')->delete();
        DB::table('danh_mucs')->insert([
            [
                'id' => 1,
                'ten_danh_muc' => 'Lập trình viên Frontend',
                'slug_danh_muc' => 'lap-trinh-vien-frontend',
                'tinh_trang' => 1
            ],
            [
                'id' => 2,
                'ten_danh_muc' => 'Lập trình viên Backend',
                'slug_danh_muc' => 'lap-trinh-vien-backend',
                'tinh_trang' => 1
            ],
            [
                'id' => 3,
                'ten_danh_muc' => 'Lập trình viên Mobile',
                'slug_danh_muc' => 'lap-trinh-vien-mobile',
                'tinh_trang' => 1
            ],
            [
                'id' => 4,
                'ten_danh_muc' => 'Kỹ sư DevOps',
                'slug_danh_muc' => 'ky-su-devops',
                'tinh_trang' => 1
            ],
            [
                'id' => 5,
                'ten_danh_muc' => 'Kỹ sư AI/ML',
                'slug_danh_muc' => 'ky-su-ai-ml',
                'tinh_trang' => 1
            ],
            [
                'id' => 6,
                'ten_danh_muc' => 'Kỹ sư Data',
                'slug_danh_muc' => 'ky-su-data',
                'tinh_trang' => 1
            ],
            [
                'id' => 7,
                'ten_danh_muc' => 'Quản lý dự án IT',
                'slug_danh_muc' => 'quan-ly-du-an-it',
                'tinh_trang' => 1
            ],
            [
                'id' => 8,
                'ten_danh_muc' => 'Kiểm thử phần mềm',
                'slug_danh_muc' => 'kiem-thu-phan-mem',
                'tinh_trang' => 1
            ],
            [
                'id' => 9,
                'ten_danh_muc' => 'Thiết kế UI/UX',
                'slug_danh_muc' => 'thiet-ke-ui-ux',
                'tinh_trang' => 1
            ],
            [
                'id' => 10,
                'ten_danh_muc' => 'Bảo mật thông tin',
                'slug_danh_muc' => 'bao-mat-thong-tin',
                'tinh_trang' => 1
            ],
        ]);
    }
}
