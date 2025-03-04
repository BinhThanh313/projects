@extends('../layout')

@section('content')

<nav aria-label="breadcrumb" style="margin-top: 20px; margin-bottom: 20px;">
    <ol class="breadcrumb" style="background-color: #f8f9fa; padding: 10px 15px; border-radius: 5px; margin: 0;">
        <li class="breadcrumb-item" style="font-family: 'Nunito', sans-serif; font-size: 1rem;">
            <a href="{{ url('/') }}" style="color: #007bff; text-decoration: none;">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page" style="font-family: 'Nunito', sans-serif; font-size: 1rem; color: #555;">Tìm kiếm</li>
    </ol>
</nav>
<h3>Từ khóa của bạn là: {{$tukhoa}}</h3>
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      @php
      $count = count($truyen);
      @endphp
      @if($count == 0)
        <div class="col-md-12">
          <div class="card mb-12 box-shadow">
            <div class="card-body">
              <p>Truyện không tồn tại </p>
            </div>
          </div>
        </div>
      
      @else
        @foreach ($truyen as $key => $value)
        <div class="col-md-3">
          <div class="card mb-3 box-shadow">
            <img class="card-img-top" src="{{ asset('public/uploads/truyen/'.$value->hinhanh) }}" alt="Card cap">
            <div class="card-body">
              <h5>{{$value->tentruyen}}</h5>
              <p class="card-text">{{$value->tomtat}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ url('xem-truyen/'.$value->slug_truyen) }}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        @endforeach
      @endif
    </div>

  </div>

</div>
@endsection