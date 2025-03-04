@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="    width: 100%;">
            <div class="card">
                <div class="card-header">Quản lý</div>
            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Danh sách truyện</h3>
                    @if(isset($truyen) && $truyen->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tên truyện</th>
                                    <th>Tác giả</th>
                                    <th>Danh mục truyện</th>
                                    <th>Số chapter</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($truyen as $item)
                                <tr>
                                    <td>{{ $item->tentruyen }}</td>
                                    <td>{{ $item->tacgia ?? 'Chưa có tác giả' }}</td>
                                    <td>{{ $item->danhmuctruyen->tendanhmuc ?? 'Chưa có danh mục' }}</td>
                                    <td>{{ $item->chapters_count }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>Không có truyện nào để hiển thị.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection