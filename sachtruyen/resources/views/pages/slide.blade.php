<!-- <h3>Top views</h3>
<div class="owl-carousel owl-theme mt-5">
                <div class="item">
                    <img src="{{ url('public/uploads/truyen/db45.jpg') }}">
                    <h4>Bảy viên ngọc rồng</h4>
                    <p><i class="fas fa-eye"></i>567985</p>
                    <a class="btn btn-danger btn-sm">Read</a>
                </div>
                <div class="item">
                    <img src="{{ url('public/uploads/truyen/db45.jpg') }}">
                    <h4>Bảy viên ngọc rồng</h4>
                    <p><i class="fas fa-eye"></i>567985</p>
                    <a class="btn btn-danger btn-sm">Read</a>
                </div>
                <div class="item">
                    <img src="{{ url('public/uploads/truyen/db45.jpg') }}">
                    <h4>Bảy viên ngọc rồng</h4>
                    <p><i class="fas fa-eye"></i>567985</p>
                    <a class="btn btn-danger btn-sm">Read</a>
                </div>
                <div class="item">
                    <img src="{{ url('public/uploads/truyen/db45.jpg') }}">
                    <h4>Bảy viên ngọc rồng</h4>
                    <p><i class="fas fa-eye"></i>567985</p>
                    <a class="btn btn-danger btn-sm">Read</a>
                </div>
                <div class="item">
                    <img src="{{ url('public/uploads/truyen/db45.jpg') }}">
                    <h4>Bảy viên ngọc rồng</h4>
                    <p><i class="fas fa-eye"></i>567985</p>
                    <a class="btn btn-danger btn-sm">Read</a>
                </div>
                <div class="item">
                    <img src="{{ url('public/uploads/truyen/db45.jpg') }}">
                    <h4>Dragon ball</h4>
                    <p><i class="fas fa-eye"></i>567985</p>
                    <a class="btn btn-danger btn-sm">Read</a>
                </div>
            </div>
                       -->
<h3>TRUYỆN HOT</h3>
<div class="owl-carousel owl-theme mt-5">
    @foreach($top_truyen as $truyen)
        <div class="item">
            <div class="hinhanh" style="width: 200px; height: 300px; object-fit: cover;">
                <img src="{{ url('public/uploads/truyen/' . $truyen->hinhanh) }}">
            </div>          
            <h4>{{ $truyen->tentruyen }}</h4>
            <!-- <p><i class="fas fa-eye"></i> {{ $truyen->luotxem }}</p> -->
            <a href="{{ url('xem-truyen/' . $truyen->slug_truyen) }}" class="btn btn-danger btn-sm">Đọc ngay</a>
        </div>
    @endforeach
</div>