<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UngVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ung_viens')->delete();
        DB::table('ung_viens')->insert([
            [
                'id' => 1,
                'ho_va_ten' => 'Phạm Văn D',
                'email' => 'phamvand@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0987654322',
                'dia_chi' => '456 Đường Lê Lợi, Quận 1, TP.HCM',
                'ngay_sinh' => '1995-05-15',
                'gioi_tinh' => 0,
                'kinh_nghiem' => '3 năm',
                'ky_nang' => 'HTML, CSS, JavaScript, ReactJS, VueJS, Angular',
                'tinh_trang' => 1,
                'so_luong_ung_tuyen' => 0
            ],
            [
                'id' => 2,
                'ho_va_ten' => 'Nguyễn Thị B',
                'email' => 'nguyenthib@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0987654323',
                'dia_chi' => '789 Đường Nguyễn Huệ, Quận 1, Hà Nội',
                'ngay_sinh' => '1990-10-20',
                'gioi_tinh' => 1,
                'kinh_nghiem' => '5 năm',
                'ky_nang' => 'PHP, Laravel, NodeJS, Express, Java, Spring Boot',
                'tinh_trang' => 1,
                'so_luong_ung_tuyen' => 0
            ],
            [
                'id' => 3,
                'ho_va_ten' => 'Trần Văn C',
                'email' => 'tranc@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0987654324',
                'dia_chi' => '101 Đường Lê Duẩn, Quận 1, Đà Nẵng',
                'ngay_sinh' => '1992-12-05',
                'gioi_tinh' => 0,
                'kinh_nghiem' => '4 năm',
                'ky_nang' => 'React Native, Flutter, Android (Java/Kotlin), iOS (Swift)',
                'tinh_trang' => 1,
                'so_luong_ung_tuyen' => 0
            ],
            [
                'id' => 4,
                'ho_va_ten' => 'Lê Thị E',
                'email' => 'lethie@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0987654325',
                'dia_chi' => '202 Đường Trần Phú, Quận Hải Châu, Đà Nẵng',
                'ngay_sinh' => '1988-08-18',
                'gioi_tinh' => 1,
                'kinh_nghiem' => '7 năm',
                'ky_nang' => 'Docker, Kubernetes, Jenkins, AWS, Azure, CI/CD',
                'tinh_trang' => 1,
                'so_luong_ung_tuyen' => 0
            ],
            [
                'id' => 5,
                'ho_va_ten' => 'Hoàng Văn F',
                'email' => 'hoangvanf@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0987654326',
                'dia_chi' => '303 Đường Lê Lai, Quận 1, TP.HCM',
                'ngay_sinh' => '1993-04-25',
                'gioi_tinh' => 0,
                'kinh_nghiem' => '4 năm',
                'ky_nang' => 'Python, TensorFlow, PyTorch, Machine Learning, Deep Learning',
                'tinh_trang' => 1,
                'so_luong_ung_tuyen' => 0
            ],
            [
                'id' => 6,
                'ho_va_ten' => 'Đỗ Thị G',
                'email' => 'dothig@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0987654327',
                'dia_chi' => '404 Đường Nguyễn Văn Linh, Quận 7, TP.HCM',
                'ngay_sinh' => '1991-07-12',
                'gioi_tinh' => 1,
                'kinh_nghiem' => '6 năm',
                'ky_nang' => 'SQL, NoSQL, Hadoop, Spark, Data Warehouse, ETL',
                'tinh_trang' => 1,
                'so_luong_ung_tuyen' => 0
            ],
            [
                'id' => 7,
                'ho_va_ten' => 'Ngô Văn H',
                'email' => 'ngoh@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0987654328',
                'dia_chi' => '505 Đường Điện Biên Phủ, Quận Bình Thạnh, TP.HCM',
                'ngay_sinh' => '1985-02-28',
                'gioi_tinh' => 0,
                'kinh_nghiem' => '10 năm',
                'ky_nang' => 'Agile, Scrum, Jira, Confluence, Project Management',
                'tinh_trang' => 1,
                'so_luong_ung_tuyen' => 0
            ],
            [
                'id' => 8,
                'ho_va_ten' => 'Trịnh Thị I',
                'email' => 'trinhith@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0987654329',
                'dia_chi' => '606 Đường Cách Mạng Tháng 8, Quận 3, TP.HCM',
                'ngay_sinh' => '1989-11-30',
                'gioi_tinh' => 1,
                'kinh_nghiem' => '8 năm',
                'ky_nang' => 'Manual Testing, Automation Testing, Selenium, Cypress, JUnit',
                'tinh_trang' => 1,
                'so_luong_ung_tuyen' => 0
            ],
            [
                'id' => 9,
                'ho_va_ten' => 'Lý Văn J',
                'email' => 'lyvanj@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0987654330',
                'dia_chi' => '707 Đường Nguyễn Thị Minh Khai, Quận 1, TP.HCM',
                'ngay_sinh' => '1994-09-10',
                'gioi_tinh' => 0,
                'kinh_nghiem' => '5 năm',
                'ky_nang' => 'Figma, Adobe XD, Sketch, Photoshop, Illustrator, UI/UX Design',
                'tinh_trang' => 1,
                'so_luong_ung_tuyen' => 0
            ],
            [
                'id' => 10,
                'ho_va_ten' => 'Mai Văn K',
                'email' => 'maivank@gmail.com',
                'password' => '123456',
                'so_dien_thoai' => '0987654331',
                'dia_chi' => '808 Đường Lý Tự Trọng, Quận 1, TP.HCM',
                'ngay_sinh' => '1987-06-05',
                'gioi_tinh' => 0,
                'kinh_nghiem' => '9 năm',
                'ky_nang' => 'Network Security, Penetration Testing, Ethical Hacking, OWASP',
                'tinh_trang' => 1,
                'so_luong_ung_tuyen' => 0
            ],
        ]);
    }
}
