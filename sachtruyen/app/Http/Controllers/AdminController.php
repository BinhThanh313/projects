<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Truyen;

class AdminController extends Controller
{
    public function indexTruyen()
    {
        // Lấy tất cả truyện cùng với danh mục và số chapter
        $truyen = Truyen::with('danhmuctruyen')->withCount('chapters')->get();
        return view('admin.truyen.index', compact('truyen'));
    }
}