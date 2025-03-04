@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8" style="    width: 100%;"> <!-- Thay col-md-8 thành col-12 col-md-8 -->
            <div class="card">
                <div class="card-header">Liệt kê truyện</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Thêm wrapper cho table để scroll ngang trên mobile -->
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên truyện</th>
                                    <th scope="col" class="d-none d-md-table-cell">Hình ảnh</th> <!-- Ẩn trên mobile -->
                                    <th scope="col" class="d-none d-lg-table-cell">Slug truyện</th> <!-- Ẩn trên mobile nhỏ -->
                                    <th scope="col" class="d-none d-md-table-cell">Tóm tắt</th> <!-- Ẩn trên mobile -->
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Kích hoạt</th>
                                    <th scope="col">Quản lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_truyen as $key => $truyen)
                                    <tr>
                                        <th scope="row">{{ $key }}</th>
                                        <td>{{ $truyen->tentruyen }}</td>
                                        <td class="d-none d-md-table-cell">
                                            <img src="{{ asset('public/uploads/truyen/'.$truyen->hinhanh) }}" 
                                                 class="img-fluid" 
                                                 style="max-height: 200px; max-width: 150px;" 
                                                 alt="{{ $truyen->tentruyen }}">
                                        </td>
                                        <td class="d-none d-lg-table-cell">{{ $truyen->slug_truyen }}</td>
                                        <td class="d-none d-md-table-cell">{{ $truyen->tomtat }}</td>
                                        <td>{{ $truyen->danhmuctruyen->tendanhmuc }}</td>
                                        <td>
                                            @if ($truyen->kichhoat == 0)
                                                <span class="text text-success">Kích hoạt</span>
                                            @else
                                                <span class="text text-danger">Không kích hoạt</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column flex-md-row gap-2">
                                                <a href="{{route('truyen.edit', [$truyen->id])}}" 
                                                   class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{route('truyen.destroy', [$truyen->id])}}" 
                                                      method="post" 
                                                      class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="return confirm('Bạn muốn xóa truyện này không ?')" 
                                                            class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Thêm CSS tùy chỉnh nếu cần */
    @media (max-width: 768px) {
        .card-header {
            font-size: 1.1rem;
        }
        
        .btn-sm {
            width: 100%;
        }
    }
</style>
@endsection