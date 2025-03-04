<div class="container">
    <nav class="navbar navbar-expand-lg" style="background-color: #343a40; padding: 10px; margin-bottom: 20px;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}" style="color: #f8f9fa; font-weight: bold;">Admin</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeydown="handleKeyDown(event)" style="color: #f8f9fa; background: none; border: none; font-weight: bold;">
                        Quản lý danh mục
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                        <a class="dropdown-item" href="{{route('danhmuc.create')}}">Thêm danh mục</a>
                        <a class="dropdown-item" href="{{route('danhmuc.index')}}">Liệt kê danh mục</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeydown="handleKeyDown(event)" style="color: #f8f9fa; background: none; border: none; font-weight: bold;">
                        Sách truyện
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                        <a class="dropdown-item" href="{{route('truyen.create')}}">Thêm sách truyện</a>
                        <a class="dropdown-item" href="{{route('truyen.index')}}">Liệt kê sách truyện</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeydown="handleKeyDown(event)" style="color: #f8f9fa; background: none; border: none; font-weight: bold;">
                        Chapter
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                        <a class="dropdown-item" href="{{route('chapter.create')}}">Thêm chapter</a>
                        <a class="dropdown-item" href="{{route('chapter.index')}}">Liệt kê chapter</a>
                    </div>
                </li>
            </ul>
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
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>