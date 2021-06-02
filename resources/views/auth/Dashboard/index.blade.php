@extends('layouts.app')

@section('content')
@extends('layouts.app')

@section('content')
<div class="container   mt-30 text-white  ">
    <div class="row">
        @include('layouts.Dashboard')
        <!-- <div class="col-md-10"></div> -->
        <div class=" rounded border-1 col-md-8 mx-3 col-12   border-white  " style="background-color: rgb(38, 38, 38);">
            <h5 class="card-header">لیست تراکنش ها</h5>
            <div class="card-body">
                <table class="  table table-striped">
                    <thead >
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
</div>

@endsection
@section('css')
<style>
    #dashboard>div,
    h5,
    table,
    thead,
    tbody {
        background-color: rgb(38, 38,38) !important;
        color: white;
    }

    .card,
    h5 {
        background-color: rgb(38, 38, 38) !important;
        color: white;
    }
</style>
@endsection
{{--
<div class="container  mt-30 col-9 " style="background-color: rgb(18, 18, 18);" id="dashboard">
    
       
           
        <div class=" row">
            
             @include('layouts.Dashboard')
            
            <div class="p   col-md-7">
                <div class="col-12    ">
                    <div class=" rounded border-1   border-white ">
                        <h5 class="card-header">لیست تراکنش ها</h5>
                        <div class="card-body">
                            <table class="  table table-striped">
                                <thead >
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
              
            </div>
        </div>
   
</div>
--}}
