@extends('../layout')

@section('content')
<nav aria-label="breadcrumb" style="margin-top: 20px; margin-bottom: 20px;">
    <ol class="breadcrumb" style="background-color: #f8f9fa; padding: 10px 15px; border-radius: 5px; margin: 0;">
        <li class="breadcrumb-item" style="font-family: 'Nunito', sans-serif; font-size: 1rem;">
            <a href="{{ url('/') }}" style="color: #007bff; text-decoration: none;">Home</a>
        </li>
        <li class="breadcrumb-item" style="font-family: 'Nunito', sans-serif; font-size: 1rem;">
            <a href="{{ url('danh-muc/'.$truyen_breadcrumb->danhmuctruyen->slug_danhmuc) }}" style="color: #007bff; text-decoration: none;">{{ $truyen_breadcrumb->danhmuctruyen->tendanhmuc }}</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page" style="font-family: 'Nunito', sans-serif; font-size: 1rem; color: #555;">{{ $truyen_breadcrumb->tentruyen }}</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $chapter->truyen->tentruyen }}</h4>
        <p>Chương hiện tại: {{ $chapter->tieude }}</p>

        <!-- Căn giữa các nút và select -->
        <div class="d-flex justify-content-center align-items-center mb-3">
            <a class="btn btn-primary me-2 {{ $chapter->id == $min_id->id ? 'isDisabled' : '' }}" href="{{ url('xem-chapter/'.$prev_chapter) }}">Chap trước</a>
            <select name="kichhoat" class="form-select select-chapter me-2">
                @foreach ($all_chapter as $key => $chap)
                    <option value="{{ url('xem-chapter/'.$chap->slug_chapter) }}" {{ $chapter->slug_chapter == $chap->slug_chapter ? 'selected' : '' }}>
                        {{ $chap->tieude }}
                    </option>
                @endforeach
            </select>
            <a class="btn btn-primary {{ $chapter->id == $max_id->id ? 'isDisabled' : '' }}" href="{{ url('xem-chapter/'.$next_chapter) }}">Chap sau</a>
        </div>

        <!-- Nội dung chương -->
        <div class="noidungchuong">
            {!! $chapter->noidung !!}
        </div>

        <!-- Căn giữa các nút và select -->
        <div class="d-flex justify-content-center align-items-center mb-3">
            <a class="btn btn-primary me-2 {{ $chapter->id == $min_id->id ? 'isDisabled' : '' }}" href="{{ url('xem-chapter/'.$prev_chapter) }}">Chap trước</a>
            <select name="kichhoat" class="form-select select-chapter me-2">
                @foreach ($all_chapter as $key => $chap)
                    <option value="{{ url('xem-chapter/'.$chap->slug_chapter) }}" {{ $chapter->slug_chapter == $chap->slug_chapter ? 'selected' : '' }}>
                        {{ $chap->tieude }}
                    </option>
                @endforeach
            </select>
            <a class="btn btn-primary {{ $chapter->id == $max_id->id ? 'isDisabled' : '' }}" href="{{ url('xem-chapter/'.$next_chapter) }}">Chap sau</a>
        </div>
        <!-- Phần lưu và chia sẻ -->
        <!-- <h3>Lưu và chia sẻ truyện:</h3>
        <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a> -->
    </div>
</div>

<style type="text/css">
    .select-chapter {
        width: 300px; /* Độ rộng cố định cho select */
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .isDisabled {
        color: currentColor;
        pointer-events: none;
        opacity: 0.5;
        text-decoration: none;
    }
</style>
@endsection