<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truyen;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $truyen = Truyen::with('danhmuctruyen')->withCount('chapters')->get();
        return view('home', compact('truyen'));
    }
}
