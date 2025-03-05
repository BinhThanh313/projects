<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhmucSeeder extends Seeder
{
    public function run()
    {
        DB::table('danhmuc')->insert([
            ['id' => 1, 'tendanhmuc' => 'Truyện trinh thám', 'slug_danhmuc' => 'truyen_trinh_tham', 'mota' => 'sưu tầm', 'kichhoat' => 0],
            ['id' => 3, 'tendanhmuc' => 'Truyện cười', 'slug_danhmuc' => 'truyen_cuoi', 'mota' => 'sưu tầm', 'kichhoat' => 0],
            ['id' => 6, 'tendanhmuc' => 'Truyện 18+', 'slug_danhmuc' => 'truyen_18', 'mota' => 'sưu tầm', 'kichhoat' => 0],
            ['id' => 7, 'tendanhmuc' => 'Truyện hành động', 'slug_danhmuc' => 'truyen_hanh_dong', 'mota' => 'sưu tầm', 'kichhoat' => 0],
            ['id' => 8, 'tendanhmuc' => 'Truyện cổ tích', 'slug_danhmuc' => 'truyen_co_tich', 'mota' => 'sưu tầm', 'kichhoat' => 0],
            ['id' => 9, 'tendanhmuc' => 'Truyện tình cảm', 'slug_danhmuc' => 'truyen_tinh_cam', 'mota' => 'sưu tầm', 'kichhoat' => 0],
        ]);
    }
}