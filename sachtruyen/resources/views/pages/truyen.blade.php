@extends('../layout')

@section('content')
<!--  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-3">
                <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" >
            </div>
            <div class="col-md-9">
                <style type="text/css">
                    .infotruyen{list-style-type: none;}
                </style>
                <ul class="infotruyen">
                    <li>Tên truyện: {{ $truyen->tentruyen }}</li>
                    <li>Tác giả: {{ $truyen->tacgia }}</li>
                    <li>Danh mục truyện: <a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{ $truyen->danhmuctruyen->tendanhmuc }}</a></li>
                    <li>Số chapter: 200</li>
                    <li>Số lượt xem: 2000</li>
                    <li><a href="#">Xem mục lục</a></li>
                    @if ($chapter_dau)
                    <li><a href="{{ url('xem-chapter/'.$chapter_dau->slug_chapter) }}" class="btn btn-primary">Đọc Online</a></li>  
                    @else
                    <li><a href="#" class="btn btn-danger">Truyện đang cập nhật</a></li>                  
                    @endif
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <p>{ !! $chapter->tomtat !! }</p>
        </div>
        <hr>
        <h4>Mục lục</h4>
        <ul class="mucluctruyen">
            @php
            $mucluc = count($chapter);
            @endphp
            @if($mucluc > 0)
                @foreach ($chapter as $key => $chap)
                <li><a href="{{ url('xem-chapter/'.$chap->slug_chapter) }}">{{ $chap->tieude }}</a></li>            
                @endforeach
            @else
                <li>Truyện đang cập nhật...</li>
            @endif
        </ul>
        <h4>Sách cùng danh mục</h4>
        <div class="row">
        @foreach ($cungdanhmuc as $key => $value)
        <div class="col-md-3">
            <div class="card mb-3 box-shadow">
            <img class="card-img-top" src="{{ asset('public/uploads/truyen/'.$value->hinhanh) }}" alt="Card image cap">
            <div class="card-body">
                <h5>{{$value->tentruyen}}</h5>
                <p class="card-text">{{$value->tomtat}}</p>
                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ url('xem-truyen/'.$value->slug_truyen) }}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                    <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>568955</a>
                </div>
                <small class="text-muted">9 mins ago</small>
                </div>
            </div>
            </div>
        </div>
      
      @endforeach
        </div>
    </div>
    <div class="col-md-3">
        <h3>Sách hay xem nhiều</h3>
    </div>
</div>
          
@endsection