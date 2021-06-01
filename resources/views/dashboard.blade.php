@extends('layouts.app')

@section('content')

<div class="container-fluid mt-30 " style="background-color: rgb(18, 18, 18);" id="dashboard">
    <div class="card card-custom rounded">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded font-weight-bolder text-white">
                    {{$user->fname}} {{$user->lname}} خوش آمدید
                </h3>
            </div>

        </div>

        <div class="card-body form-group row   rounded col-12 col-md-12  py-3 col-sm-8 ">
            <div class="col-md-2 h-100 col-12 form-group column">
                <div class="card rounded border-1   border-white">
                    <h5 class="card-header">اطلاعات</h5>
                    <div class="col-12">
                        <a href="{{ route('edit_user') }}" class="btn btn-bg-light mt-5 mb-5 ">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="text-black">ویرایش اطلاعات</span>
                        </a>

                    </div>
                    <div class="col-12">
                        <a href="{{ route('dashboard') }}" class="btn btn-bg-light mt-5 mb-5 ">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="text-black">داشبورد</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class=" form-group column offset-1">
                <div class="col-12   ">
                    <div class="card rounded border-1   border-white ">
                        <h5 class="card-header">لیست تراکنش ها</h5>
                        <div class="card-body">
                            <table class="  table table-striped">
                                <thead style="background-color: rgb(35 , 25, 45)!important;">
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
                            <a href="{{route('payment.create')}}" class=" btn-white text-black">خرید اشتراک</a>
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