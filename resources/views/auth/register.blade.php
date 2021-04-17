<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>پل ایده‌آل پارس | ورود</title>
    <meta name="description" content="ورود به حساب کاربری سامانه ثبت محصول شرکت پل ایده آل پارس" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://v1.fontapi.ir/css/Shabnam" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('css/pages/login-2.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all p ages)-->
    <link href="{{ asset('plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('css/header/base/light.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/header/menu/light.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/brand/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/aside/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="https://guard.medpip.com/media/02_1.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-2 login-signup-on d-flex flex-column flex-lg-row flex-column-fluid bg-white"
            id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
                <!--begin: Aside Container-->
                <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
                    <!--begin::Logo-->
                    <a href="index.html" class="text-center pt-2">
                        <img alt="Logo" src="{{ asset('images/logo-dark.png') }}" height="128px" />
                    </a>
                    <!--end::Logo-->

                    <!--begin::Aside body-->
                    <div class="d-flex flex-column-fluid flex-column flex-center">
                        @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                            <div class="mb-2">
                                <li class="text-danger">
                                    {{$error}}
                                </li>
                            </div>
                            @endforeach
                        </ul>
                        @endif

                        <!--begin::Signin-->
                        <div class="login-form login-signin py-11">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" action="{{ route('login') }}" method="POST"
                                id="kt_login_signin_form">
                                @csrf
                                <!--begin::Title-->
                                <div class="text-center pb-8">
                                    <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">ورود</h2>
                                    <span class="text-muted font-weight-bold font-size-h4">یا
                                        <a href="" class="text-primary font-weight-bolder" id="kt_login_signup">ساخت
                                            حساب کاربری</a></span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">آدرس ایمیل</label>
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg"
                                        type="text" name="email" autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mt-n5">
                                        <label class="font-size-h6 font-weight-bolder text-dark pt-5">رمز عبور</label>
                                        <a href="javascript:;"
                                            class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5"
                                            id="kt_login_forgot">رمز عبور خود را فراموش کرده اید؟</a>
                                    </div>
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg"
                                        type="password" name="password" autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Action-->
                                <div class="text-center pt-2">
                                    <button id="kt_login_signin_submit"
                                        class="btn btn-dark w-100 font-weight-bolder font-size-h6 px-8 py-4 my-3">ورود</button>
                                </div>
                                <!--end::Action-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signin-->
                        <!--begin::Signup-->
                        <div class="login-form login-signup pt-11">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" action="{{ route('register') }}" method="POST"
                                id="kt_login_signup_form">
                                @csrf
                                <!--begin::Title-->
                                <div class="text-center pb-8">
                                    <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">ثبت نام</h2>
                                    <p class="text-muted font-weight-bold font-size-h4">جهت ثبت نام فیلد های زیر را
                                        تکمیل نمایید.</p>
                                </div>
                                <!--end::Title-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input
                                        class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                        type="text" placeholder="نام" name="fname" autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input
                                        class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                        type="text" placeholder="نام خانوادگی" name="lname" autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input
                                        class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                        type="email" placeholder="آدرس ایمیل" name="email" autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input
                                        class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                        type="tel" placeholder="شماره موبایل" name="mobile" autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input
                                        class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                        type="password" placeholder="رمز عبور" name="password" autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input
                                        class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                        type="password" placeholder="تکرار رمز عبور" name="cpassword"
                                        autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label class="checkbox mb-0">
                                        <input type="checkbox" name="agree" /><span class="mr-1"></span>اینجانب صحت
                                        تمامی اطلاعات وارد شده را تایید میکنم.
                                    </label>
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                    <button type="button" id="kt_login_signup_submit"
                                        class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">ثبت
                                        نام</button>
                                    <button type="button" id="kt_login_signup_cancel"
                                        class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">بازگشت</button>
                                </div>
                                <!--end::Form group-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signup-->
                        <!--begin::Forgot-->
                        <div class="login-form login-forgot pt-11">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" action="{{ route('password.email') }}"
                                method="POST" id="kt_login_forgot_form">
                                @csrf
                                <!--begin::Title-->
                                <div class="text-center pb-8">
                                    <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">فراموشی رمز
                                        عبور</h2>
                                    <p class="text-muted font-weight-bold font-size-h4">جهت دریافت رمز جدید شماره موبایل
                                        خود را وارد کنید.</p>
                                </div>
                                <!--end::Title-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input
                                        class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                        type="phone" placeholder="آدرس ایمیل" name="email" autocomplete="off" />
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                    <button type="button" id="kt_login_forgot_submit"
                                        class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">تغییر
                                        رمز</button>
                                    <button type="button" id="kt_login_forgot_cancel"
                                        class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">انصراف</button>
                                </div>
                                <!--end::Form group-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Forgot-->
                    </div>
                    <!--end::Aside body-->
                    <!--begin: Aside footer for desktop-->
                    <div class="text-center">
                        <a href="{{ route('home') }}"
                            class="btn btn-light-dark font-weight-bolder w-100 px-8 py-4 my-3 font-size-h6">
                            بازگشت به سایت
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/social-icons/google.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span></a>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-light-primary font-weight-bolder w-100 px-8 py-4 my-3 font-size-h6">
                            راهنمای ثبت محصول
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/social-icons/google.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                        <path
                                            d="M12,16 C12.5522847,16 13,16.4477153 13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 C11,16.4477153 11.4477153,16 12,16 Z M10.591,14.868 L10.591,13.209 L11.851,13.209 C13.447,13.209 14.602,11.991 14.602,10.395 C14.602,8.799 13.447,7.581 11.851,7.581 C10.234,7.581 9.121,8.799 9.121,10.395 L7.336,10.395 C7.336,7.875 9.31,5.922 11.851,5.922 C14.392,5.922 16.387,7.875 16.387,10.395 C16.387,12.915 14.392,14.868 11.851,14.868 L10.591,14.868 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span></a>
                    </div>
                    <!--end: Aside footer for desktop-->
                </div>
                <!--end: Aside Container-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0"
                style="background: url('/images/login-back.jpg');background-attachment: fixed;">
                <!--begin::Title-->
                <div
                    class="d-flex flex-column justify-content-center text-center pt-lg-40 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
                    <h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;">بخش مدیریت سامانه
                        تست‌لب</h3>
                    <p class="font-size-h2-md font-size-lg text-dark opacity-70"> این بخش محدود شده است و صرفا ویژه تیم
                        مدیریت است
                    </p>
                </div>
                <!--end::Title-->
                <!--begin::Image-->
                <div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center"
                    style="background-image: url(assets/media/svg/illustrations/login-visual-2.svg);"></div>
                <!--end::Image-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#f9396a",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Shabnam"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('js/pages/ir-city-select.js') }}"></script>
    <script src="{{ asset('js/pages/login-general.js') }}"></script>
    <!--end::Page Scripts-->

    <!--begin::Page Scripts(used by this page)-->
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>