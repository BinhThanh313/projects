<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TruyenSeeder extends Seeder
{
    public function run()
    {
        DB::table('truyen')->insert([
            [
                'id' => 3, 
                'tentruyen' => 'Nghìn Lẻ Một Đêm', 
                'tacgia' => 'Tác giả dân gian', 
                'tomtat' => 'Nghìn lẻ một đêm là một tập hợp các câu chuyện dân gian Trung Đông nổi tiếng, có nguồn gốc từ Ba Tư, Ấn Độ và Ả Rập.', 
                'danhmuc_id' => 8, 
                'hinhanh' => 'nlmd34.jpg', 
                'slug_truyen' => 'nghin_le_mot_dem', 
                'kichhoat' => 0, 
                'created_at' => '2025-02-23 21:28:26', 
                'updated_at' => '2025-03-03 07:51:05'
            ],
            [
                'id' => 4, 
                'tentruyen' => 'Bảy viên ngọc rồng', 
                'tacgia' => 'akira toriyama', 
                'tomtat' => 'Nội dung truyện kể về chú bé tên Son Goku.', 
                'danhmuc_id' => 7, 
                'hinhanh' => 'db45.jpg', 
                'slug_truyen' => 'bay_vien_ngoc_rong', 
                'kichhoat' => 0, 
                'created_at' => '2025-02-24 09:22:37', 
                'updated_at' => '2025-02-28 09:14:10'
            ],
            [
                'id' => 5, 
                'tentruyen' => 'Truyện cổ dân gian Việt Nam', 
                'tacgia' => 'Tổng hợp nhiều tác giả', 
                'tomtat' => 'Tổng hợp truyện cổ dân gian Việt Nam', 
                'danhmuc_id' => 8, 
                'hinhanh' => 'tdgvn54.jpg', 
                'slug_truyen' => 'truyen_co_dan_gian_viet_nam', 
                'kichhoat' => 0, 
                'created_at' => '2025-03-02 05:53:28', 
                'updated_at' => '2025-03-02 05:59:01'
            ],
            [
                'id' => 6, 
                'tentruyen' => 'Truyện cổ Grimm', 
                'tacgia' => 'Anh em Grimm', 
                'tomtat' => 'Truyện cổ Grimm là tập hợp những câu chuyện dân gian Đức do anh em Jacob và Wilhelm Grimm sưu tầm.', 
                'danhmuc_id' => 8, 
                'hinhanh' => 'grim0.jpg', 
                'slug_truyen' => 'truyen_co_grimm', 
                'kichhoat' => 0, 
                'created_at' => '2025-03-02 06:03:53', 
                'updated_at' => '2025-03-02 06:03:53'
            ],
            [
                'id' => 7, 
                'tentruyen' => 'Nhất niệm vĩnh hằng', 
                'tacgia' => 'Nhĩ Căn', 
                'tomtat' => 'Một thiếu niên với tham vọng trường sinh, từng bước bước vào con đường tu tiên đầy nguy hiểm.', 
                'danhmuc_id' => 7, 
                'hinhanh' => 'nnvh67.jpg', 
                'slug_truyen' => 'nhat_niem_vinh_hang', 
                'kichhoat' => 0, 
                'created_at' => null, 
                'updated_at' => null
            ],
            [
                'id' => 8, 
                'tentruyen' => 'Toàn Chức Cao Thủ', 
                'tacgia' => 'Hồ Điệp Lam', 
                'tomtat' => 'Truyện xoay quanh thế giới game với nhân vật chính là một cao thủ eSports, bị trục xuất khỏi đội tuyển nhưng sau đó trở lại đỉnh cao.', 
                'danhmuc_id' => 7, 
                'hinhanh' => 'tcct21.jpg', 
                'slug_truyen' => 'toan_chuc_cao_thu', 
                'kichhoat' => 0, 
                'created_at' => null, 
                'updated_at' => null
            ],
            [
                'id' => 9, 
                'tentruyen' => 'Thế Giới Hoàn Mỹ', 
                'tacgia' => 'Thần Đông', 
                'tomtat' => 'Hành trình của một thiếu niên thiên tài từ khi còn bé đến lúc trở thành cường giả vô địch, khám phá những bí mật cổ xưa.', 
                'danhmuc_id' => 7, 
                'hinhanh' => 'tghm65.jpg', 
                'slug_truyen' => 'the_gioi_hoan_my', 
                'kichhoat' => 0, 
                'created_at' => null, 
                'updated_at' => null
            ],
            [
                'id' => 10, 
                'tentruyen' => 'Thiên Đạo Đồ Thư Quán', 
                'tacgia' => 'Hoành Tảo Thiên Nhai', 
                'tomtat' => 'Một giáo viên xuyên không đến thế giới võ giả, sử dụng "hệ thống thư viện" để đánh bại kẻ thù và trở thành sư phụ mạnh nhất.', 
                'danhmuc_id' => 7, 
                'hinhanh' => 'thien-dao-do-thu-quan28.jpg', 
                'slug_truyen' => 'thien_dao_do_thu_quan', 
                'kichhoat' => 0, 
                'created_at' => null, 
                'updated_at' => null
            ],
            [
                'id' => 11, 
                'tentruyen' => 'Thôn Phệ Tinh Không', 
                'tacgia' => 'Ngã Cật Tây Hồng Thị', 
                'tomtat' => 'Một thế giới tương lai nơi con người chiến đấu với quái thú, khám phá vũ trụ và trở thành cường giả mạnh nhất.', 
                'danhmuc_id' => 7, 
                'hinhanh' => 'image-168274012743473.jpg', 
                'slug_truyen' => 'thon_phe_tinh_khong', 
                'kichhoat' => 0, 
                'created_at' => null, 
                'updated_at' => null
            ],
        ]);
    }
}