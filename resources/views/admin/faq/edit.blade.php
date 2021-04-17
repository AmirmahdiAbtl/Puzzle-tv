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
                            <div class="card-label">ویرایش سوال</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action=" {{ route('faq.update', $faq->id) }} ">
                            @csrf
                            <div data-repeater-item="" class="form-group row align-items-end">
                                <div class="col-md-12">
                                    <label>عنوان سوال:</label>
                                    <input type="text" class="form-control form-control-solid" name="question" value="{{$faq->question}}"/>
                                    <div class="d-md-none mb-2"></div>
                                </div>
                                <div class="col-md-12">
                                    <label>پاسخ:</label>
                                    <textarea class="form-control form-control-solid tinymce" name="answer">{{$faq->answer}}</textarea>
                                    <div class="d-md-none mb-2"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group mt-5 mb-2">
                                <input type="submit" class="btn btn-outline-success btn w-25" value="ویرایش">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="{{ asset('plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
<script src="{{ asset('js/pages/tinymce.js') }}"></script>
@endsection