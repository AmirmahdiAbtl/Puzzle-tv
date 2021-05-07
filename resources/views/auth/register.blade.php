@extends('layouts.app')

@section('content')
<div class="d-flex flex-column flex-root mt-24">
    <!--begin::Login-->
    <div class="login login-5 login-signin-on d-flex flex-row-fluid my-10" id="kt_login">
        <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
            style="background-image: url(/metronic/theme/html/demo1/dist/assets/media/bg/bg-2.jpg);">
            <div
                class="login-form text-center text-white p-7 position-relative overflow-hidden bg-white-o-50 w-400px rounded">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-3">
                    <a class="font-weight-boldest display-3 text-white" href="#">ایران&zwnj;تی&zwnj;وی</a>
                </div>
                <!--end::Login Header-->
                <!--begin::Login Sign in form-->
                <div class="login-signup">
                    <div class="mb-10">
                        <h3 class="opacity-40 font-weight-normal">ثبت نام</h3>
                    </div>
                    @include('partials.alerts')
                    <form class="form text-center fv-plugins-bootstrap fv-plugins-framework" id="kt_login_signup_form" method="post" action="{{ route('auth.register') }}">
                        @csrf
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8"
                                type="text" placeholder="نام" name="fname">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8"
                                type="text" placeholder="نام خانوادگی" name="lname">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8"
                                type="tel" placeholder="شماره موبایل" name="mobile" autocomplete="off">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8"
                                type="password" placeholder="رمز عبور" name="password">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <div class="form-group text-left px-8 fv-plugins-icon-container">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-outline checkbox-white opacity-60 text-white m-0">
                                    <input type="checkbox" name="agree" required>
                                    <span></span>من تمامی
                                    <a href="#" class="text-white font-weight-bold mx-1">قوانین و مقررات</a> اعلامی را قبول دارم.</label>
                            </div>
                            <div class="form-text text-muted text-center"></div>
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <div class="form-group mb-2">
                            <button id="kt_login_signup_submit"
                                class="btn btn-danger opacity-90 px-15 py-3 w-100">ثبت نام</button>
                            <a href="{{ route('auth.login') }}"
                                class="btn btn-outline-white opacity-70 px-15 py-3 mt-5 mb-0 w-100">بازگشت به صفحه ورود</a>
                        </div>
                        <div></div>
                    </form>
                </div>
                <!--end::Login Sign in form-->
            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
@endsection