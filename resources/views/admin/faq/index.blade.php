@extends('layouts.admin')

@section('content')
    <!--begin::Content-->
    <div class="flex-row-fluid">
        @include('partials.alerts')
        @include('partials.validation')
        <div class="card card-custom gutter-b">
            <div class="accordion accordion-solid accordion-panel accordion-svg-toggle" id="accordionExample8">
                <div class="card">
                    <div class="card-header" id="headingTwo8">
                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo8">
                            <div class="card-label">اضافه کردن سوال به {{ $test->name }}</div>
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path
                                            d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                        <path
                                            d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                                            transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) ">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div id="collapseTwo8" class="collapse" data-parent="#accordionExample8">
                        <div class="card-body">
                            <form method="post" action=" {{ route('test.faq.store', $test->id) }} ">
                                @csrf
                                <div data-repeater-item="" class="form-group row align-items-end">
                                    <div class="col-md-12">
                                        <label>عنوان سوال:</label>
                                        <input type="text" class="form-control form-control-solid" name="question" />
                                        <div class="d-md-none mb-2"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>پاسخ:</label>
                                        <textarea class="form-control form-control-solid tinymce" name="answer"></textarea>
                                        <div class="d-md-none mb-2"></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group mt-5 mb-2">
                                    <input type="submit" class="btn btn-outline-success btn w-25" value="ایجاد">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($test->faqs as $faq)
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        {!! $faq->question !!}
                    </div>
                    <div class="my-auto">

                        <button type="button" class="btn btn-icon btn-outline-danger btn-sm" data-toggle="modal"
                            data-target="#deleteModel{{ $faq->id }}">
                            <i class="flaticon-delete-1"></i>
                        </button>
                        <a href="{{ route('faq.edit', $faq->id) }}"
                            class="btn btn-icon btn-outline-success btn-sm">
                            <i class="flaticon-edit"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">
                        {!! $faq->answer !!}
                    </div>
                </div>
            </div>
            <div class="modal fade" id="deleteModel{{ $faq->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">حذف سوال</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            آیا از حذف سوال اطمینان دارید؟
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold"
                                data-dismiss="modal">انصراف</button>
                            <a class="btn btn-danger text-center btn-sm" href="{{ route('faq.destroy', $faq->id) }}">
                                <i class="flaticon-delete-1"></i> حذف سوال
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('js')
<script src="{{ asset('plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
<script src="{{ asset('js/pages/tinymce.js') }}"></script>
@endsection