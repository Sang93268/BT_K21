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
            [
                'id' => 16,
                'id_nha_tuyen_dung' => 2, // CodeMaster Vietnam
                'id_danh_muc' => 1, // Lập trình viên Frontend
                'id_dia_diem' => 1, // Hà Nội
                'tieu_de' => 'Tuyển dụng Frontend Developer (Angular)',
                'slug_tieu_de' => 'tuyen-dung-frontend-developer-angular',
                'mo_ta' => 'CodeMaster Vietnam đang tìm kiếm Frontend Developer có kinh nghiệm với Angular để phát triển các ứng dụng web enterprise. Bạn sẽ được làm việc với các dự án lớn từ khách hàng Nhật Bản.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Angular\n- Thành thạo TypeScript, RxJS\n- Có kinh nghiệm với NgRx, Angular Material\n- Hiểu biết về Unit Testing với Jasmine/Karma\n- Có khả năng tối ưu hiệu suất ứng dụng\n- Có kinh nghiệm làm việc với RESTful APIs\n- Ưu tiên biết tiếng Nhật N3 trở lên',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-03-25',
                'han_nop' => '2024-04-25',
                'ten_cong_ty' => 'CodeMaster Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 17,
                'id_nha_tuyen_dung' => 3, // DataTech Solutions
                'id_danh_muc' => 6, // Kỹ sư Data
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng Data Scientist',
                'slug_tieu_de' => 'tuyen-dung-data-scientist',
                'mo_ta' => 'DataTech Solutions đang tìm kiếm Data Scientist có kinh nghiệm phân tích dữ liệu và xây dựng mô hình dự đoán. Bạn sẽ được làm việc với các dự án phân tích dữ liệu lớn.',
                'yeu_cau' => '- Tối thiểu 4 năm kinh nghiệm trong lĩnh vực Data Science\n- Thành thạo Python, R và các thư viện phân tích dữ liệu\n- Có kinh nghiệm với các thuật toán Machine Learning\n- Hiểu biết sâu về thống kê và xác suất\n- Có khả năng trực quan hóa dữ liệu với Tableau, Power BI\n- Có kinh nghiệm với Big Data tools như Spark\n- Có khả năng giao tiếp và thuyết trình tốt',
                'luong_toi_thieu' => 35000000,
                'luong_toi_da' => 60000000,
                'ngay_dang' => '2024-03-26',
                'han_nop' => '2024-04-26',
                'ten_cong_ty' => 'DataTech Solutions',
                'tinh_trang' => 1
            ],
            [
                'id' => 18,
                'id_nha_tuyen_dung' => 5, // MobileApp Studio
                'id_danh_muc' => 3, // Lập trình viên Mobile
                'id_dia_diem' => 1, // Hà Nội
                'tieu_de' => 'Tuyển dụng iOS Developer (Swift)',
                'slug_tieu_de' => 'tuyen-dung-ios-developer-swift',
                'mo_ta' => 'MobileApp Studio đang tìm kiếm iOS Developer có kinh nghiệm phát triển ứng dụng native cho hệ sinh thái Apple. Bạn sẽ được làm việc với các dự án ứng dụng iOS hiện đại.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm phát triển iOS\n- Thành thạo Swift và SwiftUI\n- Có kinh nghiệm với iOS SDK, Xcode\n- Hiểu biết về iOS Design Guidelines\n- Có kinh nghiệm với Core Data, Push Notifications\n- Có khả năng tối ưu hiệu suất ứng dụng\n- Ưu tiên có kinh nghiệm với CI/CD cho iOS',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-03-27',
                'han_nop' => '2024-04-27',
                'ten_cong_ty' => 'MobileApp Studio',
                'tinh_trang' => 1
            ],
            [
                'id' => 19,
                'id_nha_tuyen_dung' => 6, // SecureNet Vietnam
                'id_danh_muc' => 10, // Bảo mật thông tin
                'id_dia_diem' => 3, // Đà Nẵng
                'tieu_de' => 'Tuyển dụng Penetration Tester',
                'slug_tieu_de' => 'tuyen-dung-penetration-tester',
                'mo_ta' => 'SecureNet Vietnam đang tìm kiếm Penetration Tester có kinh nghiệm kiểm tra bảo mật và đánh giá lỗ hổng. Bạn sẽ được làm việc với đội ngũ bảo mật chuyên nghiệp.',
                'yeu_cau' => '- Tối thiểu 4 năm kinh nghiệm trong lĩnh vực bảo mật\n- Có chứng chỉ CEH, OSCP\n- Thành thạo các công cụ pentest\n- Có kinh nghiệm với Web Application Security\n- Hiểu biết về Network Security\n- Có khả năng viết báo cáo kỹ thuật chi tiết\n- Có kinh nghiệm với Bug Bounty là lợi thế',
                'luong_toi_thieu' => 30000000,
                'luong_toi_da' => 50000000,
                'ngay_dang' => '2024-03-28',
                'han_nop' => '2024-04-28',
                'ten_cong_ty' => 'SecureNet Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 20,
                'id_nha_tuyen_dung' => 9, // AILab Vietnam
                'id_danh_muc' => 5, // Kỹ sư AI/ML
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng Computer Vision Engineer',
                'slug_tieu_de' => 'tuyen-dung-computer-vision-engineer',
                'mo_ta' => 'AILab Vietnam đang tìm kiếm Computer Vision Engineer có kinh nghiệm phát triển các giải pháp thị giác máy tính. Bạn sẽ được làm việc với các dự án AI tiên tiến.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Computer Vision\n- Thành thạo OpenCV, TensorFlow, PyTorch\n- Có kinh nghiệm với Deep Learning frameworks\n- Hiểu biết về các thuật toán xử lý ảnh\n- Có kinh nghiệm với Object Detection, Recognition\n- Có khả năng tối ưu mô hình cho edge devices\n- Ưu tiên có các công trình nghiên cứu đã công bố',
                'luong_toi_thieu' => 40000000,
                'luong_toi_da' => 70000000,
                'ngay_dang' => '2024-03-29',
                'han_nop' => '2024-04-29',
                'ten_cong_ty' => 'AILab Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 21,
                'id_nha_tuyen_dung' => 8, // BackendPro
                'id_danh_muc' => 2, // Lập trình viên Backend
                'id_dia_diem' => 3, // Đà Nẵng
                'tieu_de' => 'Tuyển dụng Backend Developer (Java Spring)',
                'slug_tieu_de' => 'tuyen-dung-backend-developer-java-spring',
                'mo_ta' => 'BackendPro đang tìm kiếm Backend Developer có kinh nghiệm với Java Spring để phát triển các ứng dụng enterprise. Bạn sẽ được làm việc với các dự án microservices quy mô lớn.',
                'yeu_cau' => '- Tối thiểu 4 năm kinh nghiệm với Java Spring Framework\n- Thành thạo Spring Boot, Spring Cloud\n- Có kinh nghiệm với Microservices Architecture\n- Hiểu biết về JPA, Hibernate\n- Có kinh nghiệm với Message Queue (Kafka, RabbitMQ)\n- Thành thạo SQL và NoSQL databases\n- Có khả năng tối ưu hiệu suất ứng dụng',
                'luong_toi_thieu' => 30000000,
                'luong_toi_da' => 55000000,
                'ngay_dang' => '2024-03-30',
                'han_nop' => '2024-04-30',
                'ten_cong_ty' => 'BackendPro',
                'tinh_trang' => 1
            ],
            [
                'id' => 22,
                'id_nha_tuyen_dung' => 10, // QAMaster
                'id_danh_muc' => 8, // Kiểm thử phần mềm
                'id_dia_diem' => 1, // Hà Nội
                'tieu_de' => 'Tuyển dụng Automation Test Engineer',
                'slug_tieu_de' => 'tuyen-dung-automation-test-engineer',
                'mo_ta' => 'QAMaster đang tìm kiếm Automation Test Engineer có kinh nghiệm với automated testing frameworks. Bạn sẽ được tham gia vào việc xây dựng và duy trì hệ thống test tự động.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Automation Testing\n- Thành thạo Selenium, Cypress, TestNG\n- Có kinh nghiệm với CI/CD tools (Jenkins, GitLab CI)\n- Có khả năng viết test scripts bằng Python hoặc JavaScript\n- Hiểu biết về API Testing (Postman, REST Assured)\n- Có kinh nghiệm với Performance Testing (JMeter)\n- Có khả năng thiết kế test framework',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-03-31',
                'han_nop' => '2024-05-01',
                'ten_cong_ty' => 'QAMaster',
                'tinh_trang' => 1
            ],
            [
                'id' => 23,
                'id_nha_tuyen_dung' => 7, // FrontendMaster
                'id_danh_muc' => 9, // Thiết kế UI/UX
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng Senior UI/UX Designer',
                'slug_tieu_de' => 'tuyen-dung-senior-ui-ux-designer',
                'mo_ta' => 'FrontendMaster đang tìm kiếm Senior UI/UX Designer có kinh nghiệm thiết kế sản phẩm số. Bạn sẽ dẫn dắt team design và định hướng trải nghiệm người dùng cho các sản phẩm.',
                'yeu_cau' => '- Tối thiểu 5 năm kinh nghiệm UI/UX Design\n- Thành thạo Figma, Adobe XD\n- Có kinh nghiệm làm việc với Design Systems\n- Hiểu biết sâu về User Research và Usability Testing\n- Có khả năng làm việc với Stakeholders\n- Có kinh nghiệm quản lý team design\n- Portfolio thể hiện các dự án phức tạp',
                'luong_toi_thieu' => 35000000,
                'luong_toi_da' => 60000000,
                'ngay_dang' => '2024-04-01',
                'han_nop' => '2024-05-02',
                'ten_cong_ty' => 'FrontendMaster',
                'tinh_trang' => 1
            ],
            [
                'id' => 24,
                'id_nha_tuyen_dung' => 4, // CloudNative Vietnam
                'id_danh_muc' => 4, // Kỹ sư DevOps
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng Cloud Infrastructure Engineer',
                'slug_tieu_de' => 'tuyen-dung-cloud-infrastructure-engineer',
                'mo_ta' => 'CloudNative Vietnam đang tìm kiếm Cloud Infrastructure Engineer có kinh nghiệm với multi-cloud environment. Bạn sẽ được tham gia xây dựng và vận hành hệ thống cloud quy mô lớn.',
                'yeu_cau' => '- Tối thiểu 4 năm kinh nghiệm với Cloud Infrastructure\n- Chứng chỉ AWS Solutions Architect hoặc tương đương\n- Thành thạo Infrastructure as Code (Terraform)\n- Có kinh nghiệm với Container Orchestration\n- Hiểu biết về Network Security trong Cloud\n- Có kinh nghiệm với Multi-cloud Strategy\n- Khả năng tối ưu chi phí cloud',
                'luong_toi_thieu' => 40000000,
                'luong_toi_da' => 70000000,
                'ngay_dang' => '2024-04-02',
                'han_nop' => '2024-05-03',
                'ten_cong_ty' => 'CloudNative Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 25,
                'id_nha_tuyen_dung' => 1, // TechVision JSC
                'id_danh_muc' => 7, // Quản lý dự án IT
                'id_dia_diem' => 1, // Hà Nội
                'tieu_de' => 'Tuyển dụng Technical Project Manager',
                'slug_tieu_de' => 'tuyen-dung-technical-project-manager',
                'mo_ta' => 'TechVision JSC đang tìm kiếm Technical Project Manager có kinh nghiệm quản lý các dự án phần mềm phức tạp. Bạn sẽ làm việc trực tiếp với khách hàng và dẫn dắt team phát triển.',
                'yeu_cau' => '- Tối thiểu 6 năm kinh nghiệm trong ngành IT\n- Có ít nhất 3 năm kinh nghiệm quản lý dự án\n- Chứng chỉ PMP/Scrum Master\n- Có background kỹ thuật mạnh\n- Kỹ năng giao tiếp và thương lượng tốt\n- Có kinh nghiệm với Agile và Waterfall\n- Tiếng Anh thành thạo',
                'luong_toi_thieu' => 45000000,
                'luong_toi_da' => 80000000,
                'ngay_dang' => '2024-04-03',
                'han_nop' => '2024-05-04',
                'ten_cong_ty' => 'TechVision JSC',
                'tinh_trang' => 1
            ],
            [
                'id' => 26,
                'id_nha_tuyen_dung' => 2, // CodeMaster Vietnam
                'id_danh_muc' => 2, // Lập trình viên Backend
                'id_dia_diem' => 4, // Hải Phòng
                'tieu_de' => 'Tuyển dụng Backend Developer (.NET Core)',
                'slug_tieu_de' => 'tuyen-dung-backend-developer-dotnet-core',
                'mo_ta' => 'CodeMaster Vietnam đang tìm kiếm Backend Developer có kinh nghiệm với .NET Core để phát triển các ứng dụng enterprise. Bạn sẽ được làm việc với các dự án lớn từ khách hàng quốc tế.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với .NET Core\n- Thành thạo C# và Entity Framework Core\n- Có kinh nghiệm với RESTful APIs\n- Hiểu biết về Microservices Architecture\n- Có kinh nghiệm với SQL Server, Redis\n- Có khả năng tối ưu hiệu suất ứng dụng\n- Ưu tiên có kinh nghiệm với Azure',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-04',
                'han_nop' => '2024-05-05',
                'ten_cong_ty' => 'CodeMaster Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 27,
                'id_nha_tuyen_dung' => 5, // MobileApp Studio
                'id_danh_muc' => 3, // Lập trình viên Mobile
                'id_dia_diem' => 5, // Cần Thơ
                'tieu_de' => 'Tuyển dụng Cross-platform Mobile Developer',
                'slug_tieu_de' => 'tuyen-dung-cross-platform-mobile-developer',
                'mo_ta' => 'MobileApp Studio đang mở rộng văn phòng tại Cần Thơ và tìm kiếm Cross-platform Mobile Developer có kinh nghiệm với Flutter/React Native.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm phát triển mobile\n- Thành thạo Flutter hoặc React Native\n- Có kinh nghiệm với state management\n- Hiểu biết về native modules\n- Có kinh nghiệm với CI/CD cho mobile\n- Có khả năng tối ưu hiệu suất ứng dụng\n- Ưu tiên có kinh nghiệm với cả iOS và Android',
                'luong_toi_thieu' => 20000000,
                'luong_toi_da' => 40000000,
                'ngay_dang' => '2024-04-05',
                'han_nop' => '2024-05-06',
                'ten_cong_ty' => 'MobileApp Studio',
                'tinh_trang' => 1
            ],
            [
                'id' => 28,
                'id_nha_tuyen_dung' => 9, // AILab Vietnam
                'id_danh_muc' => 5, // Kỹ sư AI/ML
                'id_dia_diem' => 8, // Huế
                'tieu_de' => 'Tuyển dụng Machine Learning Engineer',
                'slug_tieu_de' => 'tuyen-dung-machine-learning-engineer-hue',
                'mo_ta' => 'AILab Vietnam mở rộng văn phòng tại Huế, tìm kiếm Machine Learning Engineer để phát triển các giải pháp AI cho ngành y tế.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Machine Learning\n- Thành thạo Python, TensorFlow/PyTorch\n- Có kinh nghiệm với Computer Vision\n- Hiểu biết về Deep Learning\n- Có kinh nghiệm với Medical Imaging\n- Có khả năng tối ưu mô hình\n- Ưu tiên có background về y tế',
                'luong_toi_thieu' => 30000000,
                'luong_toi_da' => 50000000,
                'ngay_dang' => '2024-04-06',
                'han_nop' => '2024-05-07',
                'ten_cong_ty' => 'AILab Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 29,
                'id_nha_tuyen_dung' => 6, // SecureNet Vietnam
                'id_danh_muc' => 10, // Bảo mật thông tin
                'id_dia_diem' => 9, // Nha Trang
                'tieu_de' => 'Tuyển dụng Information Security Analyst',
                'slug_tieu_de' => 'tuyen-dung-information-security-analyst',
                'mo_ta' => 'SecureNet Vietnam mở rộng văn phòng tại Nha Trang, tìm kiếm Information Security Analyst để bảo vệ hệ thống thông tin doanh nghiệp.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm trong An toàn thông tin\n- Có chứng chỉ Security+, CISSP\n- Có kinh nghiệm với Security Tools\n- Hiểu biết về Risk Assessment\n- Có kinh nghiệm với Incident Response\n- Có khả năng viết báo cáo bảo mật\n- Ưu tiên có kinh nghiệm forensics',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-07',
                'han_nop' => '2024-05-08',
                'ten_cong_ty' => 'SecureNet Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 30,
                'id_nha_tuyen_dung' => 4, // CloudNative Vietnam
                'id_danh_muc' => 4, // Kỹ sư DevOps
                'id_dia_diem' => 10, // Vũng Tàu
                'tieu_de' => 'Tuyển dụng DevOps Engineer',
                'slug_tieu_de' => 'tuyen-dung-devops-engineer-vung-tau',
                'mo_ta' => 'CloudNative Vietnam mở rộng văn phòng tại Vũng Tàu, tìm kiếm DevOps Engineer để xây dựng và quản lý hệ thống cloud.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với DevOps\n- Thành thạo Docker, Kubernetes\n- Có kinh nghiệm với AWS/GCP/Azure\n- Hiểu biết về CI/CD\n- Có kinh nghiệm với Infrastructure as Code\n- Có khả năng automation\n- Ưu tiên có chứng chỉ cloud',
                'luong_toi_thieu' => 30000000,
                'luong_toi_da' => 50000000,
                'ngay_dang' => '2024-04-08',
                'han_nop' => '2024-05-09',
                'ten_cong_ty' => 'CloudNative Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 31,
                'id_nha_tuyen_dung' => 8, // BackendPro
                'id_danh_muc' => 2, // Lập trình viên Backend
                'id_dia_diem' => 4, // Hải Phòng
                'tieu_de' => 'Tuyển dụng Backend Developer (Ruby on Rails)',
                'slug_tieu_de' => 'tuyen-dung-backend-developer-ruby-on-rails',
                'mo_ta' => 'BackendPro mở rộng văn phòng tại Hải Phòng, tìm kiếm Backend Developer có kinh nghiệm với Ruby on Rails để phát triển các ứng dụng web.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Ruby on Rails\n- Thành thạo Ruby và OOP\n- Có kinh nghiệm với PostgreSQL\n- Hiểu biết về RESTful APIs\n- Có kinh nghiệm với TDD/BDD\n- Có khả năng tối ưu performance\n- Ưu tiên có kinh nghiệm với Microservices',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-09',
                'han_nop' => '2024-05-10',
                'ten_cong_ty' => 'BackendPro',
                'tinh_trang' => 1
            ],
            [
                'id' => 32,
                'id_nha_tuyen_dung' => 10, // QAMaster
                'id_danh_muc' => 8, // Kiểm thử phần mềm
                'id_dia_diem' => 5, // Cần Thơ
                'tieu_de' => 'Tuyển dụng QA Engineer',
                'slug_tieu_de' => 'tuyen-dung-qa-engineer-can-tho',
                'mo_ta' => 'QAMaster mở rộng văn phòng tại Cần Thơ, tìm kiếm QA Engineer có kinh nghiệm để đảm bảo chất lượng sản phẩm phần mềm.',
                'yeu_cau' => '- Tối thiểu 2 năm kinh nghiệm với Software Testing\n- Thành thạo Manual Testing\n- Có kinh nghiệm với Test Planning\n- Hiểu biết về Agile Testing\n- Có kinh nghiệm với Test Management Tools\n- Có khả năng viết test cases\n- Ưu tiên có kinh nghiệm automation',
                'luong_toi_thieu' => 18000000,
                'luong_toi_da' => 35000000,
                'ngay_dang' => '2024-04-10',
                'han_nop' => '2024-05-11',
                'ten_cong_ty' => 'QAMaster',
                'tinh_trang' => 1
            ],
            [
                'id' => 33,
                'id_nha_tuyen_dung' => 1, // TechVision JSC
                'id_danh_muc' => 9, // Thiết kế UI/UX
                'id_dia_diem' => 6, // Bình Dương
                'tieu_de' => 'Tuyển dụng Product Designer',
                'slug_tieu_de' => 'tuyen-dung-product-designer',
                'mo_ta' => 'TechVision JSC mở rộng văn phòng tại Bình Dương, tìm kiếm Product Designer để thiết kế trải nghiệm người dùng cho các sản phẩm số.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm thiết kế sản phẩm\n- Thành thạo Figma, Sketch\n- Có kinh nghiệm với Design Systems\n- Hiểu biết về UX Research\n- Có kinh nghiệm với Mobile Design\n- Có khả năng làm việc với stakeholders\n- Portfolio thể hiện các dự án đa dạng',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-11',
                'han_nop' => '2024-05-12',
                'ten_cong_ty' => 'TechVision JSC',
                'tinh_trang' => 1
            ],
            [
                'id' => 34,
                'id_nha_tuyen_dung' => 3, // DataTech Solutions
                'id_danh_muc' => 6, // Kỹ sư Data
                'id_dia_diem' => 7, // Đồng Nai
                'tieu_de' => 'Tuyển dụng Data Engineer',
                'slug_tieu_de' => 'tuyen-dung-data-engineer',
                'mo_ta' => 'DataTech Solutions mở rộng văn phòng tại Đồng Nai, tìm kiếm Data Engineer có kinh nghiệm xây dựng và quản lý data pipeline.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Data Engineering\n- Thành thạo Python, SQL\n- Có kinh nghiệm với ETL tools\n- Hiểu biết về Data Warehouse\n- Có kinh nghiệm với Apache Spark\n- Có khả năng xử lý dữ liệu lớn\n- Ưu tiên có kinh nghiệm với cloud platforms',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-12',
                'han_nop' => '2024-05-13',
                'ten_cong_ty' => 'DataTech Solutions',
                'tinh_trang' => 1
            ],
            [
                'id' => 35,
                'id_nha_tuyen_dung' => 9, // AILab Vietnam
                'id_danh_muc' => 5, // Kỹ sư AI/ML
                'id_dia_diem' => 8, // Huế
                'tieu_de' => 'Tuyển dụng Machine Learning Engineer',
                'slug_tieu_de' => 'tuyen-dung-machine-learning-engineer-hue',
                'mo_ta' => 'AILab Vietnam mở rộng văn phòng tại Huế, tìm kiếm Machine Learning Engineer để phát triển các giải pháp AI cho ngành y tế.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Machine Learning\n- Thành thạo Python, TensorFlow/PyTorch\n- Có kinh nghiệm với Computer Vision\n- Hiểu biết về Deep Learning\n- Có kinh nghiệm với Medical Imaging\n- Có khả năng tối ưu mô hình\n- Ưu tiên có background về y tế',
                'luong_toi_thieu' => 30000000,
                'luong_toi_da' => 50000000,
                'ngay_dang' => '2024-04-13',
                'han_nop' => '2024-05-14',
                'ten_cong_ty' => 'AILab Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 36,
                'id_nha_tuyen_dung' => 2, // CodeMaster Vietnam
                'id_danh_muc' => 2, // Lập trình viên Backend
                'id_dia_diem' => 4, // Hải Phòng
                'tieu_de' => 'Tuyển dụng Backend Developer (.NET Core)',
                'slug_tieu_de' => 'tuyen-dung-backend-developer-dotnet-core',
                'mo_ta' => 'CodeMaster Vietnam đang tìm kiếm Backend Developer có kinh nghiệm với .NET Core để phát triển các ứng dụng enterprise. Bạn sẽ được làm việc với các dự án lớn từ khách hàng quốc tế.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với .NET Core\n- Thành thạo C# và Entity Framework Core\n- Có kinh nghiệm với RESTful APIs\n- Hiểu biết về Microservices Architecture\n- Có kinh nghiệm với SQL Server, Redis\n- Có khả năng tối ưu hiệu suất ứng dụng\n- Ưu tiên có kinh nghiệm với Azure',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-14',
                'han_nop' => '2024-05-15',
                'ten_cong_ty' => 'CodeMaster Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 37,
                'id_nha_tuyen_dung' => 5, // MobileApp Studio
                'id_danh_muc' => 3, // Lập trình viên Mobile
                'id_dia_diem' => 5, // Cần Thơ
                'tieu_de' => 'Tuyển dụng Cross-platform Mobile Developer',
                'slug_tieu_de' => 'tuyen-dung-cross-platform-mobile-developer',
                'mo_ta' => 'MobileApp Studio đang mở rộng văn phòng tại Cần Thơ và tìm kiếm Cross-platform Mobile Developer có kinh nghiệm với Flutter/React Native.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm phát triển mobile\n- Thành thạo Flutter hoặc React Native\n- Có kinh nghiệm với state management\n- Hiểu biết về native modules\n- Có kinh nghiệm với CI/CD cho mobile\n- Có khả năng tối ưu hiệu suất ứng dụng\n- Ưu tiên có kinh nghiệm với cả iOS và Android',
                'luong_toi_thieu' => 20000000,
                'luong_toi_da' => 40000000,
                'ngay_dang' => '2024-04-15',
                'han_nop' => '2024-05-16',
                'ten_cong_ty' => 'MobileApp Studio',
                'tinh_trang' => 1
            ],
            [
                'id' => 38,
                'id_nha_tuyen_dung' => 7, // FrontendMaster
                'id_danh_muc' => 1, // Lập trình viên Frontend
                'id_dia_diem' => 6, // Bình Dương
                'tieu_de' => 'Tuyển dụng Frontend Developer (Vue.js)',
                'slug_tieu_de' => 'tuyen-dung-frontend-developer-vuejs',
                'mo_ta' => 'FrontendMaster mở rộng văn phòng tại Bình Dương, tìm kiếm Frontend Developer có kinh nghiệm với Vue.js để phát triển các ứng dụng web hiện đại.',
                'yeu_cau' => '- Tối thiểu 2 năm kinh nghiệm với Vue.js\n- Thành thạo JavaScript/TypeScript\n- Có kinh nghiệm với Vuex, Vue Router\n- Hiểu biết về Progressive Web Apps\n- Có kinh nghiệm với UI frameworks\n- Có khả năng tối ưu hiệu suất\n- Ưu tiên có kinh nghiệm với Nuxt.js',
                'luong_toi_thieu' => 18000000,
                'luong_toi_da' => 35000000,
                'ngay_dang' => '2024-04-16',
                'han_nop' => '2024-05-17',
                'ten_cong_ty' => 'FrontendMaster',
                'tinh_trang' => 1
            ],
            [
                'id' => 39,
                'id_nha_tuyen_dung' => 3, // DataTech Solutions
                'id_danh_muc' => 6, // Kỹ sư Data
                'id_dia_diem' => 7, // Đồng Nai
                'tieu_de' => 'Tuyển dụng Data Engineer',
                'slug_tieu_de' => 'tuyen-dung-data-engineer',
                'mo_ta' => 'DataTech Solutions mở rộng văn phòng tại Đồng Nai, tìm kiếm Data Engineer có kinh nghiệm xây dựng và quản lý data pipeline.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Data Engineering\n- Thành thạo Python, SQL\n- Có kinh nghiệm với ETL tools\n- Hiểu biết về Data Warehouse\n- Có kinh nghiệm với Apache Spark\n- Có khả năng xử lý dữ liệu lớn\n- Ưu tiên có kinh nghiệm với cloud platforms',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-17',
                'han_nop' => '2024-05-18',
                'ten_cong_ty' => 'DataTech Solutions',
                'tinh_trang' => 1
            ],
            [
                'id' => 40,
                'id_nha_tuyen_dung' => 9, // AILab Vietnam
                'id_danh_muc' => 5, // Kỹ sư AI/ML
                'id_dia_diem' => 8, // Huế
                'tieu_de' => 'Tuyển dụng Machine Learning Engineer',
                'slug_tieu_de' => 'tuyen-dung-machine-learning-engineer-hue',
                'mo_ta' => 'AILab Vietnam mở rộng văn phòng tại Huế, tìm kiếm Machine Learning Engineer để phát triển các giải pháp AI cho ngành y tế.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Machine Learning\n- Thành thạo Python, TensorFlow/PyTorch\n- Có kinh nghiệm với Computer Vision\n- Hiểu biết về Deep Learning\n- Có kinh nghiệm với Medical Imaging\n- Có khả năng tối ưu mô hình\n- Ưu tiên có background về y tế',
                'luong_toi_thieu' => 30000000,
                'luong_toi_da' => 50000000,
                'ngay_dang' => '2024-04-18',
                'han_nop' => '2024-05-19',
                'ten_cong_ty' => 'AILab Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 41,
                'id_nha_tuyen_dung' => 6, // SecureNet Vietnam
                'id_danh_muc' => 10, // Bảo mật thông tin
                'id_dia_diem' => 9, // Nha Trang
                'tieu_de' => 'Tuyển dụng Information Security Analyst',
                'slug_tieu_de' => 'tuyen-dung-information-security-analyst',
                'mo_ta' => 'SecureNet Vietnam mở rộng văn phòng tại Nha Trang, tìm kiếm Information Security Analyst để bảo vệ hệ thống thông tin doanh nghiệp.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm trong An toàn thông tin\n- Có chứng chỉ Security+, CISSP\n- Có kinh nghiệm với Security Tools\n- Hiểu biết về Risk Assessment\n- Có kinh nghiệm với Incident Response\n- Có khả năng viết báo cáo bảo mật\n- Ưu tiên có kinh nghiệm forensics',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-19',
                'han_nop' => '2024-05-20',
                'ten_cong_ty' => 'SecureNet Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 42,
                'id_nha_tuyen_dung' => 4, // CloudNative Vietnam
                'id_danh_muc' => 4, // Kỹ sư DevOps
                'id_dia_diem' => 10, // Vũng Tàu
                'tieu_de' => 'Tuyển dụng DevOps Engineer',
                'slug_tieu_de' => 'tuyen-dung-devops-engineer-vung-tau',
                'mo_ta' => 'CloudNative Vietnam mở rộng văn phòng tại Vũng Tàu, tìm kiếm DevOps Engineer để xây dựng và quản lý hệ thống cloud.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với DevOps\n- Thành thạo Docker, Kubernetes\n- Có kinh nghiệm với AWS/GCP/Azure\n- Hiểu biết về CI/CD\n- Có kinh nghiệm với Infrastructure as Code\n- Có khả năng automation\n- Ưu tiên có chứng chỉ cloud',
                'luong_toi_thieu' => 30000000,
                'luong_toi_da' => 50000000,
                'ngay_dang' => '2024-04-20',
                'han_nop' => '2024-05-21',
                'ten_cong_ty' => 'CloudNative Vietnam',
                'tinh_trang' => 1
            ],
            [
                'id' => 43,
                'id_nha_tuyen_dung' => 8, // BackendPro
                'id_danh_muc' => 2, // Lập trình viên Backend
                'id_dia_diem' => 4, // Hải Phòng
                'tieu_de' => 'Tuyển dụng Backend Developer (Ruby on Rails)',
                'slug_tieu_de' => 'tuyen-dung-backend-developer-ruby-on-rails',
                'mo_ta' => 'BackendPro mở rộng văn phòng tại Hải Phòng, tìm kiếm Backend Developer có kinh nghiệm với Ruby on Rails để phát triển các ứng dụng web.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm với Ruby on Rails\n- Thành thạo Ruby và OOP\n- Có kinh nghiệm với PostgreSQL\n- Hiểu biết về RESTful APIs\n- Có kinh nghiệm với TDD/BDD\n- Có khả năng tối ưu performance\n- Ưu tiên có kinh nghiệm với Microservices',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-21',
                'han_nop' => '2024-05-22',
                'ten_cong_ty' => 'BackendPro',
                'tinh_trang' => 1
            ],
            [
                'id' => 44,
                'id_nha_tuyen_dung' => 10, // QAMaster
                'id_danh_muc' => 8, // Kiểm thử phần mềm
                'id_dia_diem' => 5, // Cần Thơ
                'tieu_de' => 'Tuyển dụng QA Engineer',
                'slug_tieu_de' => 'tuyen-dung-qa-engineer-can-tho',
                'mo_ta' => 'QAMaster mở rộng văn phòng tại Cần Thơ, tìm kiếm QA Engineer có kinh nghiệm để đảm bảo chất lượng sản phẩm phần mềm.',
                'yeu_cau' => '- Tối thiểu 2 năm kinh nghiệm với Software Testing\n- Thành thạo Manual Testing\n- Có kinh nghiệm với Test Planning\n- Hiểu biết về Agile Testing\n- Có kinh nghiệm với Test Management Tools\n- Có khả năng viết test cases\n- Ưu tiên có kinh nghiệm automation',
                'luong_toi_thieu' => 18000000,
                'luong_toi_da' => 35000000,
                'ngay_dang' => '2024-04-22',
                'han_nop' => '2024-05-23',
                'ten_cong_ty' => 'QAMaster',
                'tinh_trang' => 1
            ],
            [
                'id' => 45,
                'id_nha_tuyen_dung' => 1, // TechVision JSC
                'id_danh_muc' => 9, // Thiết kế UI/UX
                'id_dia_diem' => 6, // Bình Dương
                'tieu_de' => 'Tuyển dụng Product Designer',
                'slug_tieu_de' => 'tuyen-dung-product-designer',
                'mo_ta' => 'TechVision JSC mở rộng văn phòng tại Bình Dương, tìm kiếm Product Designer để thiết kế trải nghiệm người dùng cho các sản phẩm số.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm thiết kế sản phẩm\n- Thành thạo Figma, Sketch\n- Có kinh nghiệm làm việc với Design Systems\n- Hiểu biết về UX Research\n- Có kinh nghiệm với Mobile Design\n- Có khả năng làm việc với stakeholders\n- Portfolio thể hiện các dự án đa dạng',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-23',
                'han_nop' => '2024-05-24',
                'ten_cong_ty' => 'TechVision JSC',
                'tinh_trang' => 1
            ],
            [
                'id' => 46,
                'id_nha_tuyen_dung' => 11, // TechGalaxy Corporation
                'id_danh_muc' => 1, // Lập trình viên Frontend
                'id_dia_diem' => 1, // Hà Nội
                'tieu_de' => 'Tuyển dụng Senior Frontend Developer (React)',
                'slug_tieu_de' => 'tuyen-dung-senior-frontend-developer-react',
                'mo_ta' => 'TechGalaxy Corporation đang tìm kiếm Senior Frontend Developer có kinh nghiệm với React để phát triển các ứng dụng web enterprise. Bạn sẽ được làm việc với các dự án quốc tế.',
                'yeu_cau' => '- Tối thiểu 5 năm kinh nghiệm với React\n- Thành thạo TypeScript, Redux\n- Có kinh nghiệm với Micro-frontends\n- Hiểu biết sâu về Performance Optimization\n- Có kinh nghiệm với GraphQL\n- Có khả năng mentoring team\n- Tiếng Anh thành thạo',
                'luong_toi_thieu' => 40000000,
                'luong_toi_da' => 70000000,
                'ngay_dang' => '2024-04-24',
                'han_nop' => '2024-05-25',
                'ten_cong_ty' => 'TechGalaxy Corporation',
                'tinh_trang' => 1
            ],
            [
                'id' => 47,
                'id_nha_tuyen_dung' => 11, // TechGalaxy Corporation
                'id_danh_muc' => 2, // Lập trình viên Backend
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng Senior Backend Developer (Microservices)',
                'slug_tieu_de' => 'tuyen-dung-senior-backend-developer-microservices',
                'mo_ta' => 'TechGalaxy Corporation cần tuyển Senior Backend Developer có kinh nghiệm phát triển microservices. Bạn sẽ được làm việc với hệ thống phân tán quy mô lớn.',
                'yeu_cau' => '- Tối thiểu 5 năm kinh nghiệm Backend\n- Thành thạo Java Spring/Node.js\n- Có kinh nghiệm sâu về Microservices\n- Hiểu biết về Event-Driven Architecture\n- Có kinh nghiệm với Distributed Systems\n- Có khả năng thiết kế hệ thống\n- Ưu tiên có kinh nghiệm Cloud Native',
                'luong_toi_thieu' => 45000000,
                'luong_toi_da' => 80000000,
                'ngay_dang' => '2024-04-24',
                'han_nop' => '2024-05-25',
                'ten_cong_ty' => 'TechGalaxy Corporation',
                'tinh_trang' => 1
            ],
            [
                'id' => 48,
                'id_nha_tuyen_dung' => 11, // TechGalaxy Corporation
                'id_danh_muc' => 3, // Lập trình viên Mobile
                'id_dia_diem' => 3, // Đà Nẵng
                'tieu_de' => 'Tuyển dụng Lead Mobile Developer',
                'slug_tieu_de' => 'tuyen-dung-lead-mobile-developer',
                'mo_ta' => 'TechGalaxy Corporation tìm kiếm Lead Mobile Developer để dẫn dắt team phát triển ứng dụng di động đa nền tảng.',
                'yeu_cau' => '- Tối thiểu 6 năm kinh nghiệm Mobile Development\n- Thành thạo React Native/Flutter\n- Có kinh nghiệm với Native Development\n- Hiểu biết sâu về Mobile Architecture\n- Có kinh nghiệm quản lý team\n- Có khả năng định hướng technical\n- Tiếng Anh thành thạo',
                'luong_toi_thieu' => 50000000,
                'luong_toi_da' => 90000000,
                'ngay_dang' => '2024-04-24',
                'han_nop' => '2024-05-25',
                'ten_cong_ty' => 'TechGalaxy Corporation',
                'tinh_trang' => 1
            ],
            [
                'id' => 49,
                'id_nha_tuyen_dung' => 11, // TechGalaxy Corporation
                'id_danh_muc' => 4, // Kỹ sư DevOps
                'id_dia_diem' => 4, // Hải Phòng
                'tieu_de' => 'Tuyển dụng Senior DevOps Engineer',
                'slug_tieu_de' => 'tuyen-dung-senior-devops-engineer',
                'mo_ta' => 'TechGalaxy Corporation cần tuyển Senior DevOps Engineer để xây dựng và quản lý hạ tầng cloud native.',
                'yeu_cau' => '- Tối thiểu 5 năm kinh nghiệm DevOps\n- Chứng chỉ AWS/GCP Professional\n- Thành thạo Kubernetes, Istio\n- Có kinh nghiệm với GitOps\n- Hiểu biết sâu về Security\n- Có khả năng xây dựng DevOps culture\n- Kinh nghiệm với Large Scale Systems',
                'luong_toi_thieu' => 45000000,
                'luong_toi_da' => 85000000,
                'ngay_dang' => '2024-04-24',
                'han_nop' => '2024-05-25',
                'ten_cong_ty' => 'TechGalaxy Corporation',
                'tinh_trang' => 1
            ],
            [
                'id' => 50,
                'id_nha_tuyen_dung' => 11, // TechGalaxy Corporation
                'id_danh_muc' => 5, // Kỹ sư AI/ML
                'id_dia_diem' => 5, // Cần Thơ
                'tieu_de' => 'Tuyển dụng AI Research Engineer',
                'slug_tieu_de' => 'tuyen-dung-ai-research-engineer',
                'mo_ta' => 'TechGalaxy Corporation tìm kiếm AI Research Engineer để nghiên cứu và phát triển các giải pháp AI tiên tiến.',
                'yeu_cau' => '- Tối thiểu 4 năm kinh nghiệm AI/ML\n- PhD hoặc đang làm PhD về AI/ML\n- Có các công trình nghiên cứu đã công bố\n- Thành thạo Deep Learning Frameworks\n- Có kinh nghiệm với Large Language Models\n- Có khả năng đổi mới sáng tạo\n- Tiếng Anh học thuật tốt',
                'luong_toi_thieu' => 50000000,
                'luong_toi_da' => 100000000,
                'ngay_dang' => '2024-04-24',
                'han_nop' => '2024-05-25',
                'ten_cong_ty' => 'TechGalaxy Corporation',
                'tinh_trang' => 1
            ],
            [
                'id' => 51,
                'id_nha_tuyen_dung' => 11, // TechGalaxy Corporation
                'id_danh_muc' => 6, // Kỹ sư Data
                'id_dia_diem' => 6, // Bình Dương
                'tieu_de' => 'Tuyển dụng Lead Data Engineer',
                'slug_tieu_de' => 'tuyen-dung-lead-data-engineer',
                'mo_ta' => 'TechGalaxy Corporation cần tuyển Lead Data Engineer để xây dựng và quản lý data platform.',
                'yeu_cau' => '- Tối thiểu 6 năm kinh nghiệm Data Engineering\n- Thành thạo Big Data Technologies\n- Có kinh nghiệm với Data Lake/Warehouse\n- Hiểu biết sâu về Data Modeling\n- Có khả năng thiết kế Data Architecture\n- Kinh nghiệm quản lý team\n- Chứng chỉ Data Professional',
                'luong_toi_thieu' => 45000000,
                'luong_toi_da' => 85000000,
                'ngay_dang' => '2024-04-24',
                'han_nop' => '2024-05-25',
                'ten_cong_ty' => 'TechGalaxy Corporation',
                'tinh_trang' => 1
            ],
            [
                'id' => 52,
                'id_nha_tuyen_dung' => 11, // TechGalaxy Corporation
                'id_danh_muc' => 7, // Quản lý dự án IT
                'id_dia_diem' => 7, // Đồng Nai
                'tieu_de' => 'Tuyển dụng Senior Project Manager',
                'slug_tieu_de' => 'tuyen-dung-senior-project-manager',
                'mo_ta' => 'TechGalaxy Corporation tìm kiếm Senior Project Manager để quản lý các dự án phần mềm quy mô lớn.',
                'yeu_cau' => '- Tối thiểu 7 năm kinh nghiệm quản lý dự án\n- Chứng chỉ PMP, CSM\n- Có kinh nghiệm với Agile và Waterfall\n- Hiểu biết sâu về quy trình phát triển\n- Có khả năng quản lý nhiều dự án\n- Kỹ năng giao tiếp xuất sắc\n- Tiếng Anh thương mại thành thạo',
                'luong_toi_thieu' => 50000000,
                'luong_toi_da' => 95000000,
                'ngay_dang' => '2024-04-24',
                'han_nop' => '2024-05-25',
                'ten_cong_ty' => 'TechGalaxy Corporation',
                'tinh_trang' => 1
            ],
            [
                'id' => 53,
                'id_nha_tuyen_dung' => 11, // TechGalaxy Corporation
                'id_danh_muc' => 8, // Kiểm thử phần mềm
                'id_dia_diem' => 8, // Huế
                'tieu_de' => 'Tuyển dụng QA Automation Lead',
                'slug_tieu_de' => 'tuyen-dung-qa-automation-lead',
                'mo_ta' => 'TechGalaxy Corporation cần tuyển QA Automation Lead để xây dựng và quản lý framework testing tự động.',
                'yeu_cau' => '- Tối thiểu 5 năm kinh nghiệm QA Automation\n- Thành thạo Selenium, Cypress, Playwright\n- Có kinh nghiệm với CI/CD\n- Hiểu biết sâu về Testing Strategy\n- Có khả năng thiết kế Framework\n- Kinh nghiệm quản lý team\n- Kỹ năng problem-solving tốt',
                'luong_toi_thieu' => 40000000,
                'luong_toi_da' => 75000000,
                'ngay_dang' => '2024-04-24',
                'han_nop' => '2024-05-25',
                'ten_cong_ty' => 'TechGalaxy Corporation',
                'tinh_trang' => 1
            ],
            [
                'id' => 54,
                'id_nha_tuyen_dung' => 11, // TechGalaxy Corporation
                'id_danh_muc' => 9, // Thiết kế UI/UX
                'id_dia_diem' => 9, // Nha Trang
                'tieu_de' => 'Tuyển dụng Lead Product Designer',
                'slug_tieu_de' => 'tuyen-dung-lead-product-designer',
                'mo_ta' => 'TechGalaxy Corporation tìm kiếm Lead Product Designer để dẫn dắt team thiết kế và định hướng trải nghiệm người dùng.',
                'yeu_cau' => '- Tối thiểu 6 năm kinh nghiệm UI/UX Design\n- Portfolio ấn tượng\n- Có kinh nghiệm với Design Systems\n- Hiểu biết sâu về User Research\n- Có khả năng quản lý team design\n- Kỹ năng thuyết trình tốt\n- Tiếng Anh thành thạo',
                'luong_toi_thieu' => 45000000,
                'luong_toi_da' => 80000000,
                'ngay_dang' => '2024-04-24',
                'han_nop' => '2024-05-25',
                'ten_cong_ty' => 'TechGalaxy Corporation',
                'tinh_trang' => 1
            ],
            [
                'id' => 55,
                'id_nha_tuyen_dung' => 11, // TechGalaxy Corporation
                'id_danh_muc' => 10, // Bảo mật thông tin
                'id_dia_diem' => 10, // Vũng Tàu
                'tieu_de' => 'Tuyển dụng Security Architect',
                'slug_tieu_de' => 'tuyen-dung-security-architect',
                'mo_ta' => 'TechGalaxy Corporation cần tuyển Security Architect để thiết kế và đảm bảo an ninh cho hệ thống enterprise.',
                'yeu_cau' => '- Tối thiểu 7 năm kinh nghiệm Information Security\n- Chứng chỉ CISSP, CISM\n- Có kinh nghiệm với Cloud Security\n- Hiểu biết sâu về Security Architecture\n- Có khả năng đánh giá rủi ro\n- Kinh nghiệm với Compliance (ISO 27001)\n- Tiếng Anh chuyên ngành tốt',
                'luong_toi_thieu' => 55000000,
                'luong_toi_da' => 100000000,
                'ngay_dang' => '2024-04-24',
                'han_nop' => '2024-05-25',
                'ten_cong_ty' => 'TechGalaxy Corporation',
                'tinh_trang' => 1
            ],
            [
                'id' => 56,
                'id_nha_tuyen_dung' => 1, // TechVision JSC
                'id_danh_muc' => 2, // Lập trình viên Backend
                'id_dia_diem' => 4, // Hải Phòng
                'tieu_de' => 'Tuyển dụng Senior Backend Developer (Python)',
                'slug_tieu_de' => 'tuyen-dung-senior-backend-developer-python',
                'mo_ta' => 'TechVision JSC mở rộng văn phòng tại Hải Phòng, tìm kiếm Senior Backend Developer có kinh nghiệm với Python để phát triển các ứng dụng web quy mô lớn.',
                'yeu_cau' => '- Tối thiểu 5 năm kinh nghiệm với Python\n- Thành thạo Django/Flask\n- Có kinh nghiệm với Microservices\n- Hiểu biết sâu về Database Design\n- Có kinh nghiệm với AWS Services\n- Có khả năng tối ưu hiệu suất\n- Tiếng Anh thành thạo',
                'luong_toi_thieu' => 35000000,
                'luong_toi_da' => 60000000,
                'ngay_dang' => '2024-04-25',
                'han_nop' => '2024-05-26',
                'ten_cong_ty' => 'TechVision JSC',
                'tinh_trang' => 1
            ],
            [
                'id' => 57,
                'id_nha_tuyen_dung' => 1, // TechVision JSC
                'id_danh_muc' => 5, // Kỹ sư AI/ML
                'id_dia_diem' => 5, // Cần Thơ
                'tieu_de' => 'Tuyển dụng Machine Learning Team Lead',
                'slug_tieu_de' => 'tuyen-dung-machine-learning-team-lead',
                'mo_ta' => 'TechVision JSC mở rộng team AI/ML tại Cần Thơ, tìm kiếm Team Lead có kinh nghiệm để dẫn dắt các dự án ML.',
                'yeu_cau' => '- Tối thiểu 6 năm kinh nghiệm ML/AI\n- Thành thạo với các ML frameworks\n- Có kinh nghiệm quản lý team\n- Hiểu biết sâu về Deep Learning\n- Có kinh nghiệm với MLOps\n- Có các công trình nghiên cứu\n- Tiếng Anh chuyên ngành tốt',
                'luong_toi_thieu' => 50000000,
                'luong_toi_da' => 90000000,
                'ngay_dang' => '2024-04-25',
                'han_nop' => '2024-05-26',
                'ten_cong_ty' => 'TechVision JSC',
                'tinh_trang' => 1
            ],
            [
                'id' => 58,
                'id_nha_tuyen_dung' => 1, // TechVision JSC
                'id_danh_muc' => 4, // Kỹ sư DevOps
                'id_dia_diem' => 6, // Bình Dương
                'tieu_de' => 'Tuyển dụng DevOps Team Lead',
                'slug_tieu_de' => 'tuyen-dung-devops-team-lead',
                'mo_ta' => 'TechVision JSC mở rộng team DevOps tại Bình Dương, tìm kiếm Team Lead có kinh nghiệm để xây dựng và quản lý hạ tầng cloud.',
                'yeu_cau' => '- Tối thiểu 6 năm kinh nghiệm DevOps\n- Chứng chỉ AWS/Azure Professional\n- Có kinh nghiệm quản lý team\n- Thành thạo với Kubernetes\n- Có kinh nghiệm với Security\n- Có khả năng tối ưu chi phí\n- Tiếng Anh thành thạo',
                'luong_toi_thieu' => 45000000,
                'luong_toi_da' => 85000000,
                'ngay_dang' => '2024-04-25',
                'han_nop' => '2024-05-26',
                'ten_cong_ty' => 'TechVision JSC',
                'tinh_trang' => 1
            ],
            [
                'id' => 59,
                'id_nha_tuyen_dung' => 5, // MobileApp Studio
                'id_danh_muc' => 3, // Lập trình viên Mobile
                'id_dia_diem' => 7, // Đồng Nai
                'tieu_de' => 'Tuyển dụng Flutter Developer',
                'slug_tieu_de' => 'tuyen-dung-flutter-developer',
                'mo_ta' => 'MobileApp Studio mở rộng team tại Đồng Nai, tìm kiếm Flutter Developer có kinh nghiệm phát triển ứng dụng đa nền tảng.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm Flutter\n- Thành thạo Dart programming\n- Có kinh nghiệm với state management\n- Hiểu biết về CI/CD cho mobile\n- Có kinh nghiệm với Firebase\n- Có khả năng tối ưu performance\n- Ưu tiên có kinh nghiệm native',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-25',
                'han_nop' => '2024-05-26',
                'ten_cong_ty' => 'MobileApp Studio',
                'tinh_trang' => 1
            ],
            [
                'id' => 60,
                'id_nha_tuyen_dung' => 5, // MobileApp Studio
                'id_danh_muc' => 3, // Lập trình viên Mobile
                'id_dia_diem' => 8, // Huế
                'tieu_de' => 'Tuyển dụng React Native Developer',
                'slug_tieu_de' => 'tuyen-dung-react-native-developer',
                'mo_ta' => 'MobileApp Studio mở rộng team tại Huế, tìm kiếm React Native Developer có kinh nghiệm phát triển ứng dụng mobile.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm React Native\n- Thành thạo JavaScript/TypeScript\n- Có kinh nghiệm với Redux\n- Hiểu biết về native modules\n- Có kinh nghiệm với push notification\n- Có khả năng debug hiệu quả\n- Ưu tiên có kinh nghiệm React',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-25',
                'han_nop' => '2024-05-26',
                'ten_cong_ty' => 'MobileApp Studio',
                'tinh_trang' => 1
            ],
            [
                'id' => 61,
                'id_nha_tuyen_dung' => 5, // MobileApp Studio
                'id_danh_muc' => 3, // Lập trình viên Mobile
                'id_dia_diem' => 9, // Nha Trang
                'tieu_de' => 'Tuyển dụng Android Developer (Kotlin)',
                'slug_tieu_de' => 'tuyen-dung-android-developer-kotlin-2',
                'mo_ta' => 'MobileApp Studio mở rộng team tại Nha Trang, tìm kiếm Android Developer có kinh nghiệm phát triển ứng dụng native.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm Android\n- Thành thạo Kotlin\n- Có kinh nghiệm với Jetpack Compose\n- Hiểu biết về Material Design 3\n- Có kinh nghiệm với Room Database\n- Có khả năng tối ưu performance\n- Ưu tiên có kinh nghiệm CI/CD',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-25',
                'han_nop' => '2024-05-26',
                'ten_cong_ty' => 'MobileApp Studio',
                'tinh_trang' => 1
            ],
            [
                'id' => 62,
                'id_nha_tuyen_dung' => 5, // MobileApp Studio
                'id_danh_muc' => 3, // Lập trình viên Mobile
                'id_dia_diem' => 10, // Vũng Tàu
                'tieu_de' => 'Tuyển dụng iOS Developer (SwiftUI)',
                'slug_tieu_de' => 'tuyen-dung-ios-developer-swiftui',
                'mo_ta' => 'MobileApp Studio mở rộng team tại Vũng Tàu, tìm kiếm iOS Developer có kinh nghiệm phát triển ứng dụng với SwiftUI.',
                'yeu_cau' => '- Tối thiểu 3 năm kinh nghiệm iOS\n- Thành thạo SwiftUI\n- Có kinh nghiệm với Combine\n- Hiểu biết về App Architecture\n- Có kinh nghiệm với Core Data\n- Có khả năng tối ưu memory\n- Ưu tiên có kinh nghiệm UIKit',
                'luong_toi_thieu' => 25000000,
                'luong_toi_da' => 45000000,
                'ngay_dang' => '2024-04-25',
                'han_nop' => '2024-05-26',
                'ten_cong_ty' => 'MobileApp Studio',
                'tinh_trang' => 1
            ],
            [
                'id' => 63,
                'id_nha_tuyen_dung' => 5, // MobileApp Studio
                'id_danh_muc' => 3, // Lập trình viên Mobile
                'id_dia_diem' => 2, // Hồ Chí Minh
                'tieu_de' => 'Tuyển dụng Mobile Team Lead',
                'slug_tieu_de' => 'tuyen-dung-mobile-team-lead',
                'mo_ta' => 'MobileApp Studio tìm kiếm Mobile Team Lead có kinh nghiệm để dẫn dắt team phát triển đa nền tảng tại HCM.',
                'yeu_cau' => '- Tối thiểu 6 năm kinh nghiệm Mobile\n- Thành thạo iOS và Android\n- Có kinh nghiệm quản lý team\n- Hiểu biết sâu về Mobile Architecture\n- Có kinh nghiệm với Cross-platform\n- Có khả năng định hướng kỹ thuật\n- Tiếng Anh thành thạo',
                'luong_toi_thieu' => 45000000,
                'luong_toi_da' => 80000000,
                'ngay_dang' => '2024-04-25',
                'han_nop' => '2024-05-26',
                'ten_cong_ty' => 'MobileApp Studio',
                'tinh_trang' => 1
            ]
        ]);
    }
}
