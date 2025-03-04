@extends('../layout')

@section('content')

<nav aria-label="breadcrumb" style="margin-top: 20px; margin-bottom: 20px;">
    <ol class="breadcrumb" style="background-color: #f8f9fa; padding: 10px 15px; border-radius: 5px; margin: 0;">
        <li class="breadcrumb-item" style="font-family: 'Nunito', sans-serif; font-size: 1rem;">
            <a href="{{ url('/') }}" style="color: #007bff; text-decoration: none;">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page" style="font-family: 'Nunito', sans-serif; font-size: 1rem; color: #555;">{{ $tendanhmuc }}</li>
    </ol>
</nav>
<h3>{{$tendanhmuc  }}</h3>
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
              <p>Truyện đang cập nhật</p>
            </div>
          </div>
        </div>
      
      @else
      @foreach ($truyen as $key => $value)
      <div class="col-md-3" style="flex: 0 0 25%; max-width: 25%; padding-right: 15px; padding-left: 15px; margin-bottom: 20px; display: flex;">
        <div class="card mb-3 box-shadow" style="border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); background-color: #fff; flex: 1; display: flex; flex-direction: column;">
          <img class="card-img-top" src="{{ asset('public/uploads/truyen/'.$value->hinhanh) }}" alt="Card cap" style="width: 100%; height: 200px; object-fit: contain; border-top-left-radius: 5px; border-top-right-radius: 5px;">
          <div class="card-body" style="padding: 15px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <h5 style="font-family: 'Nunito', sans-serif; font-size: 1.2rem; font-weight: 600; color: #333; margin-bottom: 10px;">{{$value->tentruyen}}</h5>
              <p class="card-text" style="font-family: 'Nunito', sans-serif; font-size: 0.9rem; color: #666; margin-bottom: 15px; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">{{$value->tomtat}}</p>
            </div>
            <div class="d-flex justify-content-between align-items-center" style="display: flex; justify-content: space-between; align-items: center;">
              <div class="btn-group" style="display: flex; gap: 5px;">
                <a href="{{ url('xem-truyen/'.$value->slug_truyen) }}" class="btn btn-sm btn-outline-secondary" style="font-family: 'Nunito', sans-serif; font-size: 0.9rem; color: #007bff; border: 1px solid #007bff; padding: 5px 10px; text-decoration: none; border-radius: 3px;">Đọc ngay</a>
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