@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="card card-custom rounded">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded font-weight-bolder">
                    {{$user->fname}} {{$user->lname}} خوش آمدید
                </h3>
            </div>

        </div>

        <div class="card-body   rounded col-12 col-md-12  py-3 col-sm-8">
            <div class=" form-group row">
                <div class="   col-12 col-md-5  ">
                    <div class="card rounded border-1   border-primary ">
                        <h5 class="card-header">لیست تراکنش ها</h5>
                        <div class="card-body">
                            <table class="  table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">نام </th>
                                        <th scope="col">شروع </th>
                                        <th scope="col">پایان </th>
                                        <th scope="col">قیمت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{$payment->title}}</td>
                                        <td>{{$payment->start_sub}}</td>
                                        <td>{{$payment->expire_sub}}</td>
                                        <td>{{$payment->price}}</td>
                                    </tr>
                                    @endforeach

                                    <p>
                                        هیچ تراکنشی برای نمایش وجود ندارد.
                                    </p>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=" offset-2 col-md-4 col-6">
                    <div class="card rounded border-1   border-primary">
                        <h5 class="card-header">اشتراک شما</h5>
                        <div class="card-body">
                            {{-- @if ($user->expire_subscription == Null)
                            <h5 class="card-title">0روز </h5>
                        @else    
                            <h5 class="card-title">{{$user->expire_subscription->diffInDays(now())}}</h5>
                            @endif --}}
                            <h5 class="card-title">{{$user->expire_subscription}} تاریخ پایان اشتراک</h5>
                            <a href="" class="btn btn-primary">خرید اشتراک</a>
                        </div>
                    </div>ّ

                </div>
            </div>
        </div>
    </div>
</div>

<div class=" container-fluid">
    <div class="row">
        <a class="navbar-brand font-weight-boldest font-size-h1 text-danger text-hover-danger" href="{{ route('home') }}">ایران&zwnj;تی&zwnj;وی</a>
    </div>
    <div>
        <h5> سامانه مدیریت ویدیو ها</h5>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('js/pages/widgets.js') }}"></script>
@endsection