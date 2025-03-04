@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-12 col-md-8" style="    width: 100%;"> <!-- Thay col-md-8 thành col-12 col-md-8 -->
            <div class="card">
                <div class="card-header">Liệt kê chapter</div>

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
                                    <th scope="col">Tên chapter</th>
                                    <th scope="col" class="d-none d-lg-table-cell">Slug chapter</th> <!-- Ẩn trên mobile nhỏ -->
                                    <th scope="col" class="d-none d-md-table-cell">Tóm tắt</th> <!-- Ẩn trên mobile -->
                                    <th scope="col">Thuộc truyện</th>
                                    <th scope="col">Kích hoạt</th>
                                    <th scope="col">Quản lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chapter as $key => $chap)
                                    <tr>
                                        <th scope="row">{{ $key }}</th>
                                        <td>{{ $chap->tieude }}</td>
                                        <td class="d-none d-lg-table-cell">{{ $chap->slug_chapter }}</td>
                                        <td class="d-none d-md-table-cell">{{ $chap->tomtat }}</td>
                                        <td>{{ $chap->truyen->tentruyen }}</td>
                                        <td>
                                            @if ($chap->kichhoat == 0)
                                                <span class="text text-success">Kích hoạt</span>
                                            @else
                                                <span class="text text-danger">Không kích hoạt</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column flex-md-row gap-2">
                                                <a href="{{route('chapter.edit', [$chap->id])}}" 
                                                   class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{route('chapter.destroy', [$chap->id])}}" 
                                                      method="post" 
                                                      class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="return confirm('Bạn muốn xóa chapter này không ?')" 
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