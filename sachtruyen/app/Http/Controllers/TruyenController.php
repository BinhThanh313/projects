<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMucTruyen;
use App\Models\Truyen;
class TruyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_truyen = Truyen:: with('danhmuctruyen')->orderBy('id', 'DESC')->get();
        return view ('admincp.truyen.index') ->with(compact('list_truyen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmuc = DanhMucTruyen::orderBy('id', 'DESC')->get();
        return view ('admincp.truyen.create')-> with(compact('danhmuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tentruyen' => 'required|unique:truyen|max:255',
            'slug_truyen' => 'required|unique:truyen|max:255',
            'hinhanh' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100',
            'tomtat' => 'required',
            'kichhoat' => 'required',
            'danhmuc' => 'required',
        ], [
            'slug_truyen.unique' => 'Slug truyện đã có, vui lòng chọn slug khác',
            'tentruyen.unique' => 'Tên truyện đã có, vui lòng chọn tên khác',
            'tentruyen.required' => 'Phải có tên truyện',
            'tomtat.required' => 'Phải có mô tả truyện',
            'hinhanh.required' => 'Phải có hình ảnh truyện',
        ]);
    
        $truyen = new Truyen;
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->tomtat = $data['tomtat'];
        $truyen->kichhoat = $data['kichhoat'];
        $truyen->danhmuc_id = $data['danhmuc'];
    
        if ($request->hasFile('hinhanh')) {
            $get_image = $request->file('hinhanh');
            $path = 'public/uploads/truyen/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $truyen->hinhanh = $new_image;
        }
    
        $truyen->save();
        return redirect()->back()->with('status', 'Thêm truyện thành công');
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
        $truyen = Truyen::find($id);
        $danhmuc = DanhMucTruyen::orderBy('id', 'DESC')->get();
        return view('admincp.truyen.edit')->with(compact('truyen', 'danhmuc'));
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
        $data = $request->validate([
            'tentruyen' => 'required',
            'slug_truyen' => 'required',
            'hinhanh' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100',
            'tomtat' => 'required',
            'kichhoat' => 'required',
            'danhmuc' => 'required',
        ], [
            'slug_truyen.required' => 'Slug truyện đã có, vui lòng chọn slug khác',
            'tentruyen.unique' => 'Tên truyện đã có, vui lòng chọn tên khác',
            'tentruyen.required' => 'Phải có tên truyện',
            'slug_truyen.required' => 'Phải có slug truyện',
            'tomtat.required' => 'Phải có mô tả truyện',
            'hinhanh.required' => 'Phải có hình ảnh truyện',
        ]);

        $truyen = Truyen::find($id);
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->tomtat = $data['tomtat'];
        $truyen->kichhoat = $data['kichhoat'];
        $truyen->danhmuc_id = $data['danhmuc'];
    
        if ($request->hasFile('hinhanh')) {
            $get_image = $request->file('hinhanh');
            if($get_image) {
                $path = 'public/uploads/truyen/'.$truyen->hinhanh;
                if(file_exists($path)) {
                    unlink($path);
                }
            }
            $path = 'public/uploads/truyen/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $truyen->hinhanh = $new_image;
        }
    
        $truyen->save();
        return redirect()->back()->with('status', 'Cập nhật truyện thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $truyen = Truyen::find($id);
        $path = 'public/uploads/truyen/'.$truyen->hinhanh;
        if(file_exists($path)) {
            unlink($path);
        }
        Truyen::find($id) -> delete();
        return redirect() -> back() -> with('status', 'Xóa truyện thành công');
    }
}
