<header class="header-style-six">
    <div id="header-fixed-height"></div>
    <div class="header-top-wrap-four">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="header-top-left-four">
                        <div class="trending-box">
                            <div class="icon"><img src="/template/assets/img/icon/trending_icon.svg" alt="">
                            </div>
                            <span>Trending</span>
                            <div class="shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 36" preserveAspectRatio="none"
                                    fill="none">
                                    <path
                                        d="M0 18C0 8.05888 8.05887 0 18 0H110L121.26 16.8906C121.708 17.5624 121.708 18.4376 121.26 19.1094L110 36H18C8.05888 36 0 27.9411 0 18Z"
                                        fill="url(#trending_shape)" />
                                    <defs>
                                        <linearGradient id="trending_shape" x1="12" y1="36" x2="132"
                                            y2="36" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#3F6088" />
                                            <stop offset="1" stop-color="#2A4970" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="swiper-container ta-trending-slider">
                            <div class="swiper-wrapper">
                                @foreach ($topViewedPosts as $post)
                                    <div class="swiper-slide">
                                        <div class="trending-content">
                                            <a href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                                {{ $post->title }}
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header-top-social header-top-social-two">
                        <h5 class="title">Theo dõi báo trên</h5>
                        <ul class="list-wrap">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-logo-area-four">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="hl-left-side-four">
                        <span class="date"><i class="flaticon-calendar"></i> <span id="current-date"></span></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo text-center">
                        <a href="/"><img src="/template/assets/img/logo/logotintuc.png" style="scale: 4;"
                                alt=""></a>
                    </div>
                    <div class="logo d-none text-center">
                        <a href="/"><img src="/template/assets/img/logo/logotintuc.png" style="scale: 4;"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hl-right-side-four">
                        @guest
                            <div class="sign-in">
                                <a href="{{ route('login') }}"><i class="flaticon-user"></i>Đăng nhập</a>
                            </div>
                            <div class="subscribe-btn">
                                <a href="{{ route('register') }}" class="btn btn-two">Đăng ký</a>
                            </div>
                        @else
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @if (Auth::user()->role->name == 'admin')
                                        <li><a class="dropdown-item" href="{{ url('admin') }}">Quản trị</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Tài khoản của tôi</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                            xuất</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="menu-area menu-style-six">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo d-none">
                                <a href="index.html"><img src="/template/assets/img/logo/logotintuc.png"
                                        class="ms-2" style="scale: 2;" alt="Hình ảnh logo"></a>
                            </div>
                            <div class="logo d-none white-logo">
                                <a href="index.html"><img src="/template/assets/img/logo/logotintuc.png"
                                        class="ms-2" style="scale: 2;" alt=""></a>
                            </div>

                            <div class="navbar-wrap main-menu d-none d-lg-flex mx-auto">
                                <ul class="navigation">
                                    <li class="active">
                                        <a href="/">
                                            <i style="font-size: 20px" class="fa-solid fa-house"></i>
                                        </a>
                                    </li>
                                    {!! \App\Helpers\Helper::menus($menus) !!}

                                </ul>
                            </div>
                            <div class="header-search-wrap header-search-wrap-three">
                                <form action="{{ route('search') }}" method="GET">
                                    <input type="text" name="query" placeholder="Tìm kiếm . . ." required>
                                    <button type="submit"><i class="flaticon-search"></i></button>
                                </form>                                
                            </div>
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="index.html"><img src="/template/assets/img/logo/logotintuc.png"
                                        alt="Logo"></a>
                            </div>
                            <div class="nav-logo d-none">
                                <a href="index.html"><img src="/template/assets/img/logo/logotintuc.png"
                                        alt="Logo"></a>
                            </div>
                            <div class="mobile-search">
                                <form action="{{ route('search') }}" method="GET">
                                    <input type="text" name="query" placeholder="Tìm kiếm . . ." required>
                                    <button><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                <ul class="navigation">
                                    {!! \App\Helpers\Helper::menus($menus) !!}
                                </ul>
                            </div>
                            <div class="social-links">
                                <ul class="clearfix list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->

                </div>
            </div>
        </div>
    </div>
</header>
