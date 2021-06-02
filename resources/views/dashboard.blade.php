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
            <div class=" form-group column offset-2 col-md-5">
                <div class="col-12    ">
                    <div class="card rounded border-1   border-white ">
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