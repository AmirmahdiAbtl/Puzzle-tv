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
                        <h3 class="opacity-40 font-weight-normal">اطلاعات حساب کاربری </h3>
                    </div>
                    @include('partials.alerts')
                    <form class="form text-center fv-plugins-bootstrap fv-plugins-framework" id="kt_login_signup_form" method="post" action="{{ route('edit_user_save') }}">
                        @if (count($errors)>0)
                        <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-left pt-2">{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @method('put')
                        @csrf
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8"
                                type="text" placeholder="نام" name="fname" value="{{$user->fname}}">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8"
                                type="text" placeholder="نام خانوادگی" name="lname" value="{{$user->lname}}">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8"
                                type="text" placeholder="سن" name="age" value="{{$user->age}}">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8"
                                type="text" placeholder="کشور" name="country" value="{{$user->country}}">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8"
                                type="text" placeholder="شهر" name="city" value="{{$user->city}}">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8"
                                type="text" placeholder="کد ملی" name="national_code" value="{{$user->national_code}}">
                            <div class="fv-plugins-message-container"></div>
                        </div>

                        <div class="form-group mb-2">
                            <button id="kt_login_signup_submit"
                                class="btn btn-danger opacity-90 px-15 py-3 w-100">ثبت اطلاعات</button>
                            <a href="{{ route('login') }}"
                                class="btn btn-outline-white opacity-70 px-15 py-3 mt-5 mb-0 w-100">خرید اشتراک</a>
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