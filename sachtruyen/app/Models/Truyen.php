<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Truyen extends Model
{
    use HasFactory;

    public $timetamps = false;
    protected $fillable = [
         'tentruyen', 'slug_truyen', 'tomtat', 'kichhoat', 'danhmuc_id', 'hinhanh'
     ];

    protected $primaryKey = 'id';
    protected $table = 'truyen';

    public function danhmuctruyen(){
        return $this->belongsTo('App\Models\DanhMucTruyen', 'danhmuc_id', 'id');
    }

    public function chapter(){
        return $this->hasMany('App\Models\Chapter', 'truyen_id', 'id');
    }
}
