 <!-- banner-post-area -->
 <section class="banner-post-area-five pt-50">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-9">
                 <div class="news-banner-post-wrap">
                     <div class="row">
                         @foreach ($hotPosts as $post)
                             <div class="col-67 order-0 order-lg-2">
                                 <div class="banner-post-six">
                                     <div class="banner-post-thumb-six">
                                         <a
                                             href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                             <img src="{{ $post->thumb }}" alt="">
                                         </a>
                                     </div>
                                     <div class="banner-post-content-six">
                                         <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                             class="post-tag-two">{{ $post->menu->name }}</a>
                                         <h2 class="post-title bold-underline">
                                             <a
                                                 href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">{{ $post->title }}</a>
                                         </h2>
                                         <div class="blog-post-meta">
                                             <ul class="list-wrap">
                                                 <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                 <li><i
                                                         class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                                 </li>
                                                 <li><i class="flaticon-chat"></i>{{ $post->comments->count()}}</li>
                                             </ul>
                                         </div>
                                         <p>{{ $post->description }}</p>
                                     </div>
                                 </div>
                             </div>
                         @endforeach


                         <div class="col-33">
                             <div class="news-banner-small-post">

                                 {{-- Hiển thị tin của danh mục thể thao --}}
                                 @foreach ($sportPosts as $post)
                                     <div class="banner-post-five">
                                         <div class="banner-post-thumb-five">
                                             <a
                                                 href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html"><img
                                                     src="{{ $post->thumb }}" alt=""></a>
                                         </div>
                                         <div class="banner-post-content-five">
                                             <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                                 class="post-tag-four">{{ $post->menu->name }}</a>
                                             <h2 class="post-title"><a
                                                     href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">{{ $post->title }}</a>
                                             </h2>
                                             <div class="blog-post-meta">
                                                 <ul class="list-wrap">
                                                     <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a>
                                                     </li>
                                                     <li><i
                                                             class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach

                                 @foreach ($trafficPosts as $post)
                                     <div class="banner-post-five">
                                         <div class="banner-post-thumb-five">
                                             <a
                                                 href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html"><img
                                                     src="{{ $post->thumb }}" alt=""></a>
                                         </div>
                                         <div class="banner-post-content-five">
                                             <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                                 class="post-tag-four">{{ $post->menu->name }}</a>
                                             <h2 class="post-title"><a
                                                     href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">{{ $post->title }}</a>
                                             </h2>
                                             <div class="blog-post-meta">
                                                 <ul class="list-wrap">
                                                     <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a>
                                                     </li>
                                                     <li><i
                                                             class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="ad-banner-img ad-banner-img-two text-center pt-20 pb-50">
                     <a href="#">
                         <img src="/template/assets/img/images/advertisement13.jpg" alt="">
                     </a>
                 </div>

                 <!-- Giải trí-post-area -->
                 <section class="politics-post-area">
                     <div class="section-title-wrap">
                         <div class="section-title section-title-four">
                             <h2 class="title">Giải trí</h2>
                             <div class="section-title-line"></div>
                         </div>
                     </div>
                     <div class="politics-post-wrap">
                         <div class="row">
                             <div class="col-69">
                                 @foreach ($amusingPosts as $post)
                                     <div class="politics-post">
                                         <div class="politics-post-thumb">
                                             <a
                                                 href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html"><img
                                                     src="{{ $post->thumb }}" alt=""></a>
                                         </div>
                                         <div class="politics-post-content">
                                             <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                                 class="post-tag-four">{{ $post->menu->name }}</a>
                                             <h2 class="post-title"><a
                                                     href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">{{ $post->title }}</a>
                                             </h2>
                                             <div class="blog-post-meta">
                                                 <ul class="list-wrap">
                                                     <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a>
                                                     </li>
                                                     <li><i
                                                             class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                                     </li>
                                                 </ul>
                                             </div>
                                             <p>{{ $post->description }}</p>
                                             <div class="view-all-btn">
                                                 <a href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html"
                                                     class="link-btn">Đọc thêm
                                                     <span class="svg-icon">
                                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"
                                                             fill="none">
                                                             <path
                                                                 d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                 fill="currentColor" />
                                                             <path
                                                                 d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                 fill="currentColor" />
                                                         </svg>
                                                     </span>
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                             <div class="col-31">
                                 <div class="politics-post-wrap-two">
                                     @foreach ($fashionPosts as $post)
                                         <div class="politics-post-two">
                                             <div class="politics-post-content-two">
                                                 <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                                     class="post-tag-four">{{ $post->menu->name }}</a>
                                                 <h2 class="post-title">
                                                     <a
                                                         href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                                         {{ $post->title }}
                                                     </a>
                                                 </h2>
                                                 <div class="blog-post-meta">
                                                     <ul class="list-wrap">
                                                         <li><i
                                                                 class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>
                                     @endforeach

                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- giải trí-post-area-end -->

                 <!-- giáo dục-post-area -->
                 <section class="today-post-area pt-50">
                     <div class="section-title-wrap">
                         <div class="section-title section-title-four">
                             <h2 class="title">Giáo dục</h2>
                             <div class="section-title-line"></div>
                         </div>
                     </div>
                     <div class="today-post-wrap">
                         <div class="row gutter-40 justify-content-center">
                             @foreach ($educationPosts as $post)
                                 <div class="col-lg-4 col-md-6">
                                     <div class="banner-post-five banner-post-seven">
                                         <div class="banner-post-thumb-five">
                                             <a
                                                 href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html"><img
                                                     src="{{ $post->thumb }}" alt=""></a>
                                         </div>
                                         <div class="banner-post-content-five">
                                             <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                                 class="post-tag-four">{{ $post->menu->name }}</a>
                                             <h2 class="post-title"><a
                                                     href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                                     {{ $post->title }}</a></h2>
                                             <div class="blog-post-meta">
                                                 <ul class="list-wrap">
                                                     <li><i class="flaticon-user"></i>by<a
                                                             href="author.html">Admin</a>
                                                     </li>
                                                     <li><i
                                                             class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                     </div>
                 </section>
                 <!-- giáo dục-post-area-end -->

             </div>
             <div class="col-xl-3 col-lg-8">
                 <div class="sidebar-wrap-three">
                     <div class="sidebar-widget-three">
                         <div class="widget-title widget-title-three mb-20">
                             <div class="section-title-line"></div>
                             <h2 class="title">Tin mới</h2>
                         </div>
                         <div class="stories-post-wrap">
                             @foreach ($latestPostsByMenu as $item)
                                 <div class="stories-post">
                                     <div class="stories-post-thumb">
                                         <a
                                             href="/bai-viet/{{ $item['post']->id }}-{{ \Str::slug($item['post']->title, '-') }}.html">
                                             <img src="{{ $item['post']->thumb }}" alt="">
                                         </a>
                                     </div>
                                     <div class="stories-post-content">
                                         <a href="/bai-viet/{{ $item['post']->id }}-{{ \Str::slug($item['post']->title, '-') }}.html"
                                             class="post-tag-four">
                                             {{ $item['menu']->name }}
                                         </a>
                                         <h5 class="post-title">
                                             <a
                                                 href="/bai-viet/{{ $item['post']->id }}-{{ \Str::slug($item['post']->title, '-') }}.html">
                                                 {{ $item['post']->title }}
                                             </a>
                                         </h5>
                                         <div class="blog-post-meta">
                                             <ul class="list-wrap">
                                                 <li><i
                                                         class="flaticon-calendar"></i>{{ $item['post']->created_at->locale('vi')->diffForHumans() }}
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach

                         </div>
                     </div>
                     <div class="sidebar-widget-three">
                         <div class="sidebar-img-two">
                             <a href="#"><img src="/template/assets/img/images/sidebar_img05.jpg"
                                     alt=""></a>
                         </div>
                     </div>
                     <div class="sidebar-widget-three">
                        <div class="widget-title widget-title-three mb-20">
                            <div class="section-title-line"></div>
                            <h2 class="title">Đọc nhiều</h2>
                        </div>
                        <div class="stories-post-wrap-two">
                            @foreach($topViewedPosts as $index => $post)
                            <div class="stories-post-two">
                                <h2 class="number">{{ $index + 1 }}.</h2>
                                <div class="stories-post-content">
                                    <h5 class="post-title">
                                        <a href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                            {{ $post->title }}
                                        </a>
                                    </h5>
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><i class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    
                    
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- banner-post-area-end -->

 <!-- editor-post-area -->
 <section class="editor-post-area-three">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-title-wrap mb-30">
                     <div class="section-title section-title-four">
                         <h2 class="title">Công Nghệ</h2>
                         <div class="editor-nav-two"></div>
                     </div>
                     <div class="section-title-line"></div>
                 </div>
             </div>
         </div>
         <div class="row gutter-40 editor-post-active-two">
             {{-- <div class="col-lg-3">
                    <div class="editor-post-three">
                        <div class="editor-post-thumb-three">
                            <a href="blog-details.html"><img src="/template/assets/img/blog/nw_editor_post01.jpg" alt=""></a>
                            <a href="https://www.youtube.com/watch?v=G_AEL-Xo5l8" class="paly-btn popup-video"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="editor-post-content-three">
                            <a href="blog.html" class="post-tag-four">Sports</a>
                            <h2 class="post-title"><a href="blog-details.html">Everything Developers Must Know About Figma</a></h2>
                            <div class="blog-post-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
             @foreach ($techPosts as $post)
                 <div class="col-lg-3">
                     <div class="editor-post-three">
                         <div class="editor-post-thumb-three">
                             <a href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                 <img src="{{ $post->thumb }}" alt="">
                             </a>
                         </div>
                         <div class="editor-post-content-three">
                             <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                 class="post-tag-four">{{ $post->menu->name }}</a>
                             <h2 class="post-title">
                                 <a
                                     href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">{{ $post->title }}</a>
                             </h2>
                             <div class="blog-post-meta">
                                 <ul class="list-wrap">
                                     <li><i
                                             class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                     </li>
                                     {{-- <li><i class="flaticon-history"></i>20 Mins</li> --}}
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach

         </div>
     </div>
 </section>
 <!-- editor-post-area-end -->

 <!-- top-news-post -->
 <section class="top-news-post-area pt-70 pb-70">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-9">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="section-title-wrap mb-30">
                             <div class="section-title section-title-four">
                                 <h2 class="title">Thế giới</h2>
                             </div>
                             <div class="section-title-line"></div>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     @foreach ($overseasPosts as $post)
                         <div class="col-12">
                             <div class="top-news-post">
                                 <div class="top-news-post-thumb">
                                     <a
                                         href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                         <img src="{{ $post->thumb }}" alt="">
                                     </a>
                                 </div>
                                 <div class="top-news-post-content">
                                     <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                         class="post-tag-four">{{ $post->menu->name }}</a>
                                     <h2 class="post-title bold-underline">
                                         <a
                                             href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">{{ $post->title }}</a>
                                     </h2>
                                     <div class="blog-post-meta">
                                         <ul class="list-wrap">
                                             <li><i
                                                     class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                             </li>
                                             <li><i class="flaticon-history"></i>30 Mins</li>
                                         </ul>
                                     </div>
                                     <p>{{ $post->description }}</p>
                                     <div class="view-all-btn">
                                         <a href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html"
                                             class="link-btn">Đọc thêm
                                             <span class="svg-icon">
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"
                                                     fill="none">
                                                     <path
                                                         d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                         fill="currentColor" />
                                                     <path
                                                         d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                         fill="currentColor" />
                                                 </svg>
                                             </span>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                     @foreach ($militaryPosts as $post)
                         <div class="col-lg-4">
                             <div class="horizontal-post-four">
                                 <div class="horizontal-post-thumb-four">
                                     <a
                                         href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                         <img src="{{ $post->thumb }}" alt="">
                                     </a>
                                 </div>
                                 <div class="horizontal-post-content-four">
                                     <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                         class="post-tag-four">{{ $post->menu->name }}</a>
                                     <h4 class="post-title"><a
                                             href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">{{ $post->title }}</a>
                                     </h4>
                                     <div class="blog-post-meta">
                                         <ul class="list-wrap">
                                             <li><i
                                                     class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>
                 <div class="ad-banner-area pt-20 pb-50">
                     <div class="ad-banner-img ad-banner-img-two text-center">
                         <a href="#">
                             <img src="/template/assets/img/images/advertisement15.jpg" alt="">
                         </a>
                     </div>
                 </div>
                 <div class="sports-post-wrap">
                     <div class="section-title-wrap mb-30">
                         <div class="section-title section-title-four">
                             <h2 class="title">Sức khỏe </h2>
                         </div>
                         <div class="section-title-line"></div>
                     </div>
                     <div class="row">
                         @foreach ($healthPosts as $post)
                             <div class="col-lg-8">
                                 <div class="sports-post">
                                     <div class="sports-post-thumb">
                                         <a
                                             href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                             <img src="{{ $post->thumb }}" alt="">
                                         </a>
                                     </div>
                                     <div class="sports-post-content">
                                         <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                             class="post-tag-four">{{ $post->menu->name }}</a>
                                         <h4 class="post-title bold-underline">
                                             <a
                                                 href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">{{ $post->title }}</a>
                                         </h4>
                                         <div class="blog-post-meta">
                                             <ul class="list-wrap">
                                                 <li><i
                                                         class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         @endforeach

                         <div class="col-lg-4">
                             <div class="sidebar-wrap sidebar-wrap-four">
                                 @foreach ($advisePosts as $post)
                                     <div class="horizontal-post-four horizontal-post-five">
                                         <div class="horizontal-post-thumb-four">
                                             <a
                                                 href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                                 <img src="{{ $post->thumb }}" alt="">
                                             </a>
                                         </div>
                                         <div class="horizontal-post-content-four">
                                             <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                                 class="post-tag-four">{{ $post->menu->name }}</a>
                                             <h4 class="post-title"><a
                                                     href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">{{ $post->title }}</a>
                                             </h4>
                                             <div class="blog-post-meta">
                                                 <ul class="list-wrap">
                                                     <li><i
                                                             class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-8">
                 <div class="sidebar-wrap-three">
                     <div class="sidebar-widget-three">
                         <div class="sidebar-newsletter sidebar-newsletter-two">
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
                                         <label for="checkbox">I agree to the terms & conditions</label>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                     <div class="sidebar-widget-three">
                         <div class="widget-title widget-title-three mb-20">
                             <div class="section-title-line"></div>
                             <h2 class="title">Pháp luật</h2>
                         </div>
                         <div class="hot-post-wrap">
                             @foreach ($casefilePosts as $post)
                                 <div class="hot-post-item hot-post-item-two">
                                     <div class="hot-post-thumb">
                                         <a
                                             href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                             <img src="{{ $post->thumb }}" alt="">
                                         </a>
                                     </div>
                                     <div class="hot-post-content">
                                         <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                             class="post-tag-four">{{ $post->menu->name }}</a>
                                         <h4 class="post-title"><a
                                                 href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">{{ $post->title }}</a>
                                         </h4>
                                         <div class="blog-post-meta">
                                             <ul class="list-wrap">
                                                 <li><i
                                                         class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach

                             @foreach ($courthousePosts as $post)
                                 <div class="hot-post-item hot-post-item-two">
                                     <div class="hot-post-content">
                                         <a href="/danh-muc/{{ $post->menu->id }}-{{ Str::slug($post->menu->name) }}.html"
                                             class="post-tag-four">{{ $post->menu->name }}</a>
                                         <h4 class="post-title"><a
                                                 href="/bai-viet/{{ $post->id }}-{{ \Str::slug($post->title, '-') }}.html">{{ $post->title }}</a>
                                         </h4>
                                         <div class="blog-post-meta">
                                             <ul class="list-wrap">
                                                 <li><i
                                                         class="flaticon-calendar"></i>{{ $post->created_at->locale('vi')->diffForHumans() }}
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                     </div>
                     <div class="sidebar-widget sidebar-widget-two">
                         <div class="sidebar-img">
                             <a href="#">
                                 <img src="/template/assets/img/images/sidebar_img06.jpg" alt="">
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- top-news-post-end -->

 <!-- newsletter-area -->
 <section class="newsletter-area-four">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="newsletter-wrap-four">
                     <div class="newsletter-content">
                         <h2 class="title">Đăng ký theo dõi tin tức và cập nhật mới nhất từ chúng tôi</h2>
                     </div>
                     <div class="newsletter-form">
                         <form action="#">
                             <div class="form-grp">
                                 <input type="text" placeholder="Name">
                             </div>
                             <div class="form-grp">
                                 <input type="email" placeholder="Email">
                             </div>
                             <button type="submit" class="btn">Đăng ký</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- newsletter-area-end -->
