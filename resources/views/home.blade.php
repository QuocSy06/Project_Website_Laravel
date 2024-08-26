<!doctype html>
<html class="no-js" lang="en">
    
<head>
        @include('head')
    </head>
    
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div class="loader-inner">
                <div id="loader">
                    <h2 id="bg-loader">newspaper<span>.</span></h2>
                    <h2 id="fg-loader">newspaper<span>.</span></h2>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- Dark/Light-toggle -->
        <div class="darkmode-trigger">
            <label class="modeSwitch">
                <input type="checkbox">
                <span class="icon"></span>
            </label>
        </div>
        <!-- Dark/Light-toggle-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        @include('header')
        <!-- header-area-end -->


        <!-- main-area -->
        <main class="fix">

            <!-- banner-post-area -->
                @include('posts.list')
            <!-- banner-post-area-end -->

            <!-- ad-banner-area -->
            <div class="ad-banner-area pt-50 pb-60">
                <div class="container">
                    <div class="ad-banner-img ad-banner-img-two text-center">
                        <a href="#">
                            <img src="/template/assets/img/images/advertisement14.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- ad-banner-area-end -->

         

        </main>
        <!-- main-area-end -->

        @include('footer')
    </body>

<!-- Mirrored from themegenix.net/html/zaira/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2024 01:37:25 GMT -->
</html>
