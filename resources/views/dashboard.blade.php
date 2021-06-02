@extends('layouts.app')

@section('content')

<div class="container mt-30 col-9 " id="dashboard">


    <div class="card-body  rounded  " style=" background-color: rgb(18, 18, 18) !important;">
        <div class="row" style=" background-color: rgb(18, 18, 18) !important;">
            @include('layouts.Dashboard')

            <div class=" col-7 col-md-7 ">

                <div class=" ">
                    <div class="card rounded ">
                        <div class=" col-12   mt-5">
                            <div class="card rounded ">
                                <h5 class="card-header">اشتراک شما</h5>
                                <div class="card-body">
                                    {{-- @if ($user->expire_subscription == Null)
                            <h5 class="card-title">0روز </h5>
                        @else    
                            <h5 class="card-title">{{$user->expire_subscription->diffInDays(now())}}</h5>
                                    @endif --}}
                                    <h5 class="card-title">{{$user->expire_subscription}} تاریخ پایان اشتراک</h5>

                                    <a href="" class="btn btn-white text-black">خرید اشتراک</a>
                                </div>
                            </div>ّ
                        </div>

                    </div>
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
        background-color: rgb(38, 38, 38) !important;
        color: white;
    }
</style>


@endsection