<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Admin <span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
                <button class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeydown="handleKeyDown(event)">
                                Quản lý danh mục
                </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('danhmuc.create')}}">Thêm danh mục</a>
                <a class="dropdown-item" href="{{route('danhmuc.index')}}">Liệt kê danh mục</a>
            </div>

            </li>
            <li class="nav-item dropdown">
                <button class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeydown="handleKeyDown(event)">
                                Sách truyện
                </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('truyen.create')}}">Thêm sách truyện</a>
                <a class="dropdown-item" href="{{route('truyen.index')}}">Liệt kê sách truyện</a>
            </div>

            </li>

            </li>
            <li class="nav-item dropdown">
                <button class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeydown="handleKeyDown(event)">
                                Chapter
                </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('chapter.create')}}">Thêm chapter</a>
                <a class="dropdown-item" href="{{route('chapter.index')}}">Liệt kê chapter</a>
            </div>

            </li>
                      
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    </nav>
</div>