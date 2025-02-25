@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm danh mục truyện</div>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <form method="POST" action="{{route('danhmuc.store')}}">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" class="form-control" value="{{old('tendanhmuc')}}" onkeyup="ChangeToSlug()" name = "tendanhmuc" id="slug" aria-describedby="emailHelp" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug danh mục</label>
                            <input type="text" class="form-control" value="{{old('slug_danhmuc')}}" name = "slug_danhmuc" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả danh mục</label>
                            <input type="text" class="form-control" value="{{old('mota')}}" name = "mota" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mô tả danh mục">
                       
                            <label for="exampleInputEmail1">Mô tả danh mục</label>
                            <select name = "kichhoat" class="custom-select" style="display: block; width: 100%; height: 36px; padding: 0.375rem 0.75rem; font-size: 0.9rem; font-weight: 400; line-height: 1.6; color: var(--bs-body-color); border: var(--bs-border-width) solid var(--bs-border-color); border-radius: var(--bs-border-radius); transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; appearance: none; background-color: var(--bs-body-bg); background-clip: padding-box;">
                                <option value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                            </select>
                        </div>
                        
                        <button type="submit" name = "themdanhmuc" class="btn btn-primary" style="margin-top: 16px; width: 100%;">Thêm</button>
                    </form>
                    
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
