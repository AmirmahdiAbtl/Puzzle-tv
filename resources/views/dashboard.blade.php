@extends('layouts.app')

@section('content')

<div class="container-fluid mt-30 col-9 " style="background-color: rgb(18, 18, 18);" id="dashboard">
    <div class="card card-custom rounded">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h1 class="card-label rounded font-weight-bolder text-white">
                    حساب کاربری
                </h1>
            </div>

        </div>

        <div class="card-body form-group row   rounded col-12 col-md-12  py-3 col-sm-8 ">

            @include('layouts.Dashboard')

            <div class=" form-group column col-md-5">
                <div class="col-12    ">
                    <div class=" offset-2 col-md-4 col-6">
                        <div class="card rounded border-1   border-primary">
                            <div class=" col-12   mt-5">
                                <div class="card rounded border-1   border-white">
                                    <h5 class="card-header">اشتراک شما</h5>
                                    <div class="card-body">
                                        {{-- @if ($user->expire_subscription == Null)
                            <h5 class="card-title">0روز </h5>
                        @else    
                            <h5 class="card-title">{{$user->expire_subscription->diffInDays(now())}}</h5>
                                        @endif --}}
                                        <h5 class="card-title">{{$user->expire_subscription}} تاریخ پایان اشتراک</h5>
                                        <a href="" class="btn btn-primary">خرید اشتراک</a>
                                        <a href="" class="btn btn-white text-black">خرید اشتراک</a>
                                    </div>
                                </div>ّ
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            @endsection

            @section('js')
            <script src="{{ asset('js/pages/widgets.js') }}"></script>
            @endsection
            @section('css')
            <style>
                #dashboard>div,
                h5,
                table,
                thead,
                tbody {
                    background-color: rgb(38, 38, 38) !important;
                    color: white;
                }

                .card,
                h5 {
                    background-color: rgb(70, 70, 75) !important;
                    color: white;
                }
            </style>


            @endsection