<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMucTruyen;
use App\Models\Truyen;
use App\Models\Chapter;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    public function home() {
        $danhmuc = DanhMucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Truyen::orderBy('id', 'DESC')->where('kichhoat', 0)->get();
        // Lấy top 6 truyện có lượt xem cao nhất
        $top_truyen = Truyen::orderBy('id', 'DESC')->where('kichhoat', 0)->limit(6)->get();
        return view('pages.home')->with(compact('danhmuc', 'truyen', 'top_truyen'));
    }
    public function danhmuc($slug) {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $danhmuc_id = DanhmucTruyen::where('slug_danhmuc', $slug)->first();
        $tendanhmuc = $danhmuc_id->tendanhmuc;
        $truyen = Truyen::orderBy('id', 'DESC')->where('kichhoat', 0)->where('danhmuc_id', $danhmuc_id->id)->get();
        return view('pages.danhmuc')->with(compact('danhmuc', 'truyen', 'tendanhmuc'));
    }
    public function xemtruyen($slug) {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Truyen::with('danhmuctruyen')->where('slug_truyen', $slug)->where('kichhoat', 0)->first();
        $chapter = Chapter::with('truyen')->orderBy('id', 'ASC')->where('truyen_id', $truyen->id)->get();
        $chapter_dau = Chapter::with('truyen')->orderBy('id', 'ASC')->where('truyen_id', $truyen->id)->first();
        $cungdanhmuc = Truyen::with('danhmuctruyen')->where('danhmuc_id', $truyen-> danhmuctruyen->id)->whereNotIn('id',[$truyen->id])->get();
        return view('pages.truyen')->with(compact('danhmuc', 'truyen', 'chapter', 'cungdanhmuc', 'chapter_dau'));
    }
    public function xemchapter($slug) {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Chapter::where('slug_chapter', $slug)->first();
        $truyen_breadcrumb = Truyen::where('id', $truyen->truyen_id)->first();
        $chapter = Chapter::with('truyen')->where('slug_chapter', $slug)->where('truyen_id', $truyen->truyen_id)->first();
        $all_chapter = Chapter::with('truyen')->orderBy('id', 'ASC')->where('truyen_id', $truyen->truyen_id)->get();
        $next_chapter = Chapter::where('id', '>', $chapter->id)->where('truyen_id', $truyen->truyen_id)->min('slug_chapter');
        $max_id = Chapter::where('truyen_id', $truyen->truyen_id)->orderBy('id', 'DESC')->first();
        $min_id = Chapter::where('truyen_id', $truyen->truyen_id)->orderBy('id', 'ASC')->first();
        $prev_chapter = Chapter::where('id', '<', $chapter->id)->where('truyen_id', $truyen->truyen_id)->max('slug_chapter');        
        return view("pages.chapter")->with(compact('danhmuc','chapter', 'all_chapter', 'next_chapter', 'prev_chapter', 'max_id', 'min_id', 'truyen_breadcrumb'));
    }

    public function timkiem(){
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $tukhoa = $_GET['tukhoa'];
        $truyen = Truyen::with('danhmuctruyen')->where('tentruyen', 'LIKE', '%'.$tukhoa.'%')->orWhere('tacgia', 'LIKE', '%'.$tukhoa.'%')->orWhere('tomtat', 'LIKE', '%'.$tukhoa.'%')->get();
        return view('pages.timkiem')->with(compact('danhmuc', 'truyen', 'tukhoa'));
    }
}
