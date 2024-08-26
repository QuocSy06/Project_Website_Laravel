<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

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
                                            Đăng ký
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">Bạn chưa có tài khoản? Tạo tài khoản của bạn, chỉ mất chưa đầy một phút.</p>
                            </div>

                            @include('admin.alert')

                            <form action="{{ route('register') }}" method="POST">
                                @csrf

                                <!-- Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Tên của bạn</label>
                                    <input class="form-control" name="name" type="text" id="name"  placeholder="Nhập tên của bạn" value="{{ old('name') }}">
                                </div>

                                <!-- Email Address -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" name="email" type="email" id="email"  placeholder="Nhập địa chỉ email" value="{{ old('email') }}">
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mật khẩu</label>
                                    <div class="input-group input-group-merge">
                                        <input name="password" type="password" id="password" class="form-control" placeholder="Nhập mật khẩu" >
                                        <div class="input-group-text" data-password="false">
                                            <i class="fa-regular fa-eye"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
                                    <input name="password_confirmation" type="password" id="password_confirmation" class="form-control" placeholder="Nhập lại mật khẩu" >
                                </div>

                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit">Đăng ký</button>
                                </div>

                                @csrf
                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p> <a href="{{ route('login') }}" class="text-white-50 ms-1">Bạn đã có tài khoản?</a></p>
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

</html>
