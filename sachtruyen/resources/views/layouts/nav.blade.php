<div class="container">
    <nav class="navbar navbar-expand-lg" style="background-color: #343a40; padding: 10px; margin-bottom: 20px;">
        <div class="container-fluid">
            <i class="navbar-brand" href="{{route('home')}}" style="color: #f8f9fa; font-weight: bold;">ADMIN-WEB</i>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}" style="color: #f8f9fa; font-weight: bold;">Admin</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" 
                           data-bs-toggle="dropdown" aria-expanded="false" 
                           style="color: #f8f9fa; font-weight: bold;">
                            Quản lý danh mục
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1" 
                             style="border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                            <a class="dropdown-item" href="{{route('danhmuc.create')}}">Thêm danh mục</a>
                            <a class="dropdown-item" href="{{route('danhmuc.index')}}">Liệt kê danh mục</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" 
                           data-bs-toggle="dropdown" aria-expanded="false" 
                           style="color: #f8f9fa; font-weight: bold;">
                            Sách truyện
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2" 
                             style="border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                            <a class="dropdown-item" href="{{route('truyen.create')}}">Thêm sách truyện</a>
                            <a class="dropdown-item" href="{{route('truyen.index')}}">Liệt kê sách truyện</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" 
                           data-bs-toggle="dropdown" aria-expanded="false" 
                           style="color: #f8f9fa; font-weight: bold;">
                            Chapter
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3" 
                             style="border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                            <a class="dropdown-item" href="{{route('chapter.create')}}">Thêm chapter</a>
                            <a class="dropdown-item" href="{{route('chapter.index')}}">Liệt kê chapter</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<style>
    .navbar-nav .nav-item:hover .nav-link {
        color: #ffc107 !important;
    }
    .dropdown-menu a:hover {
        background-color: #495057;
        color: white !important;
    }
    .navbar-nav .nav-link {
        padding: 10px 15px;
    }
    @media (max-width: 991px) {
        .navbar-nav {
            padding: 10px 0;
        }
        .nav-item {
            width: 100%;
            text-align: left;
        }
        .dropdown-menu {
            width: 100%;
            border: none;
            box-shadow: none;
            padding-left: 20px;
        }
        .navbar-brand {
            margin-right: 0;
        }
    }
    @media (min-width: 992px) {
        .navbar-nav {
            display: flex;
            align-items: center;
        }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>