@extends('layouts.app')

@section('content')

<style>
@media print
{
.table td, .table th {
    background-color: transparent !important;
}
html, body {
    background-color: #fff !important;
    border: 3px solid rgba(235,237,243);
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
    <div class="card card-custom my-10">
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
                                            <img src="images/karensa-transparent.png" alt="کارنسا" height="48px">
                                        </a>
                                        <!--end::Logo-->
                                        <span
                                            class="d-flex flex-column font-size-h5 font-weight-bold text-muted align-items-center align-items-md-start">
                                            <span>تهران، خیابان استاد مطهری، بعد از خیابان مفتح،</span>
                                            <span>خیابان جهانتاب، خیابان نقدی، پلاك ۱۲، طبقه اول</span>
                                        </span>
                                    </div>
                                    <h1 class="display-3 font-weight-bolder order-1 order-md-2 mb-5 mb-md-0">فاکتور پرداخت
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
                                            <td class="align-middle font-size-h4 text-right pr-0 border-0">مبلغ واحد (تومان)</td>
                                            <td class="align-middle font-size-h4 text-right pr-0 border-0">تخفیف (تومان)</td>
                                            <td class="align-middle font-size-h4 text-right pr-0 border-0">قیمت کل</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="font-size-lg font-weight-bolder h-100px">
                                            <td class="align-middle pl-0 border-0">
                                                رفع ایرادات، بهینه سازی و افزایش سرعت فروشگاه<br>
                                                <span class="font-weight-light">
                                                    آدرس سایت: maroosta.ir
                                                </span>
                                            </td>
                                            <td
                                                class="align-middle text-right font-weight-bold font-size-h5 pr-0 border-0">
                                                ۳،۰۰۰،۰۰۰</td>
                                            <td
                                                class="align-middle text-right font-weight-bold font-size-h5 pr-0 border-0">
                                                ۱،۷۰۰،۰۰۰</td>
                                            <td
                                                class="align-middle text-right text-danger font-weight-boldest font-size-h5 pr-0 border-0">
                                                ۱،۳۰۰،۰۰۰ تومان</td>
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
                    <div class="row justify-content-center pt-25 pb-20">
                        <div class="col-md-11">
                            <div class="d-inline-block">
                                <p class="font-size-lg font-weight-bolder">
                                    توضیحات:
                                </p>
                                <p class="font-weight-light">
                                    مبلغ ۱،۵۰۰،۰۰۰ به جهت فعالیت خیرخواهانه تیم ماروستا تخفیف لحاظ گردید.<br>
                                    مبلغ ۲۰۰،۰۰۰ تومان بابت تاخیر پیش آماده نسبت به زمان‌بندی اعلامی تخفیف لحاظ گردید.
                                </p>
                            </div>
                            <div class="d-inline-block rounded align-items-center float-right justify-content-between text-white w-50 px-7 py-5 bgi-no-repeat bgi-size-cover bgi-position-center"
                                style="background-image: url(images/abstract-9.svg);">
                                <div class="font-weight-boldest font-size-h5">مبلغ کل:</div>
                                <div class="text-right d-flex flex-column">
                                    <span class="font-weight-boldest font-size-h3 line-height-sm">۱،۳۰۰،۰۰۰ تومان
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex flex-column flex-md-row">
                                    <div class="d-flex flex-column">
                                        <div class="font-weight-bold font-size-h6 mb-3">اطلاعات پرداخت</div>
                                        <div class="d-flex justify-content-between font-size-lg mb-3">
                                            <span class="font-weight-bold mr-15">نام و نام خانوادگی:</span>
                                            <span class="text-right">فراز صدری علمداری</span>
                                        </div>
                                        <div class="d-flex justify-content-between font-size-lg mb-3">
                                            <span class="font-weight-bold mr-15">شماره کارت:</span>
                                            <span class="text-right">۶۰۳۷-۹۹۱۸-۱۲۷۷-۷۶۱۷</span>
                                        </div>
                                        <div class="d-flex justify-content-between font-size-lg">
                                            <span class="font-weight-bold mr-15">نام بانک:</span>
                                            <span class="text-right">بانک ملی ایران</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-7 mt-md-0">
                                <!--begin::Invoice To-->
                                <div class="text-dark-50 font-size-lg font-weight-bold mb-3 text-right">اطلاعات کارفرما
                                </div>
                                <div class="font-size-lg font-weight-bold mb-10 text-right">فروشگاه اینترنتی ماروستا
                                    <br />۰۲۱-۸۸۲۱۵۷۴۳
                                    <br /><br />جمال‌الدین راحمی
                                    <br />۰۹۱۲۸۰۰۱۱۵۸
                                </div>
                                <!--end::Invoice To-->
                                <!--begin::Invoice No-->
                                <div class="text-dark-50 font-size-lg font-weight-bold mb-3 text-right">شماره فاکتور
                                </div>
                                <div class="font-size-lg font-weight-bold mb-10 text-right text-uppercase">krnsa-13472</div>
                                <!--end::Invoice No-->
                                <!--begin::Invoice Date-->
                                <div class="text-dark-50 font-size-lg font-weight-bold mb-3 text-right">تاریخ فاکتور
                                </div>
                                <div class="font-size-lg font-weight-bold text-right">۷ فروردین ۱۴۰۰</div>
                                <!--end::Invoice Date-->
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