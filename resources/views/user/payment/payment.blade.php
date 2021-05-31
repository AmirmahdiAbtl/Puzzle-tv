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
                <div class="login-signup">
                    <div class="mb-10">
                        <h3 class="opacity-40 font-weight-normal">خرید اشتراک </h3>
                    </div>
                    @include('partials.alerts')

                    <div class="form-group ">
                    <a href="{{ route('login') }}" class="btn btn-outline-white opacity-70 px-15 py-3 mt-5 mb-0 w-100  d-flex ">
                    <input style="display: inline; float:right" type="checkbox" class="  form-check-input rounded" id="exampleCheck1">
                    اشتراک 1 و قیمت
                    </a>
                       
                    </div>

                    <div class="form-group mb-2">
                        <button id="kt_login_signup_submit" class="btn btn-danger opacity-90 px-15 py-3 w-100">خرید</button>
                        <a href="{{ route('login') }}" class="btn btn-outline-white opacity-70 px-15 py-3 mt-5 mb-0 w-100">خرید اشتراک</a>
                    </div>
                    <div></div>

                </div>
                <!--end::Login Sign in form-->
            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
@endsection