<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

    
<!-- Mirrored from coderthemes.com/ubold/layouts/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 03:44:49 GMT -->
<head>
        @include('admin.head')
</head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-brand">
                                        <a href="#" class="logo logo-dark text-center">
                                            <span class="title fs-3">
                                                Login Admin
                                            </span>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-4 mt-3">Nhập địa chỉ email và mật khẩu của bạn để truy cập bảng quản trị.</p>
                                </div>
                                @include('admin.alert')
                                <form action="/admin/users/login/store" method="post">

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email</label>
                                        <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Nhập địa chỉ email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mật khẩu</label>
                                        <div class="input-group input-group-merge">
                                            <input name="password" type="password" id="password" class="form-control" placeholder="Nhập mật khẩu">
                                            <div class="input-group-text" data-password="false">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input name="remember" type="checkbox" class="form-check-input" id="checkbox-signin">
                                            <label class="form-check-label" for="checkbox-signin">Ghi nhớ tôi</label>
                                        </div>
                                    </div>

                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" type="submit"> Đăng nhập </button>
                                    </div>

                                    @csrf

                                </form>

                                

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="#" class="text-white-50 ms-1">Quên mật khẩu?</a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Authentication js -->
<script src="/template/admin/assets/js/pages/authentication.init.js"></script>
    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 03:44:50 GMT -->
</html>