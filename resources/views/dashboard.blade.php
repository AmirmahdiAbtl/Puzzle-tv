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
        <div class="card-body rounded col-12 col-md-12  py-3 col-sm-8">
            <div class="col-md-3 col-12">
                <table class="table table-striped">
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
                                <td>{{$payment->subscriptions->name}}</td>
                                <td>{{$payment->start_sub}}</td>
                                <td>{{$payment->expire_sub}}</td>
                                <td></td>
                            </tr>  
                        @endforeach
                        

                        <p>
                            هیچ اشتراک برای نمایش وجود ندارد.
                        </p>

                    </tbody>
                </table>
            </div>
            <div class="col-md-9 col-12">
                <div class="card">
                    <h5 class="card-header">اشتراک شما</h5>
                    <div class="card-body">
                        <h5 class="card-title">{{}}</h5>
                        <p class="card-text"></p>
                        
                        <a href="#" class="btn btn-primary">مدت زمان</a>
                    </div>
                </div>ّ

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