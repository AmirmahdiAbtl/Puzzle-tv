@extends('layouts.app')

@section('content')
<div class="d-flex flex-column flex-root mt-24">
    <!--begin::Login-->
    <div class="login login-5 login-signin-on d-flex flex-row-fluid my-10" id="kt_login">
        <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(/metronic/theme/html/demo1/dist/assets/media/bg/bg-2.jpg);">
            <div class="login-form text-center text-white p-7 position-relative overflow-hidden bg-white-o-50 w-400px rounded">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-3">
                    <a class="font-weight-boldest display-3 text-white" href="#">ایران&zwnj;تی&zwnj;وی</a>
                </div>
                <!--end::Login Header-->
                <!--begin::Login Sign in form-->
                <div class="login-signin">
                    <div class="mb-20">
                        <h3 class="opacity-40 font-weight-normal">ورود به حساب کاربری</h3>
                    </div>
                    <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_login_signin_form" novalidate="novalidate" method="POST">
                        @if (count($errors)>0)
                        <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-left pt-2">{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8" type="text" placeholder="شماره موبایل" name="mobile" autocomplete="off">
                        <div class="fv-plugins-message-container"></div></div>
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8" type="password" placeholder="رمز عبور" name="password">
                        <div class="fv-plugins-message-container"></div></div>
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-60">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                                <input type="checkbox" name="remember">
                                <span></span>مرا به خاطر بسپار</label>
                            </div>
                        </div>
                        <div class="form-group text-center mt-10">
                            <button id="kt_login_signin_submit" class="btn btn-danger w-100 text-white px-15 py-3">ورود</button>
                        </div>
                    <input type="hidden"><div></div></form>
                    <div class="mt-10">
                        <span class="opacity-40 mr-1">هنوز در سایت حساب کاربری ندارید?</span>
                        <a href="{{ route('register') }}" class="text-danger font-weight-normal">ثبت نام</a>
                    </div>
                    <div class="mt-10">
                        <span class="opacity-40 mr-1">رمز عبور خودتو</span>
                        <a href="{{ route('password.request') }}" class="text-danger font-weight-normal">فراموش کردی ؟</a>
                    </div>
                </div>
                <!--end::Login Sign in form-->
            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="text" name="mobile" placeholder="mobile">
        <input type="text" name="password" placeholder="password">
        <button type="submit">Submit</button>
    </form>
</body>
</html> --}}