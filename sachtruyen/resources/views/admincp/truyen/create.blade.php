@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm truyện</div>

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

                    <form method="POST" action="{{route('truyen.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên truyện</label>
                            <input type="text" class="form-control" value="{{old('tendanhmuc')}}" onkeyup="ChangeToSlug()" name="tentruyen" id="slug" aria-describedby="emailHelp" placeholder="Tên truyện">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug truyện</label>
                            <input type="text" class="form-control" value="{{ old('slug_truyen') }}" name="slug_truyen" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug truyện">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tóm tắt truyện</label>
                            <textarea class="form-control" name="tomtat" rows="5" style="resize: none"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh mục truyện</label>
                            <select name="danhmuc" class="custom-select" style="display: block; width: 100%; height: 36px; padding: 0.375rem 0.75rem; font-size: 0.9rem; font-weight: 400; line-height: 1.6; color: var(--bs-body-color); border: var(--bs-border-width) solid var(--bs-border-color); border-radius: var(--bs-border-radius); transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; appearance: none; background-color: var(--bs-body-bg); background-clip: padding-box;">
                                @foreach ($danhmuc as $key => $muc)
                                <option value="{{ $muc->id }}">{{ $muc->tendanhmuc }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh truyện</label>
                            <input type="file" class="form-control-file" name="hinhanh" style="display: block;">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kích hoạt</label>
                            <select name="kichhoat" class="custom-select" style="display: block; width: 100%; height: 36px; padding: 0.375rem 0.75rem; font-size: 0.9rem; font-weight: 400; line-height: 1.6; color: var(--bs-body-color); border: var(--bs-border-width) solid var(--bs-border-color); border-radius: var(--bs-border-radius); transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; appearance: none; background-color: var(--bs-body-bg); background-clip: padding-box;">
                                <option value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                            </select>
                        </div>
                        <button type="submit" name="themtruyen" class="btn btn-primary" style="margin-top: 16px; width: 100%;">Thêm</button>
                    </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection