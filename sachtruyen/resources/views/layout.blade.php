<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebTruyen</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
       <div class="container">
            <!-- MENU -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                <i class="navbar-brand" href="{{ url('/') }}" style="font-size: 1.5rem; font-weight: 700; color: #dc3545; text-decoration: none; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">WEBTRUYEN.COM</i>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}" style="font-family: 'Nunito', sans-serif; font-size: 1.1rem; font-weight: 600; color: #000000; text-decoration: none; padding: 10px 15px;">Trang chủ<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown position-relative">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Nunito', sans-serif; font-size: 1.1rem; font-weight: 600; color: #000000; text-decoration: none; padding: 10px 15px;">Danh mục truyện</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach ($danhmuc as $key => $danh)
                                    <a class="dropdown-item" href="{{ url('danh-muc/'.$danh->slug_danhmuc) }}">{{ $danh -> tendanhmuc }}</a>
                                    @endforeach
                                    
                                </div>
                            </li>
                        
                        </ul>
                        <form class="form-inline my-2 my-lg-0" action="{{ url('tim-kiem') }}" method="GET">
                            <input class="form-control me-2" type="search" name="tukhoa" placeholder="Tìm kiếm tác giả, truyện,..." aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Tìm Kiếm</button>
                        </form>
                    </div>
                </div>
            </nav>
           <!-- slide -->
            @yield('slide')

           <!-- sachmoisachmoi -->
            @yield('content')

        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                <a class="float-end" href="#" style="font-family: 'Nunito', sans-serif; font-size: 1rem; font-weight: 600; color: #333; text-decoration: none;">Back to top</a>
                </p>
                <p>Sách tổng hợp và sửa lỗi chính tả các tác phẩm sách, truyện hiện có trên mạng internet.
                    Nếu bạn có bản quyền thương mại với tác phẩm vui lòng liên hệ qua email: info.docsach247@gmail.com</p>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"></script>
            <script type="text/javascript">
                $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                dot:true,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
            </script>
            <script type="text/javascript">
                $('.select-chapter').on('change',function(){
                    var url = $(this).val();
                    if(url){
                        window.location = url;
                    }
                    else{
                        return false;
                    }
                });

                current_chapter();

                function current_chapter(){
                    var url = window.location.href;
                    $('.select-chapter').find('option[value="'+url+'"]').attr('selected',true);
                }
            </script>
    </body>
</html>