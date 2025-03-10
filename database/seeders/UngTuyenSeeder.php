<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UngTuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ung_tuyens')->delete();
        DB::table('ung_tuyens')->insert([
            // Ứng viên Frontend ứng tuyển vào các vị trí Frontend
            [
                'id' => 1,
                'id_ung_vien' => 1, // Phạm Văn Frontend
                'id_cong_viec' => 1, // Frontend Developer (ReactJS)
                'ngay_ung_tuyen' => '2024-03-15',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 2,
                'id_ung_vien' => 1, // Phạm Văn Frontend
                'id_cong_viec' => 12, // Frontend Developer (VueJS)
                'ngay_ung_tuyen' => '2024-03-22',
                'tinh_trang' => 2  // Đã được chọn
            ],

            // Ứng viên Backend ứng tuyển vào các vị trí Backend
            [
                'id' => 3,
                'id_ung_vien' => 2, // Nguyễn Thị Backend
                'id_cong_viec' => 2, // Backend Developer (NodeJS)
                'ngay_ung_tuyen' => '2024-03-16',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 4,
                'id_ung_vien' => 2, // Nguyễn Thị Backend
                'id_cong_viec' => 11, // Backend Developer (PHP/Laravel)
                'ngay_ung_tuyen' => '2024-03-21',
                'tinh_trang' => 2  // Đã được chọn
            ],

            // Ứng viên Mobile ứng tuyển vào các vị trí Mobile
            [
                'id' => 5,
                'id_ung_vien' => 3, // Trần Văn Mobile
                'id_cong_viec' => 3, // Mobile Developer (React Native)
                'ngay_ung_tuyen' => '2024-03-17',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 6,
                'id_ung_vien' => 3, // Trần Văn Mobile
                'id_cong_viec' => 13, // Mobile Developer (Flutter)
                'ngay_ung_tuyen' => '2024-03-23',
                'tinh_trang' => 2  // Đã được chọn
            ],

            // Ứng viên DevOps ứng tuyển vào các vị trí DevOps
            [
                'id' => 7,
                'id_ung_vien' => 4, // Lê Thị DevOps
                'id_cong_viec' => 4, // DevOps Engineer
                'ngay_ung_tuyen' => '2024-03-18',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 8,
                'id_ung_vien' => 4, // Lê Thị DevOps
                'id_cong_viec' => 15, // Site Reliability Engineer (SRE)
                'ngay_ung_tuyen' => '2024-03-25',
                'tinh_trang' => 2  // Đã được chọn
            ],

            // Ứng viên AI ứng tuyển vào các vị trí AI/ML
            [
                'id' => 9,
                'id_ung_vien' => 5, // Hoàng Văn AI
                'id_cong_viec' => 5, // AI/ML Engineer
                'ngay_ung_tuyen' => '2024-03-19',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 10,
                'id_ung_vien' => 5, // Hoàng Văn AI
                'id_cong_viec' => 14, // Machine Learning Engineer
                'ngay_ung_tuyen' => '2024-03-24',
                'tinh_trang' => 2  // Đã được chọn
            ],

            // Ứng viên Data ứng tuyển vào vị trí Data Engineer
            [
                'id' => 11,
                'id_ung_vien' => 6, // Đỗ Thị Data
                'id_cong_viec' => 6, // Data Engineer
                'ngay_ung_tuyen' => '2024-03-20',
                'tinh_trang' => 2  // Đã được chọn
            ],

            // Ứng viên PM ứng tuyển vào vị trí IT Project Manager
            [
                'id' => 12,
                'id_ung_vien' => 7, // Ngô Văn PM
                'id_cong_viec' => 7, // IT Project Manager
                'ngay_ung_tuyen' => '2024-03-21',
                'tinh_trang' => 2  // Đã được chọn
            ],

            // Ứng viên QA ứng tuyển vào vị trí QA Engineer
            [
                'id' => 13,
                'id_ung_vien' => 8, // Trịnh Thị QA
                'id_cong_viec' => 8, // QA Engineer
                'ngay_ung_tuyen' => '2024-03-22',
                'tinh_trang' => 2  // Đã được chọn
            ],

            // Ứng viên UI/UX ứng tuyển vào vị trí UI/UX Designer
            [
                'id' => 14,
                'id_ung_vien' => 9, // Lý Văn UI/UX
                'id_cong_viec' => 9, // UI/UX Designer
                'ngay_ung_tuyen' => '2024-03-23',
                'tinh_trang' => 2  // Đã được chọn
            ],

            // Ứng viên Security ứng tuyển vào vị trí Security Engineer
            [
                'id' => 15,
                'id_ung_vien' => 10, // Mai Văn Security
                'id_cong_viec' => 10, // Security Engineer
                'ngay_ung_tuyen' => '2024-03-24',
                'tinh_trang' => 2  // Đã được chọn
            ],

            // Một số ứng viên ứng tuyển vào các vị trí khác (cross-application)
            [
                'id' => 16,
                'id_ung_vien' => 1, // Phạm Văn Frontend
                'id_cong_viec' => 9, // UI/UX Designer (vì Frontend dev thường có kỹ năng UI/UX)
                'ngay_ung_tuyen' => '2024-03-26',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 17,
                'id_ung_vien' => 2, // Nguyễn Thị Backend
                'id_cong_viec' => 6, // Data Engineer (vì Backend dev thường có kỹ năng làm việc với dữ liệu)
                'ngay_ung_tuyen' => '2024-03-27',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 18,
                'id_ung_vien' => 4, // Lê Thị DevOps
                'id_cong_viec' => 10, // Security Engineer (vì DevOps thường có kiến thức về bảo mật)
                'ngay_ung_tuyen' => '2024-03-28',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 19,
                'id_ung_vien' => 5, // Hoàng Văn AI
                'id_cong_viec' => 6, // Data Engineer (vì AI Engineer thường có kỹ năng xử lý dữ liệu)
                'ngay_ung_tuyen' => '2024-03-29',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 20,
                'id_ung_vien' => 7, // Ngô Văn PM
                'id_cong_viec' => 8, // QA Engineer (vì PM thường có kiến thức về QA)
                'ngay_ung_tuyen' => '2024-03-30',
                'tinh_trang' => 2  // Đã được chọn
            ],

            // Thêm ứng tuyển với trạng thái "Đang xem xét"
            [
                'id' => 21,
                'id_ung_vien' => 1, // Phạm Văn Frontend
                'id_cong_viec' => 3, // Mobile Developer (React Native)
                'ngay_ung_tuyen' => '2024-03-31',
                'tinh_trang' => 1  // Đang xem xét
            ],
            [
                'id' => 22,
                'id_ung_vien' => 2, // Nguyễn Thị Backend
                'id_cong_viec' => 4, // DevOps Engineer
                'ngay_ung_tuyen' => '2024-04-01',
                'tinh_trang' => 1  // Đang xem xét
            ],
            [
                'id' => 23,
                'id_ung_vien' => 3, // Trần Văn Mobile
                'id_cong_viec' => 5, // AI/ML Engineer
                'ngay_ung_tuyen' => '2024-04-02',
                'tinh_trang' => 1  // Đang xem xét
            ],
            [
                'id' => 24,
                'id_ung_vien' => 4, // Lê Thị DevOps
                'id_cong_viec' => 6, // Data Engineer
                'ngay_ung_tuyen' => '2024-04-03',
                'tinh_trang' => 1  // Đang xem xét
            ],
            [
                'id' => 25,
                'id_ung_vien' => 5, // Hoàng Văn AI
                'id_cong_viec' => 7, // IT Project Manager
                'ngay_ung_tuyen' => '2024-04-04',
                'tinh_trang' => 1  // Đang xem xét
            ],

            // Thêm ứng tuyển với trạng thái "Đã bị từ chối"
            [
                'id' => 26,
                'id_ung_vien' => 6, // Đỗ Thị Data
                'id_cong_viec' => 8, // QA Engineer
                'ngay_ung_tuyen' => '2024-04-05',
                'tinh_trang' => 0  // Đã bị từ chối
            ],
            [
                'id' => 27,
                'id_ung_vien' => 7, // Ngô Văn PM
                'id_cong_viec' => 9, // UI/UX Designer
                'ngay_ung_tuyen' => '2024-04-06',
                'tinh_trang' => 0  // Đã bị từ chối
            ],
            [
                'id' => 28,
                'id_ung_vien' => 8, // Trịnh Thị QA
                'id_cong_viec' => 10, // Security Engineer
                'ngay_ung_tuyen' => '2024-04-07',
                'tinh_trang' => 0  // Đã bị từ chối
            ],
            [
                'id' => 29,
                'id_ung_vien' => 9, // Lý Văn UI/UX
                'id_cong_viec' => 2, // Backend Developer (NodeJS)
                'ngay_ung_tuyen' => '2024-04-08',
                'tinh_trang' => 0  // Đã bị từ chối
            ],
            [
                'id' => 30,
                'id_ung_vien' => 10, // Mai Văn Security
                'id_cong_viec' => 3, // Mobile Developer (React Native)
                'ngay_ung_tuyen' => '2024-04-09',
                'tinh_trang' => 0  // Đã bị từ chối
            ],

            [
                'id' => 31,
                'id_ung_vien' => 1, // Phạm Văn Frontend
                'id_cong_viec' => 4, // DevOps Engineer
                'ngay_ung_tuyen' => '2024-04-10',
                'tinh_trang' => 1  // Đang xem xét
            ],
            [
                'id' => 32,
                'id_ung_vien' => 2, // Nguyễn Thị Backend
                'id_cong_viec' => 5, // AI/ML Engineer
                'ngay_ung_tuyen' => '2024-04-11',
                'tinh_trang' => 1  // Đang xem xét
            ],
            [
                'id' => 33,
                'id_ung_vien' => 3, // Trần Văn Mobile
                'id_cong_viec' => 6, // Data Engineer
                'ngay_ung_tuyen' => '2024-04-12',
                'tinh_trang' => 1  // Đang xem xét
            ],
            [
                'id' => 34,
                'id_ung_vien' => 4, // Lê Thị DevOps
                'id_cong_viec' => 7, // IT Project Manager
                'ngay_ung_tuyen' => '2024-04-13',
                'tinh_trang' => 1  // Đang xem xét
            ],
            [
                'id' => 35,
                'id_ung_vien' => 8, // Trịnh Thị QA
                'id_cong_viec' => 11, // Backend Developer (PHP/Laravel)
                'ngay_ung_tuyen' => '2024-04-14',
                'tinh_trang' => 1  // Đang xem xét
            ],

            [
                'id' => 36,
                'id_ung_vien' => 9, // Lý Văn UI/UX
                'id_cong_viec' => 12, // Frontend Developer (VueJS)
                'ngay_ung_tuyen' => '2024-04-15',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 37,
                'id_ung_vien' => 10, // Mai Văn Security
                'id_cong_viec' => 13, // Mobile Developer (Flutter)
                'ngay_ung_tuyen' => '2024-04-16',
                'tinh_trang' => 0  // Đã bị từ chối
            ],
            [
                'id' => 38,
                'id_ung_vien' => 1, // Phạm Văn Frontend
                'id_cong_viec' => 14, // Machine Learning Engineer
                'ngay_ung_tuyen' => '2024-04-17',
                'tinh_trang' => 0  // Đã bị từ chối
            ],
            [
                'id' => 39,
                'id_ung_vien' => 2, // Nguyễn Thị Backend
                'id_cong_viec' => 15, // Site Reliability Engineer (SRE)
                'ngay_ung_tuyen' => '2024-04-18',
                'tinh_trang' => 1  // Đang xem xét
            ],

            [
                'id' => 40,
                'id_ung_vien' => 6, // Đỗ Thị Data
                'id_cong_viec' => 1, // Frontend Developer (ReactJS)
                'ngay_ung_tuyen' => '2024-04-19',
                'tinh_trang' => 0  // Đã bị từ chối
            ],
            [
                'id' => 41,
                'id_ung_vien' => 7, // Ngô Văn PM
                'id_cong_viec' => 1, // Frontend Developer (ReactJS)
                'ngay_ung_tuyen' => '2024-04-20',
                'tinh_trang' => 0  // Đã bị từ chối
            ],
            [
                'id' => 42,
                'id_ung_vien' => 10, // Mai Văn Security
                'id_cong_viec' => 1, // Frontend Developer (ReactJS)
                'ngay_ung_tuyen' => '2024-04-21',
                'tinh_trang' => 1  // Đang xem xét
            ],

            [
                'id' => 43,
                'id_ung_vien' => 1, // Phạm Văn Frontend
                'id_cong_viec' => 5, // AI/ML Engineer (của AILab Vietnam)
                'ngay_ung_tuyen' => '2024-04-22',
                'tinh_trang' => 0  // Đã bị từ chối
            ],
            [
                'id' => 44,
                'id_ung_vien' => 2, // Nguyễn Thị Backend
                'id_cong_viec' => 9, // UI/UX Designer (của FrontendMaster)
                'ngay_ung_tuyen' => '2024-04-23',
                'tinh_trang' => 0  // Đã bị từ chối
            ],
            [
                'id' => 45,
                'id_ung_vien' => 3, // Trần Văn Mobile
                'id_cong_viec' => 10, // Security Engineer (của SecureNet Vietnam)
                'ngay_ung_tuyen' => '2024-04-24',
                'tinh_trang' => 0  // Đã bị từ chối
            ],

            [
                'id' => 46,
                'id_ung_vien' => 4, // Lê Thị DevOps
                'id_cong_viec' => 1, // Frontend Developer (ReactJS)
                'ngay_ung_tuyen' => '2024-03-05',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 47,
                'id_ung_vien' => 5, // Hoàng Văn AI
                'id_cong_viec' => 2, // Backend Developer (NodeJS)
                'ngay_ung_tuyen' => '2024-03-06',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 48,
                'id_ung_vien' => 6, // Đỗ Thị Data
                'id_cong_viec' => 3, // Mobile Developer (React Native)
                'ngay_ung_tuyen' => '2024-03-07',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 49,
                'id_ung_vien' => 7, // Ngô Văn PM
                'id_cong_viec' => 4, // DevOps Engineer
                'ngay_ung_tuyen' => '2024-03-08',
                'tinh_trang' => 2  // Đã được chọn
            ],
            [
                'id' => 50,
                'id_ung_vien' => 8, // Trịnh Thị QA
                'id_cong_viec' => 5, // AI/ML Engineer
                'ngay_ung_tuyen' => '2024-03-09',
                'tinh_trang' => 2  // Đã được chọn
            ],
        ]);
    }
}
