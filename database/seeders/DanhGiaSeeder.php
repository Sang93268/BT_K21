<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danh_gias')->delete();
        DB::table('danh_gias')->insert([
            [
                'id' => 1,
                'id_ung_vien' => 1,
                'id_nha_tuyen_dung' => 1,
                'noi_dung' => 'Ứng viên có kinh nghiệm tốt, giao tiếp tự tin'
            ],
            [
                'id' => 2,
                'id_ung_vien' => 2,
                'id_nha_tuyen_dung' => 1,
                'noi_dung' => 'Kỹ năng chuyên môn tốt, cần cải thiện kỹ năng mềm'
            ],
            [
                'id' => 3,
                'id_ung_vien' => 3,
                'id_nha_tuyen_dung' => 2,
                'noi_dung' => 'Ứng viên xuất sắc, đáp ứng đầy đủ yêu cầu công việc'
            ],
            [
                'id' => 4,
                'id_ung_vien' => 4,
                'id_nha_tuyen_dung' => 2,
                'noi_dung' => 'Cần thêm kinh nghiệm thực tế'
            ],
            [
                'id' => 5,
                'id_ung_vien' => 5,
                'id_nha_tuyen_dung' => 3,
                'noi_dung' => 'Thái độ làm việc tốt, tinh thần học hỏi cao'
            ],
            [
                'id' => 6,
                'id_ung_vien' => 6,
                'id_nha_tuyen_dung' => 3,
                'noi_dung' => 'Kinh nghiệm phong phú, kỹ năng chuyên môn cao'
            ],
            [
                'id' => 7,
                'id_ung_vien' => 7,
                'id_nha_tuyen_dung' => 4,
                'noi_dung' => 'Khả năng làm việc nhóm tốt'
            ],
            [
                'id' => 8,
                'id_ung_vien' => 8,
                'id_nha_tuyen_dung' => 4,
                'noi_dung' => 'Cần cải thiện kỹ năng giải quyết vấn đề'
            ],
            [
                'id' => 9,
                'id_ung_vien' => 9,
                'id_nha_tuyen_dung' => 5,
                'noi_dung' => 'Đáp ứng tốt yêu cầu công việc, giao tiếp tốt'
            ],
            [
                'id' => 10,
                'id_ung_vien' => 10,
                'id_nha_tuyen_dung' => 5,
                'noi_dung' => 'Tiềm năng phát triển cao, cần thêm kinh nghiệm'
            ],
        ]);
    }
}
