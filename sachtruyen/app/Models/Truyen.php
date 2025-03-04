<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    use HasFactory;

    public $timestamps = false; // Sửa lỗi chính tả: "timetamps" -> "timestamps"
    protected $fillable = [
        'tentruyen', 'slug_truyen', 'tomtat', 'kichhoat', 'danhmuc_id', 'hinhanh', 'tacgia' // Thêm 'tacgia' nếu cần
    ];

    protected $primaryKey = 'id';
    protected $table = 'truyen';

    // Mối quan hệ với DanhMucTruyen
    public function danhmuctruyen()
    {
        return $this->belongsTo(DanhMucTruyen::class, 'danhmuc_id', 'id');
    }

    // Mối quan hệ với Chapter (sửa tên thành "chapters" để dùng với withCount)
    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'truyen_id', 'id');
    }
}