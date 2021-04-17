@extends('layouts.admin')

@section('css')
<link href="{{ asset('css/pages/wizard-1.rtl.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('content')
<div class="card card-custom">
    <div class="card-body p-0">
        <div class="wizard wizard-1" id="kt_projects_add" data-wizard-state="step-first" data-wizard-clickable="true">
            <!--begin::Wizard Nav-->
            <div class="wizard-nav border-bottom">
                <div class="wizard-steps p-8 p-lg-10">
                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                        <div class="wizard-label">
                            <span class="svg-icon svg-icon-4x wizard-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path
                                            d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <h3 class="wizard-title">محتوای کلی</h3>
                        </div>
                        <span class="svg-icon svg-icon-xl wizard-arrow">
                            <!--begin::Svg Icon | Arrow-Left-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(12.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-12.000000, -12.000000) "
                                        x="11" y="5" width="2" height="14" rx="1" />
                                    <path
                                        d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <div class="wizard-step" data-wizard-type="step">
                        <div class="wizard-label">
                            <span class="svg-icon svg-icon-4x wizard-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z"
                                            fill="#000000" opacity="0.3" />
                                        <path
                                            d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <h3 class="wizard-title">در یک نگاه</h3>
                        </div>
                        <span class="svg-icon svg-icon-xl wizard-arrow">
                            <!--begin::Svg Icon | Arrow-Left-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(12.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-12.000000, -12.000000) "
                                        x="11" y="5" width="2" height="14" rx="1" />
                                    <path
                                        d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <div class="wizard-step" data-wizard-type="step">
                        <div class="wizard-label">
                            <span class="svg-icon svg-icon-4x wizard-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <h3 class="wizard-title">شرح آزمایش</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Wizard Nav-->
            <!--begin::Wizard Body-->
            <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                <div class="col-xl-12 col-xxl-7">
                    <!--begin::Form Wizard-->
                    <form class="form" id="kt_projects_add_form" method="post"
                        action="{{ route('test.update',$test->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <!--begin::Step 1-->
                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                            <h3 class="mb-10 font-weight-bold text-dark">محتوای کلی:</h3>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">نام آزمایش</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-lg form-control-solid" name="name"
                                                type="text" placeholder="Test Name" value="{{$test->name}}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">اسلاگ آدرس</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-lg form-control-solid" name="slug"
                                                type="text" placeholder="Slug" value="{{$test->slug}}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="pb-5" data-wizard-type="step-content">
                            <h3 class="mb-10 font-weight-bold text-dark">در یک نگاه:</h3>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">اسامی مترادف</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-lg form-control-solid"
                                                name="AlsoKnownAs" type="text" placeholder="Also Known As"
                                                value="{{$test->AlsoKnownAs}}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">چرا آزمایش انجام می شود؟</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <textarea class="form-control form-control-lg form-control-solid tinymce-light"
                                                name="WhyGetTested" type="text"
                                                placeholder="Why Get Tested?">{!!$test->WhyGetTested!!}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">چه زمانی باید آزمایش انجام
                                            شود؟</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <textarea class="form-control form-control-lg form-control-solid tinymce-light"
                                                name="WhenToGetTested" type="text"
                                                placeholder="When To Get Tested?">{!!$test->WhenToGetTested!!}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">نمونه مورد نیاز ؟</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <textarea class="form-control form-control-lg form-control-solid tinymce-light"
                                                name="SampleRequired" type="text"
                                                placeholder="Sample Required?">{!!$test->SampleRequired!!}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">آیا برای انجام این تست به آمادگی خاصی نیاز است؟</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <textarea class="form-control form-control-lg form-control-solid tinymce-light"
                                                name="TestPreparationNeeded" type="text"
                                                placeholder="Test Preparation Needed?">{!!$test->TestPreparationNeeded!!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="pb-5" data-wizard-type="step-content">
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">چه چیزی مورد آزمایش قرار می گیرد
                                    ؟</label>
                                <div class="col-lg-9 col-xl-9">
                                    <textarea class="form-control form-control-lg form-control-solid tinymce"
                                        name="Whatisbeingtested" type="text"
                                        placeholder="What is being tested?">{!!$test->Whatisbeingtested!!}</textarea>
                                </div>
                            </div>
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                            <div class="mr-2">
                                <button type="button"
                                    class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                    data-wizard-type="action-prev">مرحله قبل</button>
                            </div>
                            <div>
                                <button type="button"
                                    class="btn btn-success font-weight-bolder text-uppercase px-9 py-4"
                                    data-wizard-type="action-submit">ارسال</button>
                                <button type="button"
                                    class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4"
                                    data-wizard-type="action-next">مرحله بعد</button>
                            </div>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form Wizard-->
                </div>
            </div>
            <!--end::Wizard Body-->
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/pages/add-project.js') }}"></script>
<script src="{{ asset('js/pages/form-repeater.js') }}"></script>

<script src="{{ mix('plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
<script src="{{ mix('js/pages/tinymce.js') }}"></script>
@endsection