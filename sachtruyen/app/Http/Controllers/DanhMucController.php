<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMucTruyen;
use GuzzleHttp\Promise\Create;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmuctruyen = DanhmucTruyen::orderBy('id', 'DESC')->get();
        return view ('admincp.danhmuctruyen.index') -> with(compact('danhmuctruyen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admincp.danhmuctruyen.create');
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
    [
            'tendanhmuc'=> 'required|unique:danhmuc|max:255',
            'slug_danhmuc'=> 'required|unique:danhmuc|max:255',
            'mota' => 'required|max:255',
            'kichhoat' => 'required',
           ],

   ['slug_danhmuc.required'=> 'Slug danh mục đã có, vui lòng chọn slug khác',
            'tendanhmuc.unique'=> 'Tên danh mục đã có, vui lòng chọn tên khác',
            'tendanhmuc.required'=> 'Phải có tên danh mục',
            'mota.required' => 'Phải có mô tả danh mục',
           ]
    
        );
        $danhmuctruyen = new DanhmucTruyen;
        $danhmuctruyen-> tendanhmuc = $data['tendanhmuc'];
        $danhmuctruyen-> slug_danhmuc = $data['slug_danhmuc'];
        $danhmuctruyen-> mota = $data['mota'];
        $danhmuctruyen-> kichhoat = $data['kichhoat'];
        $danhmuctruyen-> save();
        return redirect() -> back() -> with('status', 'Thêm danh mục thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $danhmuc = DanhmucTruyen::find($id);
        return view ('admincp.danhmuctruyen.edit') -> with(compact('danhmuc'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                    'tendanhmuc'=> 'required|max:255',
                    'slug_danhmuc'=> 'required|max:255',
                    'mota' => 'required|max:255',
                    'kichhoat' => 'required',
                   ],
        
           ['slug_danhmuc.required'=> 'Phải có slug danh mụcs',
                    'tendanhmuc.required'=> 'Phải có tên danh mục',
                    'mota.required' => 'Phải có mô tả danh mục',
                   ]
            
                );
                $danhmuctruyen = DanhmucTruyen::find($id);
                $danhmuctruyen-> tendanhmuc = $data['tendanhmuc'];
                $danhmuctruyen-> slug_danhmuc = $data['slug_danhmuc'];
                $danhmuctruyen-> mota = $data['mota'];
                $danhmuctruyen-> kichhoat = $data['kichhoat'];
                $danhmuctruyen-> save();
                return redirect() -> back() -> with('status', 'Thêm danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DanhmucTruyen::find($id)->delete();
        return redirect() -> back() -> with('status', 'Xóa danh mục thành công');
    }
}
