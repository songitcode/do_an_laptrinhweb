@extends('dashboard')

@section('content_login')
    <link rel="stylesheet" href="{{ asset('./asset/front-end/css/login-style.css') }}">
    <section class="login-box">
        <nav class="top-nav">
            <div class="link-page">
                <p>Trang chủ</p>
                <p>Đăng nhập</p>
            </div>
        </nav>
        <h1 class="container">Đăng nhập</h1>
        <div class="box-login container">
            <form action="#" method="POST" class="form-login">
                <div class="email">
                    <label for="#">Email</label>
                    <input type="email" placeholder="Email" class="email-input" name="email-login" id="email-login"
                        required>
                </div>
                <div class="password">
                    <div class="content">
                        <label for="#">Mật khẩu</label>
                        <input type="password" placeholder="Mậu khẩu" class="password-input" name="password-login"
                            id="password-login" required>
                    </div>
                    {{-- <span class="show-password">
                        <button type="button" class="btn-show">Xem Mật Khẩu</button>
                    </span> --}}
                </div>
                <div class="box-link">
                    <div class="forgot-password">
                        <a href="#">Quên mật khẩu ?</a>
                    </div>
                    <button type="submit" class="btn-login">Đăng nhập</button>
                    <div class="no-account">
                        <a href="#">Không có tài khoản? tạo một tài khoản</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
