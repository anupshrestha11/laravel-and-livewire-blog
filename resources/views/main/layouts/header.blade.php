<header class="navbar navbar-expand-md navbar-light bg-ligh main">
    <nav class="container border-bottom py-2" style="max-width: 1200px !important">
        <a href="/" class="navbar-brand">
            Anup's Blog
        </a>
        <ul class="mr-auto navbar-nav">
            <li class="nav-item  @if (Request::is('blogs*')) active  @endif">
                <a href="{{route('blogs')}}" class="nav-link  ">Blog</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Portfolio</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">About Me</a>
        </ul>
        <form class="d-flex col-lg-3 col-md-4 p-0 ">
            <div class="search-form d-flex m-0 p-0 border rounded overflow-hidden w-100">
                <input type="text" placeholder="Search Here..." class="form-control  shadow-none border-0" autofocus>
                <button class="btn btn-light">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                        clip-rule="evenodd">
                        <path
                            d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z" />
                    </svg>
                </button>
            </div>
        </form>
    </nav>
</header>