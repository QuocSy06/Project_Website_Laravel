@extends('main')
@section('content')
<main class="fix">

    <!-- breadcrumb-area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Kết quả tìm kiếm cho từ khóa: {{ $query }}</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- blog-area -->
    <section class="blog-area pt-60 pb-60">
        <div class="container">
            <div class="author-inner-wrap blog-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-70 order-0 order-xl-2">
                        <div class="weekly-post-item-wrap">
                            @foreach ($posts as $key => $post)
                                <div class="weekly-post-item weekly-post-four">
                                    <div class="weekly-post-thumb">
                                        <a href="/bai-viet/{{ $post->id }}-{{\Str::slug($post->title,'-')}}.html"><img src="{{ $post->thumb}}" alt=""></a>
                                    </div>
                                    <div class="weekly-post-content">
                                        <a href="blog.html" class="post-tag">{{$post->menu->name}}</a>
                                        <h2 class="post-title">
                                            <a href="/bai-viet/{{ $post->id }}-{{\Str::slug($post->title,'-')}}.html">{{$post->title}}</a>
                                        </h2>
                                        <div class="blog-post-meta">
                                            <ul class="list-wrap">
                                                <li><i class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->translatedFormat('d F, Y') }}</li>
                                                {{-- <li><i class="flaticon-history"></i>20 Mins</li> --}}
                                            </ul>
                                        </div>
                                        <p>{{$post->description}}</p>
                                        <div class="view-all-btn">
                                            <a href="/bai-viet/{{ $post->id }}-{{\Str::slug($post->title,'-')}}.html" class="link-btn">Đọc thêm
                                                <span class="svg-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                                        <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor"></path>
                                                        <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>

                        {!! $posts->links() !!}
                    </div>
                    <div class="col-30">
                        <div class="sidebar-wrap">
                            
                            {{-- <div class="sidebar-widget sidebar-widget-two">
                                <div class="widget-title mb-30">
                                    <h6 class="title">Hot Categories</h6>
                                    <div class="section-title-line"></div>
                                </div>
                                <div class="sidebar-categories">
                                    <ul class="list-wrap">
                                        <li>
                                            <a href="blog.html" data-background="assets/img/images/t_cat_img01.jpg" style="background-image: url(&quot;assets/img/images/t_cat_img01.jpg&quot;);">
                                                <span class="post-tag post-tag-three">Technology</span>
                                                <span class="right-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                                        <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                        <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog.html" data-background="assets/img/images/t_cat_img02.jpg" style="background-image: url(&quot;assets/img/images/t_cat_img02.jpg&quot;);">
                                                <span class="post-tag post-tag-three">Mobile</span>
                                                <span class="right-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                                        <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                        <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog.html" data-background="assets/img/images/t_cat_img03.jpg" style="background-image: url(&quot;assets/img/images/t_cat_img03.jpg&quot;);">
                                                <span class="post-tag post-tag-three">Gadget</span>
                                                <span class="right-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                                        <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                        <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog.html" data-background="assets/img/images/t_cat_img04.jpg" style="background-image: url(&quot;assets/img/images/t_cat_img04.jpg&quot;);">
                                                <span class="post-tag post-tag-three">News</span>
                                                <span class="right-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                                        <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                        <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            <div class="sidebar-widget sidebar-widget-two">
                                <div class="widget-title mb-25">
                                    <h2 class="title">Đăng ký &amp; Theo dõi</h2>
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
                                    <h6 class="title">Tin mới nhất</h6>
                                    <div class="section-title-line"></div>
                                </div>
                                <div class="hot-post-wrap">
                                   
                                </div>
                            </div>
                            <div class="sidebar-widget sidebar-widget-two">
                                <div class="sidebar-newsletter">
                                    <div class="icon"><i class="flaticon-envelope"></i></div>
                                    <h4 class="title">Bảng tin hằng ngày</h4>
                                    <p>Theo dõi tất cả các tin tức hàng đầu.</p>
                                    <div class="sidebar-newsletter-form-two">
                                        <form action="#">
                                            <div class="form-grp">
                                                <input type="text" placeholder="Nhập email của bạn">
                                                <button type="submit" class="btn">Đăng ký ngay</button>
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
    <!-- blog-area-end -->

    <!-- newsletter-area -->
    <section class="newsletter-area-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-wrap-three">
                        <div class="newsletter-content">
                            <h2 class="title">Get Our Latest News &amp; Update</h2>
                        </div>
                        <div class="newsletter-form">
                            <form action="#">
                                <div class="form-grp">
                                    <input type="text" placeholder="Họ tên">
                                </div>
                                <div class="form-grp">
                                    <input type="email" placeholder="E-mail">
                                </div>
                                <button type="submit" class="btn">Đăng ký</button>
                            </form>
                        </div>
                        <div class="newsletter-social">
                            <h4 class="title">Follow Us:</h4>
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area-end -->

</main>
@endsection