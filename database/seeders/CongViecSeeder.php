<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CongViecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cong_viecs')->delete();
        DB::table('cong_viecs')->insert([
            [
                'id' => 1,
                'id_nha_tuyen_dung' => 7, // FrontendMaster
                'id_danh_muc' => 1, // Lập trình viên Frontend
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng Frontend Developer (ReactJS)',
                'slug_tieu_de' => 'tuyen-dung-frontend-developer-reactjs',
                'mo_ta' => 'FrontendMaster đang tìm kiếm Frontend Developer có kinh nghiệm với ReactJS để tham gia vào các dự án phát triển web application hiện đại. Bạn sẽ làm việc trong môi trường năng động, được tiếp xúc với các công nghệ mới nhất và có cơ hội phát triển sự nghiệp.',
                'yeu_cau' => '- Tối thiểu 2 năm kinh nghiệm với ReactJS\n- Thành thạo HTML, CSS, JavaScript\n- Có kinh nghiệm với Redux, TypeScript\n- Hiểu biết về Responsive Design, Cross-browser compatibility\n- Có khả năng tối ưu hiệu suất ứng dụng web\n- Có kinh nghiệm làm việc với RESTful APIs\n- Có khả năng làm việc độc lập và theo nhóm',
                'luong_toi_thieu' => 18000000,
                'luong_toi_da' => 30000000,
                'ngay_dang' => '2024-03-10',
                'han_nop' => '2024-04-10',
                'ten_cong_ty' => 'FrontendMaster',
                'tinh_trang' => 1
            ],
            [
                'id' => 2,
                'id_nha_tuyen_dung' => 8, // BackendPro
                'id_danh_muc' => 2, // Lập trình viên Backend
                'id_dia_diem' => 1, // Hà Nội
                'tieu_de' => 'Tuyển dụng Backend Developer (NodeJS)',
                'slug_tieu_de' => 'tuyen-dung-backend-developer-nodejs',
                'mo_ta' => 'BackendPro đang tìm kiếm Backend Developer có kinh nghiệm với NodeJS để phát triển các API và microservices. Bạn sẽ được làm việc với các dự án lớn, có cơ hội học hỏi và phát triển kỹ năng chuyên môn.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với NodeJS, Express\n- Có kinh nghiệm với MongoDB, PostgreSQL\n- Hiểu biết về RESTful API design, GraphQL\n- Có kinh nghiệm với Docker, CI/CD\n- Có khả năng thiết kế và tối ưu database\n- Hiểu biết về bảo mật web application\n- Có khả năng làm việc trong môi trường Agile/Scrum',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 40000000,
                'ngay_dang' => '2024-03-11',
                'han_nop' => '2024-04-11',
                'ten_cong_ty' => 'BackendPro',
                'tinh_trang' => 1
            ],
            [
                'id' => 3,
                'id_nha_tuyen_dung' => 5, // MobileApp Studio
                'id_danh_muc' => 3, // Lập trình viên Mobile
                'id_dia_diem' => 3, // Đà Nẵng
                'tieu_de' => 'Tuyển dụng Mobile Developer (React Native)',
                'slug_tieu_de' => 'tuyen-dung-mobile-developer-react-native',
                'mo_ta' => 'MobileApp Studio đang tìm kiếm Mobile Developer có kinh nghiệm với React Native để phát triển ứng dụng di động đa nền tảng. Bạn sẽ được tham gia vào các dự án thú vị, làm việc với công nghệ hiện đại và có cơ hội phát triển sự nghiệp.',
                'yeu_cau' => '- Tối thiểu 2 năm kinh nghiệm với React Native\n- Có kinh nghiệm phát triển ứng dụng cho cả iOS và Android\n- Thành thạo JavaScript/TypeScript\n- Có kinh nghiệm với Redux, Context API\n- Hiểu biết về native modules và performance optimization\n- Có kinh nghiệm với các thư viện như Navigation, Maps, Camera\n- Có khả năng debug và giải quyết vấn đề hiệu quả',
                'luong_toi_thieu' => 20000000,
                'luong_toi_da' => 35000000,
                'ngay_dang' => '2024-03-12',
                'han_nop' => '2024-04-12',
                'ten_cong_ty' => 'MobileApp Studio',
                'tinh_trang' => 1
            ],
            [
                'id' => 4,
                'id_nha_tuyen_dung' => 4, // CloudNative Vietnam
                'id_danh_muc' => 4, // Kỹ sư DevOps
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng DevOps Engineer',
                'slug_tieu_de' => 'tuyen-dung-devops-engineer',
                'mo_ta' => 'CloudNative Vietnam đang tìm kiếm DevOps Engineer có kinh nghiệm với Docker, Kubernetes để xây dựng và quản lý hệ thống CI/CD. Bạn sẽ được làm việc với các công nghệ cloud hiện đại và có cơ hội phát triển sự nghiệp trong lĩnh vực DevOps.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Docker, Kubernetes\n- Có kinh nghiệm với AWS, GCP hoặc Azure\n- Thành thạo với CI/CD tools như Jenkins, GitLab CI\n- Có kinh nghiệm với Infrastructure as Code (Terraform, Ansible)\n- Hiểu biết về monitoring và logging (Prometheus, Grafana, ELK)\n- Có khả năng tự động hóa quy trình phát triển phần mềm\n- Có kinh nghiệm với Linux system administration',
                'luong_toi_thieu' => 30000000,
                'luong_toi_da' => 50000000,
                'ngay_dang' => '2024-03-13',
                'han_nop' => '2024-04-13',
                'ten_cong_ty' => 'CloudNative Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 5,
                'id_nha_tuyen_dung' => 9, // AILab Vietnam
                'id_danh_muc' => 5, // Kỹ sư AI/ML
                'id_dia_diem' => 1, // Hà Nội
                'tieu_de' => 'Tuyển dụng AI/ML Engineer',
                'slug_tieu_de' => 'tuyen-dung-ai-ml-engineer',
                'mo_ta' => 'AILab Vietnam đang tìm kiếm AI/ML Engineer có kinh nghiệm với các framework machine learning để phát triển các giải pháp AI. Bạn sẽ được làm việc với các dự án nghiên cứu và ứng dụng AI vào thực tế.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Python, TensorFlow, PyTorch\n- Có kiến thức vững về Machine Learning, Deep Learning\n- Có kinh nghiệm với Computer Vision, NLP\n- Có khả năng xử lý và phân tích dữ liệu lớn\n- Có kinh nghiệm triển khai mô hình AI vào production\n- Có khả năng nghiên cứu và áp dụng các thuật toán mới\n- Có kinh nghiệm với các cloud AI services (AWS SageMaker, Google AI Platform)',
                'luong_toi_thieu' => 35000000,
                'luong_toi_da' => 60000000,
                'ngay_dang' => '2024-03-14',
                'han_nop' => '2024-04-14',
                'ten_cong_ty' => 'AILab Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 6,
                'id_nha_tuyen_dung' => 3, // DataTech Solutions
                'id_danh_muc' => 6, // Kỹ sư Data
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng Data Engineer',
                'slug_tieu_de' => 'tuyen-dung-data-engineer',
                'mo_ta' => 'DataTech Solutions đang tìm kiếm Data Engineer có kinh nghiệm với Big Data để xây dựng và quản lý data pipeline. Bạn sẽ được làm việc với dữ liệu lớn và có cơ hội phát triển kỹ năng phân tích dữ liệu.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Hadoop, Spark\n- Có kinh nghiệm với SQL, NoSQL databases\n- Thành thạo với ETL tools và data warehousing\n- Có kinh nghiệm với data modeling và data architecture\n- Hiểu biết về data governance và data quality\n- Có khả năng xử lý dữ liệu lớn và phức tạp\n- Có kinh nghiệm với cloud data services (AWS, GCP, Azure)',
                'luong_toi_thieu' => 28000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-03-15',
                'han_nop' => '2024-04-15',
                'ten_cong_ty' => 'DataTech Solutions',
                'tinh_trang' => 1
            ],
            [
                'id' => 7,
                'id_nha_tuyen_dung' => 1, // TechVision JSC
                'id_danh_muc' => 7, // Quản lý dự án IT
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng IT Project Manager',
                'slug_tieu_de' => 'tuyen-dung-it-project-manager',
                'mo_ta' => 'TechVision JSC đang tìm kiếm IT Project Manager có kinh nghiệm quản lý các dự án phần mềm. Bạn sẽ được làm việc với các dự án lớn, quản lý team và đảm bảo dự án hoàn thành đúng tiến độ, chất lượng.',
                'yeu_cau' => '- Tối thiểu 5 năm kinh nghiệm với quản lý dự án IT\n- Có chứng chỉ PMP, Scrum Master là lợi thế\n- Thành thạo với Agile, Scrum methodologies\n- Có kinh nghiệm sử dụng các công cụ quản lý dự án như Jira, Confluence, MS Project\n- Có khả năng lãnh đạo và quản lý team hiệu quả\n- Có kỹ năng giao tiếp và thuyết trình tốt\n- Có khả năng làm việc dưới áp lực cao',
                'luong_toi_thieu' => 35000000,
                'luong_toi_da' => 60000000,
                'ngay_dang' => '2024-03-16',
                'han_nop' => '2024-04-16',
                'ten_cong_ty' => 'TechVision JSC',
                'tinh_trang' => 1
            ],
            [
                'id' => 8,
                'id_nha_tuyen_dung' => 10, // QAMaster
                'id_danh_muc' => 8, // Kiểm thử phần mềm
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng QA Engineer',
                'slug_tieu_de' => 'tuyen-dung-qa-engineer',
                'mo_ta' => 'QAMaster đang tìm kiếm QA Engineer có kinh nghiệm với kiểm thử phần mềm để đảm bảo chất lượng sản phẩm. Bạn sẽ được làm việc với các dự án đa dạng và có cơ hội phát triển kỹ năng kiểm thử.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với kiểm thử phần mềm\n- Có kinh nghiệm với cả manual testing và automation testing\n- Thành thạo với các công cụ như Selenium, Cypress, JUnit\n- Có kinh nghiệm với API testing, performance testing\n- Hiểu biết về CI/CD và test automation trong pipeline\n- Có khả năng viết test cases, test plans chi tiết\n- Có kinh nghiệm với bug tracking tools như Jira, Bugzilla',
                'luong_toi_thieu' => 20000000,
                'luong_toi_da' => 35000000,
                'ngay_dang' => '2024-03-17',
                'han_nop' => '2024-04-17',
                'ten_cong_ty' => 'QAMaster',
                'tinh_trang' => 1
            ],
            [
                'id' => 9,
                'id_nha_tuyen_dung' => 7, // FrontendMaster
                'id_danh_muc' => 9, // Thiết kế UI/UX
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng UI/UX Designer',
                'slug_tieu_de' => 'tuyen-dung-ui-ux-designer',
                'mo_ta' => 'FrontendMaster đang tìm kiếm UI/UX Designer có kinh nghiệm thiết kế giao diện người dùng và trải nghiệm người dùng. Bạn sẽ được làm việc với các dự án web và mobile, tạo ra các sản phẩm có trải nghiệm người dùng tuyệt vời.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với UI/UX Design\n- Thành thạo với các công cụ như Figma, Adobe XD, Sketch\n- Có portfolio thể hiện các dự án UI/UX đã thực hiện\n- Có kiến thức về UX research, user testing\n- Hiểu biết về design systems, style guides\n- Có khả năng thiết kế responsive web và mobile app\n- Có kinh nghiệm làm việc với developers để implement designs',
                'luong_toi_thieu' => 20000000,
                'luong_toi_da' => 35000000,
                'ngay_dang' => '2024-03-18',
                'han_nop' => '2024-04-18',
                'ten_cong_ty' => 'FrontendMaster',
                'tinh_trang' => 1
            ],
            [
                'id' => 10,
                'id_nha_tuyen_dung' => 6, // SecureNet Vietnam
                'id_danh_muc' => 10, // Bảo mật thông tin
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng Security Engineer',
                'slug_tieu_de' => 'tuyen-dung-security-engineer',
                'mo_ta' => 'SecureNet Vietnam đang tìm kiếm Security Engineer có kinh nghiệm với bảo mật thông tin để bảo vệ hệ thống và dữ liệu. Bạn sẽ được làm việc với các công nghệ bảo mật hiện đại và có cơ hội phát triển trong lĩnh vực an ninh mạng.',
                'yeu_cau' => '- Tối thiểu 5 năm kinh nghiệm với bảo mật thông tin\n- Có chứng chỉ CISSP, CEH, OSCP là lợi thế\n- Có kinh nghiệm với penetration testing, vulnerability assessment\n- Thành thạo với network security, application security\n- Có kinh nghiệm với security monitoring, incident response\n- Hiểu biết về compliance (ISO 27001, PCI DSS, GDPR)\n- Có khả năng phân tích và giải quyết các vấn đề bảo mật phức tạp',
                'luong_toi_thieu' => 30000000,
                'luong_toi_da' => 50000000,
                'ngay_dang' => '2024-03-19',
                'han_nop' => '2024-04-19',
                'ten_cong_ty' => 'SecureNet Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 11,
                'id_nha_tuyen_dung' => 2, // CodeMaster Vietnam
                'id_danh_muc' => 2, // Lập trình viên Backend
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng Backend Developer (PHP/Laravel)',
                'slug_tieu_de' => 'tuyen-dung-backend-developer-php-laravel',
                'mo_ta' => 'CodeMaster Vietnam đang tìm kiếm Backend Developer có kinh nghiệm với PHP/Laravel để phát triển các ứng dụng web. Bạn sẽ được làm việc với các dự án lớn, có cơ hội học hỏi và phát triển kỹ năng chuyên môn.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với PHP, Laravel\n- Có kinh nghiệm với MySQL, Redis\n- Hiểu biết về RESTful API design\n- Có kinh nghiệm với version control (Git)\n- Có khả năng thiết kế và tối ưu database\n- Hiểu biết về bảo mật web application\n- Có khả năng làm việc trong môi trường Agile/Scrum',
                'luong_toi_thieu' => 22000000,
                'luong_toi_da' => 35000000,
                'ngay_dang' => '2024-03-20',
                'han_nop' => '2024-04-20',
                'ten_cong_ty' => 'CodeMaster Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 12,
                'id_nha_tuyen_dung' => 1, // TechVision JSC
                'id_danh_muc' => 1, // Lập trình viên Frontend
                'id_dia_diem' => 1, // Hà Nội
                'tieu_de' => 'Tuyển dụng Frontend Developer (VueJS)',
                'slug_tieu_de' => 'tuyen-dung-frontend-developer-vuejs',
                'mo_ta' => 'TechVision JSC đang tìm kiếm Frontend Developer có kinh nghiệm với VueJS để tham gia vào các dự án phát triển web application hiện đại. Bạn sẽ làm việc trong môi trường năng động, được tiếp xúc với các công nghệ mới nhất và có cơ hội phát triển sự nghiệp.',
                'yeu_cau' => '- Tối thiểu 2 năm kinh nghiệm với VueJS\n- Thành thạo HTML, CSS, JavaScript\n- Có kinh nghiệm với Vuex, Vue Router\n- Hiểu biết về Responsive Design, Cross-browser compatibility\n- Có khả năng tối ưu hiệu suất ứng dụng web\n- Có kinh nghiệm làm việc với RESTful APIs\n- Có khả năng làm việc độc lập và theo nhóm',
                'luong_toi_thieu' => 18000000,
                'luong_toi_da' => 30000000,
                'ngay_dang' => '2024-03-21',
                'han_nop' => '2024-04-21',
                'ten_cong_ty' => 'TechVision JSC',
                'tinh_trang' => 1
            ],
            [
                'id' => 13,
                'id_nha_tuyen_dung' => 5, // MobileApp Studio
                'id_danh_muc' => 3, // Lập trình viên Mobile
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng Mobile Developer (Flutter)',
                'slug_tieu_de' => 'tuyen-dung-mobile-developer-flutter',
                'mo_ta' => 'MobileApp Studio đang tìm kiếm Mobile Developer có kinh nghiệm với Flutter để phát triển ứng dụng di động đa nền tảng. Bạn sẽ được tham gia vào các dự án thú vị, làm việc với công nghệ hiện đại và có cơ hội phát triển sự nghiệp.',
                'yeu_cau' => '- Tối thiểu 2 năm kinh nghiệm với Flutter\n- Có kinh nghiệm phát triển ứng dụng cho cả iOS và Android\n- Thành thạo Dart\n- Có kinh nghiệm với state management (Provider, Bloc, Redux)\n- Hiểu biết về native modules và performance optimization\n- Có kinh nghiệm với các thư viện như Navigation, Maps, Camera\n- Có khả năng debug và giải quyết vấn đề hiệu quả',
                'luong_toi_thieu' => 20000000,
                'luong_toi_da' => 35000000,
                'ngay_dang' => '2024-03-22',
                'han_nop' => '2024-04-22',
                'ten_cong_ty' => 'MobileApp Studio',
                'tinh_trang' => 1
            ],
            [
                'id' => 14,
                'id_nha_tuyen_dung' => 3, // DataTech Solutions
                'id_danh_muc' => 5, // Kỹ sư AI/ML
                'id_dia_diem' => 3, // Đà Nẵng
                'tieu_de' => 'Tuyển dụng Machine Learning Engineer',
                'slug_tieu_de' => 'tuyen-dung-machine-learning-engineer',
                'mo_ta' => 'DataTech Solutions đang tìm kiếm Machine Learning Engineer có kinh nghiệm với các thuật toán machine learning để phát triển các giải pháp AI. Bạn sẽ được làm việc với các dự án nghiên cứu và ứng dụng ML vào thực tế.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Python, scikit-learn\n- Có kiến thức vững về Machine Learning algorithms\n- Có kinh nghiệm với feature engineering, model selection\n- Có khả năng xử lý và phân tích dữ liệu lớn\n- Có kinh nghiệm triển khai mô hình ML vào production\n- Có khả năng nghiên cứu và áp dụng các thuật toán mới\n- Có kinh nghiệm với các cloud ML services',
                'luong_toi_thieu' => 30000000,
                'luong_toi_da' => 50000000,
                'ngay_dang' => '2024-03-23',
                'han_nop' => '2024-04-23',
                'ten_cong_ty' => 'DataTech Solutions',
                'tinh_trang' => 1
            ],
            [
                'id' => 15,
                'id_nha_tuyen_dung' => 4, // CloudNative Vietnam
                'id_danh_muc' => 4, // Kỹ sư DevOps
                'id_dia_diem' => 1, // Hà Nội
                'tieu_de' => 'Tuyển dụng Site Reliability Engineer (SRE)',
                'slug_tieu_de' => 'tuyen-dung-site-reliability-engineer-sre',
                'mo_ta' => 'CloudNative Vietnam đang tìm kiếm Site Reliability Engineer có kinh nghiệm với cloud infrastructure để đảm bảo hệ thống hoạt động ổn định, hiệu suất cao. Bạn sẽ được làm việc với các công nghệ cloud hiện đại và có cơ hội phát triển sự nghiệp trong lĩnh vực SRE.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với SRE/DevOps\n- Có kinh nghiệm với AWS, GCP hoặc Azure\n- Thành thạo với Kubernetes, Docker\n- Có kinh nghiệm với monitoring tools (Prometheus, Grafana)\n- Hiểu biết về logging (ELK, Loki)\n- Có khả năng tự động hóa quy trình vận hành\n- Có kinh nghiệm với incident response, troubleshooting',
                'luong_toi_thieu' => 35000000,
                'luong_toi_da' => 55000000,
                'ngay_dang' => '2024-03-24',
                'han_nop' => '2024-04-24',
                'ten_cong_ty' => 'CloudNative Vietnam',
                'tinh_trang' => 1
            ],
        ]);
    }
}
