@extends('../layout')
@section('slide')
  @include('pages.slide')
@endsection 
@section('content')

<h3>TRUYỆN MỚI CẬP NHẬT</h3>
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
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
    </div>
  </div>

</div>
@endsection