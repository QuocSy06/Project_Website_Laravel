@extends('main')
@section('content')
    <main class="fix">
<style>    
    .fixed-sidebar {
    position: fixed;
    top: auto;
    transform: translateY(-100%);
    width: 330px;
    margin-top: 40px 
}
</style>
        <!-- breadcrumb-area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a
                                            href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html">{{ $post->menu->name }}</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- blog-details-area -->
        <section class="blog-details-area pt-60 pb-60">
            <div class="container">
                <div class="author-inner-wrap">
                    <div class="row justify-content-center">
                        <div class="col-70">
                            <div class="blog-details-wrap">
                                <div class="blog-details-content">
                                    <div class="blog-details-content-top">
                                        <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html" class="post-tag">{{ $post->menu->name }}</a>
                                        <h2 class="title">{{ $post->title }}</h2>
                                        <div class="bd-content-inner">
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                    <li><i
                                                            class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                                    </li>
                                                    <li><i class="flaticon-chat"></i><a href="#">{{ $post->comments->count()}}</a></li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                            <div class="blog-details-social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="blog-details-thumb">
                                    <img src="assets/img/blog/blog_details01.jpg" alt="">
                                </div> --}}
                                    {!! $post->content !!}

                                    <div class="blog-details-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="post-tags">
                                                    <h5 class="title">Tags:</h5>
                                                    <ul class="list-wrap">
                                                        <li><a href="blog.html">Art &amp; Design</a></li>
                                                        <li><a href="blog.html">Video</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="post-share">
                                                    <h5 class="title">Share:</h5>
                                                    <ul class="list-wrap">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('comments')
                            </div>
                        </div>
                        <div class="col-30 ">
                            <div class="sidebar-wrap">
                                <div class="sidebar-widget">
                                    <div class="sidebar-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search . . .">
                                            <button type="submit"><i class="flaticon-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar-widget sidebar-widget-two">
                                    <div class="widget-title mb-30">
                                        <h6 class="title">Danh mục mới</h6>
                                        <div class="section-title-line"></div>
                                    </div>
                                    <div class="sidebar-categories">
                                        <ul class="list-wrap">
                                            @foreach ($menus as $menu)
                                                @php
                                                    $latestPost = $menu->posts->first(); // Lấy bài viết mới nhất cho menu này
                                                    $image = $latestPost
                                                        ? asset($latestPost->thumb)
                                                        : 'assets/img/images/t_cat_img01.jpg';
                                                @endphp
                                                <li>
                                                    <a href="/danh-muc/{{ $menu->id }}-{{ \Str::slug($menu->name, '-') }}.html"
                                                        data-background="{{ $image }}"
                                                        style="background-image: url('{{ $image }}');">
                                                        <span class="post-tag post-tag-three">{{ $menu->name }}</span>
                                                        <span class="right-arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                fill="none">
                                                                <path
                                                                    d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                    fill="currentcolor"></path>
                                                                <path
                                                                    d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                    fill="currentcolor"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </li>
                                            @endforeach


                                            <a href="blog.html" data-background="assets/img/images/t_cat_img04.jpg"
                                                style="background-image: url(&quot;assets/img/images/t_cat_img04.jpg&quot;);">
                                                <span class="post-tag post-tag-three">News</span>
                                                <span class="right-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        fill="none">
                                                        <path
                                                            d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                            fill="currentcolor"></path>
                                                        <path
                                                            d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                            fill="currentcolor"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-widget sidebar-widget-two">
                                    <div class="widget-title mb-25">
                                        <h2 class="title">Subscribe &amp; Followers</h2>
                                        <div class="section-title-line"></div>
                                    </div>
                                    <div class="sidebar-social-wrap">
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i>facebook</a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i>twitter</a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i>instagram</a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i>youtube</a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i>LinkedIn</a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-widget sidebar-widget-two">
                                    <div class="widget-title mb-30">
                                        <h6 class="title">Bài viết liên quan</h6>
                                        <div class="section-title-line"></div>
                                    </div>
                                    <div class="hot-post-wrap">
                                        @foreach ($posts as $key => $post)
                                            <div class="hot-post-item">
                                                <div class="hot-post-thumb">
                                                    <a
                                                        href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                                        <img src="{{ $post->thumb }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="hot-post-content">
                                                    <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html" class="post-tag">{{$post->menu->name}}</a>
                                                    <h4 class="post-title"><a
                                                            href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">{{ $post->title }}</a></h4>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i
                                                                    class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->translatedFormat('d F, Y') }}
                                                            </li>
                                                            <li><i class="flaticon-history"></i>20 Mins</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        {{-- @include('posts.list') --}}
                                    </div>
                                </div>
                                <div class="sidebar-widget sidebar-widget-two">
                                    <div class="sidebar-newsletter">
                                        <div class="icon"><i class="flaticon-envelope"></i></div>
                                        <h4 class="title">Bảng tin hằng ngày</h4>
                                        <p>Lấy tất cả các tin tức từ trong nước và thế giới.</p>
                                        <div class="sidebar-newsletter-form-two">
                                            <form action="#">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Email của bạn">
                                                    <button type="submit" class="btn">Đăng ký</button>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="checkbox">
                                                    <label for="checkbox">I agree to the terms &amp; conditions</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->
        {{-- <script>
            let sidebar = document.getElementsByClassName("col-30")[0];
            let sidebar_content = document.getElementsByClassName("sidebar-wrap")[0];

            window.onscroll = () => {
                let scrollTop = window.scrollY;
                let viewportHeight = window.innerHeight;
                let contentHeight = sidebar_content.getBoundingClientRect().height;

                if (scrollTop >= contentHeight - viewportHeight) {
                    sidebar_content.classList.add("fixed-sidebar");
                } else {
                    sidebar_content.classList.remove("fixed-sidebar");
                }
            };

        </script> --}}

    </main>
@endsection
