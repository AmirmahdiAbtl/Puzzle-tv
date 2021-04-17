@extends('layouts.app')

@section('content')

<style>
    @media print {

        .table td,
        .table th {
            background-color: transparent !important;
        }

        html,
        body {
            background-color: #fff !important;
            border: 3px solid rgba(235, 237, 243);
        }

        #bottom-bar {
            position: absolute;
            bottom: 0;
            width: 95%;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 15px 15px 0 0;
        }
    }
</style>

<div class="container">
    <div class="card card-custom my-10 border-0">
        <div class="card-body pt-0 pb-20">
            <!--begin::Invoice-->
            <!--begin::Invoice header-->
            <div class="container">
                <div class="card card-custom card-shadowless">
                    <div class="card-body p-0">
                        <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
                            <div class="col-md-10">
                                <div class="d-flex justify-content-between align-items-center flex-column flex-md-row">
                                    <div
                                        class="d-flex flex-column px-0 order-2 order-md-1 align-items-center align-items-md-start">
                                        <!--begin::Logo-->
                                        <a href="#" class="mb-5 max-w-115px">
                                            <img src="https://puzzle-stu.com/media/Logo-New.svg" alt="کارنسا"
                                                height="48px">
                                        </a>
                                        <!--end::Logo-->
                                        <span
                                            class="d-flex flex-column font-size-h5 font-weight-bold text-muted align-items-center align-items-md-start">
                                            <span>تهران، دربند، میدان سربند، پلاک ۱، ساختمان پازل</span>
                                        </span>
                                    </div>
                                    <h1 class="display-3 font-weight-bolder order-1 order-md-2 mb-5 mb-md-0">پیش فاکتور
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Invoice header-->
            <!--begin::Invoice Body-->
            <div class="position-relative">
                <!--begin::Background Rows-->
                <div class="bgi-size-cover bgi-position-center bgi-no-repeat h-65px"
                    style="background-image: url(images/abstract-7.svg);"></div>
                <div class="bg-light h-100px"></div>
                <div class="bg-white h-100px"></div>
                <!--end::Background Rows-->
                <!--begin:Table-->
                <div class="container position-absolute top-0 left-0 right-0">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="font-weight-boldest text-white h-65px">
                                            <td class="align-middle font-size-h4 pl-0 border-0">شرح</td>
                                            <td class="align-middle font-size-h4 text-center pr-0 border-0">مبلغ هر ساعت
                                                (تومان)</td>
                                            <td class="align-middle font-size-h4 text-center pr-0 border-0">مدت زمان
                                                (ساعت)</td>
                                            <td class="align-middle font-size-h4 text-right pr-0 border-0">قیمت کل</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="font-size-lg font-weight-bolder h-100px">
                                            <td class="align-middle pl-0 border-0">
                                                پخش زنده و پلی‌بک سیار - ۳ دوربین<br>
                                                <span class="font-weight-light">
                                                    سیستم مانیتور صدا، دوربین متحرک، کیفیت Full-HD،<br />
                                                    کارگردانی پخش زنده، همراه با ارائه فایل خروجی ضبط رویداد
                                                </span>
                                            </td>
                                            <td
                                                class="align-middle text-center font-weight-bold font-size-h5 pr-0 border-0">
                                                ۱،۰۰۰،۰۰۰</td>
                                            <td
                                                class="align-middle text-center font-weight-bold font-size-h5 pr-0 border-0">
                                                ۴</td>
                                            <td
                                                class="align-middle text-right text-danger font-weight-boldest font-size-h5 pr-0 border-0">
                                                ۴،۰۰۰،۰۰۰ تومان</td>
                                        </tr>
                                        <tr class="font-size-lg font-weight-bolder h-100px">
                                            <td class="align-middle pl-0 border-0">
                                                پخش آفلاین (بر اساس خروجی)<br>
                                                <span class="font-weight-light">
                                                    ضبط Full-HD، تدوین و خروجی، تنظیم صدا،<br /> حضور کارگردان در صورت اعلام کارفرما
                                                </span>
                                            </td>
                                            <td
                                                class="align-middle text-center font-weight-bold font-size-h5 pr-0 border-0">
                                                ۲،۰۰۰،۰۰۰</td>
                                            <td
                                                class="align-middle text-center font-weight-bold font-size-h5 pr-0 border-0">
                                                ۲.۵</td>
                                            <td
                                                class="align-middle text-right text-danger font-weight-boldest font-size-h5 pr-0 border-0">
                                                ۵،۰۰۰،۰۰۰ تومان</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:Table-->
                <!--begin::Total-->
                <div class="container">
                    <div class="row justify-content-center pt-25 pb-20 px-15">
                        <div class="col-md-11">
                            <div class="d-inline-block">
                                <p class="font-size-lg font-weight-bolder">
                                    توضیحات:
                                </p>
                                <p class="font-weight-light">
                                    این پیش فاکتور تا تاریخ ۱۶ فروردین ۱۴۰۰ معتبر می‌باشد.
                                </p>
                            </div>
                            <div class="d-inline-block rounded align-items-center float-right justify-content-between text-white w-50 px-7 py-5 bgi-no-repeat bgi-size-cover bgi-position-center"
                                style="background-image: url(images/abstract-9.svg);">
                                <div class="font-weight-boldest font-size-h5">مبلغ کل:</div>
                                <div class="text-right d-flex flex-column">
                                    <span class="font-weight-boldest font-size-h3 line-height-sm">۹،۰۰۰،۰۰۰ تومان
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Total-->
            </div>
            <!--end::Invoice Body-->
            <!--begin::Invoice Footer-->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="row px-14">
                            <div class="col-md-6 mt-7 mt-md-0">
                                <!--begin::Invoice To-->
                                <div class="text-dark-50 font-size-lg font-weight-bold mb-3 text-left">اطلاعات کارفرما
                                </div>
                                <div class="font-size-lg font-weight-bold mb-10 text-left">شرکت PGt
                                    <br />۰۲۱-۸۸۲۱۵۷۴۳
                                    <br />
                                </div>
                                <!--end::Invoice To-->
                                <!--begin::Invoice No-->
                                <div class="text-dark-50 font-size-lg font-weight-bold mb-3 text-left">شماره فاکتور
                                </div>
                                <div class="font-size-lg font-weight-bold mb-10 text-left text-uppercase">pzst-13472
                                </div>
                                <!--end::Invoice No-->
                                <!--begin::Invoice Date-->
                                <div class="text-dark-50 font-size-lg font-weight-bold mb-3 text-left">تاریخ فاکتور
                                </div>
                                <div class="font-size-lg font-weight-bold text-left">۸ فروردین ۱۴۰۰</div>
                                <!--end::Invoice Date-->
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column flex-md-row">
                                    <div class="d-flex flex-column ml-auto">
                                        <img src="{{ asset('images/puzzle-emza.png') }}" class="mx-10" width="128px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Invoice Footer-->
            <!-- begin: Invoice action-->
            <div class="container d-print-none">
                <div class="row justify-content-center py-8 px-8 py-md-28 px-md-0">
                    <div class="col-md-12">
                        <div class="d-flex font-size-sm flex-wrap">
                            <button type="button" class="btn btn-danger font-weight-bolder py-4 mr-3 mr-sm-14 my-1 px-7"
                                onclick="window.print();">چاپ پیش فاکتور</button>
                            <button type="button" class="btn btn-light-danger font-weight-bolder mr-3 my-1 px-7">دانلود
                                پیش فاکتور</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Invoice action-->
            <!--end::Invoice-->
        </div>
    </div>
</div>

@endsection