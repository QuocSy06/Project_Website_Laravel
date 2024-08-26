 <div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="/" class="logo-light">
            <img src="/template/admin/assets/images/logotintuc.png" alt="logo" class="logo-lg">
            <img src="/template/admin/assets/images/logotintuc.png" alt="small logo" class="logo-sm">
        </a>

        <!-- Brand Logo Dark -->
        <a href="/" class="logo-dark">
            <img src="/template/admin/assets/images/logotintuc.png" style="width: 120px; height: 120px;" alt="dark logo" class="logo-lg">
            <img src="/template/admin/assets/images/logotintuc-icon.png" alt="small logo" class="logo-sm">
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar mt-3">
        <!--- Menu -->
        <ul class="menu">
            <li class="menu-item">
                <a href="/admin" class="menu-link active">
                    <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></span>
                    <span class="menu-text"> Tổng quan </span>
                </a>
            </li>
            <!--- Loại tin -->
            <li class="menu-item">
                <div data-bs-toggle="collapse" data-bs-target="#menuForms" class="menu-link" style="cursor: pointer;">
                    <span class="menu-icon"><i data-feather="bookmark"></i></span>
                    <span class="menu-text">Danh mục bài viết</span>
                    <span class="menu-arrow"><i style="font-size: 12px;" class="fa-solid fa-chevron-right"></i></span>
                </div>
                <div class="collapse" id="menuForms">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="/admin/menus/add" class="menu-link">
                                <span class="menu-text">Thêm danh mục mới</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/admin/menus/list" class="menu-link">
                                <span class="menu-text">Danh sách danh mục</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!--- Tin tức -->
            <li class="menu-item">
                <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="file-text"></i></span>
                    <span class="menu-text"> Bài viết </span>
                    <span class="menu-arrow"><i style="font-size: 12px;" class="fa-solid fa-chevron-right"></i></span>
                </a>
                <div class="collapse" id="menuExpages">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="/admin/posts/add" class="menu-link">
                                <span class="menu-text">Thêm bài viết mới</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/admin/posts/list" class="menu-link">
                                <span class="menu-text">Danh sách bài viết</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!--- Comments -->
            <li class="menu-item">
                <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></span>
                    <span class="menu-text"> Comments </span>
                    <span class="menu-arrow"><i style="font-size: 12px;" class="fa-solid fa-chevron-right"></i></span>
                </a>
                <div class="collapse" id="menuEcommerce">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="/admin/comments/list" class="menu-link">
                                <span class="menu-text">Danh sách bình luận</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!--- User -->
            <li class="menu-item">
                <a href="#menuCrm" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="users"></i></span>
                    <span class="menu-text"> Tài khoản </span>
                    <span class="menu-arrow"><i style="font-size: 12px;" class="fa-solid fa-chevron-right"></i></span>
                </a>
                <div class="collapse" id="menuCrm">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="/admin/users/list" class="menu-link">
                                <span class="menu-text">Danh sách tài khoản</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            
        </ul>
        
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>