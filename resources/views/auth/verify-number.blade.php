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
                        <h3 class="opacity-40 font-weight-normal">تایید شماره همراه</h3>
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
                        @if (session('messages'))
                            <div class="alert alert-danger">
                                <ul>
                                    <li class="text-left pt-2">اعتلار کد به پایان رسید. روی دکه ارسال مجدد کلیک نمایید</li>
                                </ul>
                            </div>
                        @endif

                        @if (session('wrong_number'))
                            <div class="alert alert-danger">
                                <ul>
                                    <li class="text-left pt-2">کد تاییدیه بهدرستی وارد نشده است !</li>
                                </ul>
                            </div>
                        @endif
                        
                        @csrf
                        <div class="form-group fv-plugins-icon-container">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8" type="text" placeholder="تاییدیه شماره همراه" name="number" autocomplete="off">
                        <div class="fv-plugins-message-container"></div></div>
                        <div class="form-group text-center mt-10">
                            <button id="kt_login_signin_submit" class="btn btn-danger w-100 text-white px-15 py-3">تایید</button>
                        </div>
                    <input type="hidden"><div></div></form>
                    <div class="mt-10">
                        <span class="opacity-40 mr-1">هنوز در سایت حساب کاربری ندارید?</span>
                        <a href="{{ route('register') }}" class="text-danger font-weight-normal">ثبت نام</a>
                    </div>
                    @if (session('messages'))
                        <form action="{{ route('verification.resend',['id'=>$user->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">ارسال مجدد</button>
                        </form>
                    @endif
                </div>
                <!--end::Login Sign in form-->
            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
@endsection
