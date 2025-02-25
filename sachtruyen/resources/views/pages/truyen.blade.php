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
                <img class="card-img-top" src="{{asset('public/uploads/truyen/db1.jpg')}}" >
            </div>
            <div class="col-md-9">
                <style type="text/css">
                    .infotruyen{list-style-type: none;}
                </style>
                <ul class="infotruyen">
                    <li>Tác giả: Yokoshima</li>
                    <li>Thể loại : Trinh thám, cổ tích</li>
                    <li>Số chapter: 200</li>
                    <li>Số lượt xem: 2000</li>
                    <li><a href="#">Xem mục lục</a></li>
                    <li><a href="#" class="btn btn-primary">Đọc Online</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <p>Truyện tranh là một loại hình truyền thông hình ảnh kết hợp với văn bản, thường được in trên giấy và xuất bản dưới dạng sách. Truyện tranh thường kể câu chuyện bằng cách sử dụng hình ảnh và văn bản, thường kể theo thứ tự từ trái sang phải, từ trên xuống dưới, và từ trang này sang trang khác. Truyện tranh thường được xuất bản dưới dạng sách, tuy nhiên cũng có truyện tranh được xuất bản trên các tạp chí, báo, trên internet, hoặc trên các phương tiện truyền thông khác. Truyện tranh thường được vẽ bằng tay, tuy nhiên cũng có truyện tranh được vẽ bằng máy tính.</p>
        </div>
        <hr>
        <h4>Mục lục</h4>
        <ul class="mucluctruyen">
            <li><a href="#">Chương 1: Cô gái và chú chó</a></li>
            <li><a href="#">Chương 1: Cô gái và chú chó</a></li>
            <li><a href="#">Chương 1: Cô gái và chú chó</a></li>
            <li><a href="#">Chương 1: Cô gái và chú chó</a></li>
            <li><a href="#">Chương 1: Cô gái và chú chó</a></li>
            <li><a href="#">Chương 1: Cô gái và chú chó</a></li>
            <li><a href="#">Chương 1: Cô gái và chú chó</a></li>
            <li><a href="#">Chương 1: Cô gái và chú chó</a></li>
            <li><a href="#">Chương 1: Cô gái và chú chó</a></li>
        </ul>
        <h4>Sách cùng danh mục</h4>
        <div class="row">
            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <a href="">
                <img class="card-img-top" src="{{ asset('public/uploads/truyen/db1.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5>This is a wider card with supporting</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </a>               
                </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <a href="">
                <img class="card-img-top" src="{{ asset('public/uploads/truyen/db1.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5>This is a wider card with supporting</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </a>               
                </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <a href="">
                <img class="card-img-top" src="{{ asset('public/uploads/truyen/db1.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5>This is a wider card with supporting</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </a>               
                </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <a href="">
                <img class="card-img-top" src="{{ asset('public/uploads/truyen/db1.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5>This is a wider card with supporting</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </a>               
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <h3>Sách hay xem nhiều</h3>
    </div>
</div>
          
@endsection