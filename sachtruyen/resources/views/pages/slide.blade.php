<h1 style="font-family: 'Nunito', sans-serif; font-size: 1.8rem; font-weight: 700; color: #333; margin-top: 30px; margin-bottom: 20px; text-align: center;">TRUYỆN HOT</h1>
<div class="owl-carousel owl-theme mt-5" style="margin-top: 20px;">
    @foreach ($top_chapter_truyen as $key => $truyen)
        <div class="item" style="display: flex; flex-direction: column; align-items: center; padding: 10px; height: 420px; justify-content: space-between;">
            <div class="hinhanh" style="width: 200px; height: 300px; overflow: hidden; border-radius: 5px;">
                <img src="{{ url('public/uploads/truyen/' . $truyen->hinhanh) }}" style="width: 100%; height: 100%; object-fit: contain;">
            </div>          
            <h4 style="font-family: 'Nunito', sans-serif; font-size: 1.2rem; font-weight: 600; color: #333; text-align: center; height: 50px; overflow: hidden;">{{ $truyen->tentruyen }}</h4>
            <a href="{{ url('xem-truyen/' . $truyen->slug_truyen) }}" class="btn btn-danger btn-sm" style="font-family: 'Nunito', sans-serif; font-size: 0.9rem; color: #fff; background-color: #dc3545; border: none; padding: 5px 10px; text-decoration: none; border-radius: 3px;">Đọc ngay</a>
        </div>
    @endforeach
</div>
