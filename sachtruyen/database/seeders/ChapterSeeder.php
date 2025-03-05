<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterSeeder extends Seeder
{
    public function run()
    {
        DB::table('chapter')->insert([
            [
                'id' => 1,
                'truyen_id' => 3,
                'tieude' => 'Chapter 1: Nàng Sassanides',
                'tomtat' => 'Ông vua già và mưu trí',
                'noidung' => '<p>Sử sách thời Sassanides, thời của những ông vua quốc gia Ba Tư cổ xưa, đất nước có biên cương mở rộng tới tận Ấn Độ và các đảo phụ thuộc lớn nhỏ, trải ra tới phía bên kia sông Hằng và phần đất rộng lớn của Trung Quốc bao la, chép lại rằng ngày xưa có một ông vua của cái quốc gia hùng mạnh đó, nổi tiếng là một đấng quân vương anh minh, đức độ.<br />...</p>', // Dữ liệu đầy đủ từ file SQL
                'kichhoat' => 0,
                'slug_chapter' => 'chapter_1_nang_sassanides'
            ],
            [
                'id' => 70,
                'truyen_id' => 11,
                'tieude' => 'Chương 3: Thành Thị Giang Nam',
                'tomtat' => 'Chương 3: Thành Thị Giang Nam',
                'noidung' => '<p>&ndash; Virus RR vừa xuất hiện đã nhanh chóng lan truyền ra toàn cầu. Tất cả sinh mạng trên toàn cầu&hellip; bất kể là nhân loại hay chim bay cá nhảy, chỉ cần có hô hấp thì đều lây virus RR.<br />...</p>', // Dữ liệu đầy đủ từ file SQL
                'kichhoat' => 0,
                'slug_chapter' => 'chuong_3_thanh_thi_giang_nam'
            ],
        ]);
    }
}