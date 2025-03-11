<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThongBaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('thong_baos')->delete();
        DB::table('thong_baos')->insert([
            [
                'id' => 1,
                'id_nguoi_gui' => 1,
                'id_nguoi_nhan' => 1,
                'tieu_de' => 'Thông báo phỏng vấn',
                'noi_dung' => 'Mời bạn tham gia phỏng vấn vào ngày 20/03/2024'
            ],
            [
                'id' => 2,
                'id_nguoi_gui' => 2,
                'id_nguoi_nhan' => 1,
                'tieu_de' => 'Kết quả phỏng vấn',
                'noi_dung' => 'Chúc mừng bạn đã vượt qua vòng phỏng vấn'
            ],
            [
                'id' => 3,
                'id_nguoi_gui' => 1,
                'id_nguoi_nhan' => 2,
                'tieu_de' => 'Lịch phỏng vấn vòng 2',
                'noi_dung' => 'Thông báo lịch phỏng vấn vòng 2 vào ngày 25/03/2024'
            ],
            [
                'id' => 4,
                'id_nguoi_gui' => 3,
                'id_nguoi_nhan' => 2,
                'tieu_de' => 'Cập nhật hồ sơ',
                'noi_dung' => 'Vui lòng cập nhật thêm thông tin trong hồ sơ của bạn'
            ],
            [
                'id' => 5,
                'id_nguoi_gui' => 2,
                'id_nguoi_nhan' => 3,
                'tieu_de' => 'Thư mời nhận việc',
                'noi_dung' => 'Công ty gửi thư mời nhận việc chính thức'
            ],
            [
                'id' => 6,
                'id_nguoi_gui' => 4,
                'id_nguoi_nhan' => 3,
                'tieu_de' => 'Xác nhận lịch hẹn',
                'noi_dung' => 'Xác nhận lịch hẹn ký hợp đồng ngày 30/03/2024'
            ],
            [
                'id' => 7,
                'id_nguoi_gui' => 3,
                'id_nguoi_nhan' => 4,
                'tieu_de' => 'Yêu cầu bổ sung',
                'noi_dung' => 'Vui lòng bổ sung thêm bằng cấp và chứng chỉ'
            ],
            [
                'id' => 8,
                'id_nguoi_gui' => 5,
                'id_nguoi_nhan' => 4,
                'tieu_de' => 'Thông báo kết quả',
                'noi_dung' => 'Thông báo kết quả cuối cùng của quá trình ứng tuyển'
            ],
            [
                'id' => 9,
                'id_nguoi_gui' => 4,
                'id_nguoi_nhan' => 5,
                'tieu_de' => 'Hẹn phỏng vấn online',
                'noi_dung' => 'Mời bạn tham gia phỏng vấn online qua Zoom'
            ],
            [
                'id' => 10,
                'id_nguoi_gui' => 5,
                'id_nguoi_nhan' => 5,
                'tieu_de' => 'Thông báo đánh giá',
                'noi_dung' => 'Kết quả đánh giá sau thời gian thử việc'
            ],
        ]);
    }
}
