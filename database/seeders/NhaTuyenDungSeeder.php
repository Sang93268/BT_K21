<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhaTuyenDungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nha_tuyen_dungs')->delete();
        DB::table('nha_tuyen_dungs')->insert([
            [
                'id' => 1,
                'ten_cong_ty' => 'TechVision JSC',
                'slug_cong_ty' => 'tech-vision-jsc',
                'nguoi_dai_dien' => 'Nguyễn Văn A',
                'email' => 'hr@techvision.com',
                'password' => '123456',
                'so_dien_thoai' => '0987654321',
                'dia_chi' => '123 Đường Nguyễn Huệ, Quận 1, TP.HCM',
                'mo_ta_cong_ty' => 'Công ty chuyên về phát triển phần mềm, ứng dụng web và mobile hiện đại',
                'tinh_trang' => 1,
                'cong_viec_da_dang' => 0,
                'ngay_dang_gan_nhat' => '2024-03-21'
            ],
            [
                'id' => 2,
                'ten_cong_ty' => 'CodeMaster Vietnam',
                'slug_cong_ty' => 'codemaster-vietnam',
                'nguoi_dai_dien' => 'Trần Thị B',
                'email' => 'hr@codemaster.vn',
                'password' => '123456',
                'so_dien_thoai' => '0987654322',
                'dia_chi' => '456 Đường Lê Lợi, Quận 1, TP.HCM',
                'mo_ta_cong_ty' => 'Công ty outsourcing phần mềm hàng đầu Việt Nam, chuyên cung cấp dịch vụ cho thị trường Nhật Bản',
                'tinh_trang' => 1,
                'cong_viec_da_dang' => 0,
                'ngay_dang_gan_nhat' => '2024-03-20'
            ],
            [
                'id' => 3,
                'ten_cong_ty' => 'DataTech Solutions',
                'slug_cong_ty' => 'datatech-solutions',
                'nguoi_dai_dien' => 'Phạm Văn C',
                'email' => 'hr@datatech.vn',
                'password' => '123456',
                'so_dien_thoai' => '0987654323',
                'dia_chi' => '789 Đường Cách Mạng Tháng 8, Quận 3, TP.HCM',
                'mo_ta_cong_ty' => 'Công ty chuyên về Big Data, AI và Machine Learning',
                'tinh_trang' => 1,
                'cong_viec_da_dang' => 0,
                'ngay_dang_gan_nhat' => '2024-03-23'
            ],
            [
                'id' => 4,
                'ten_cong_ty' => 'CloudNative Vietnam',
                'slug_cong_ty' => 'cloudnative-vietnam',
                'nguoi_dai_dien' => 'Lê Thị D',
                'email' => 'hr@cloudnative.vn',
                'password' => '123456',
                'so_dien_thoai' => '0987654324',
                'dia_chi' => '101 Đường Nguyễn Văn Linh, Quận 7, TP.HCM',
                'mo_ta_cong_ty' => 'Công ty chuyên về Cloud Computing, DevOps và Microservices',
                'tinh_trang' => 1,
                'cong_viec_da_dang' => 0,
                'ngay_dang_gan_nhat' => '2024-03-24'
            ],
            [
                'id' => 5,
                'ten_cong_ty' => 'MobileApp Studio',
                'slug_cong_ty' => 'mobileapp-studio',
                'nguoi_dai_dien' => 'Hoàng Văn E',
                'email' => 'hr@mobileapp.vn',
                'password' => '123456',
                'so_dien_thoai' => '0987654325',
                'dia_chi' => '202 Đường Điện Biên Phủ, Quận Bình Thạnh, TP.HCM',
                'mo_ta_cong_ty' => 'Công ty chuyên phát triển ứng dụng di động cho iOS và Android',
                'tinh_trang' => 1,
                'cong_viec_da_dang' => 0,
                'ngay_dang_gan_nhat' => '2024-03-22'
            ],
            [
                'id' => 6,
                'ten_cong_ty' => 'SecureNet Vietnam',
                'slug_cong_ty' => 'securenet-vietnam',
                'nguoi_dai_dien' => 'Ngô Thị F',
                'email' => 'hr@securenet.vn',
                'password' => '123456',
                'so_dien_thoai' => '0987654326',
                'dia_chi' => '303 Đường Võ Văn Tần, Quận 3, TP.HCM',
                'mo_ta_cong_ty' => 'Công ty chuyên về bảo mật thông tin và an ninh mạng',
                'tinh_trang' => 1,
                'cong_viec_da_dang' => 0,
                'ngay_dang_gan_nhat' => '2024-03-19'
            ],
            [
                'id' => 7,
                'ten_cong_ty' => 'FrontendMaster',
                'slug_cong_ty' => 'frontendmaster',
                'nguoi_dai_dien' => 'Đỗ Văn G',
                'email' => 'hr@frontendmaster.vn',
                'password' => '123456',
                'so_dien_thoai' => '0987654327',
                'dia_chi' => '404 Đường Nguyễn Thị Minh Khai, Quận 1, TP.HCM',
                'mo_ta_cong_ty' => 'Công ty chuyên về phát triển giao diện người dùng và trải nghiệm người dùng',
                'tinh_trang' => 1,
                'cong_viec_da_dang' => 0,
                'ngay_dang_gan_nhat' => '2024-03-18'
            ],
            [
                'id' => 8,
                'ten_cong_ty' => 'BackendPro',
                'slug_cong_ty' => 'backendpro',
                'nguoi_dai_dien' => 'Lý Thị H',
                'email' => 'hr@backendpro.vn',
                'password' => '123456',
                'so_dien_thoai' => '0987654328',
                'dia_chi' => '505 Đường Lý Tự Trọng, Quận 1, TP.HCM',
                'mo_ta_cong_ty' => 'Công ty chuyên về phát triển backend và API',
                'tinh_trang' => 1,
                'cong_viec_da_dang' => 0,
                'ngay_dang_gan_nhat' => '2024-03-11'
            ],
            [
                'id' => 9,
                'ten_cong_ty' => 'AILab Vietnam',
                'slug_cong_ty' => 'ailab-vietnam',
                'nguoi_dai_dien' => 'Trịnh Văn I',
                'email' => 'hr@ailab.vn',
                'password' => '123456',
                'so_dien_thoai' => '0987654329',
                'dia_chi' => '606 Đường Trần Hưng Đạo, Quận 5, TP.HCM',
                'mo_ta_cong_ty' => 'Công ty nghiên cứu và phát triển trí tuệ nhân tạo',
                'tinh_trang' => 1,
                'cong_viec_da_dang' => 0,
                'ngay_dang_gan_nhat' => '2024-03-14'
            ],
            [
                'id' => 10,
                'ten_cong_ty' => 'QAMaster',
                'slug_cong_ty' => 'qamaster',
                'nguoi_dai_dien' => 'Mai Thị K',
                'email' => 'hr@qamaster.vn',
                'password' => '123456',
                'so_dien_thoai' => '0987654330',
                'dia_chi' => '707 Đường Nguyễn Trãi, Quận 5, TP.HCM',
                'mo_ta_cong_ty' => 'Công ty chuyên về kiểm thử phần mềm và đảm bảo chất lượng',
                'tinh_trang' => 1,
                'cong_viec_da_dang' => 0,
                'ngay_dang_gan_nhat' => '2024-03-17'
            ],
        ]);
    }
}
