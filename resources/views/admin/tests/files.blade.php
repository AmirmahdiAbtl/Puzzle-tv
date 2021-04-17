@extends('layouts.admin')

@section('content')
    <!--begin::Content-->
    <div class="flex-row-fluid">
        @include('partials.alerts')
        @include('partials.validation')
        <div class="card card-custom gutter-b col-md-10 mt-5 offset-1">
            <div class="accordion accordion-solid accordion-panel accordion-svg-toggle" id="accordionExample8">
                <div class="card">
                    <div class="card-header" id="headingTwo8">
                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo8">
                            <div class="card-label">اضافه کردن فایل به {{ $test->name }}</div>
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
                        <div class="card-body mt-5">
                            <form action="{{ route('test.file.store',$test->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 my-10">
                                    <label>عنوان کپشن:</label>
                                    <input type="text" class="form-control form-control-solid" name="description" />
                                    <div class="d-md-none mb-2"></div>
                                </div>
                                <div class="col-md-12 my-10">
                                    <div class="custom-file mb-3">
                                        <input type="file" name="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">فایل خود را انتخاب کنید</label>
                                    </div>
                                </div>
                                <div class="col-md-12 my-10">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="is-private"
                                            name="is-private">
                                        <label class="custom-control-label" for="is-private">به صورت خصوصی آپلود شود</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class='text-center'>
                                        <button type="submit" class="btn btn-primary">آپلود فایل</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    @include('partials.validation')
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-md-10 mt-5 offset-1">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">نام فایل</th>
                        <th scope="col">نوع فایل</th>
                        <th scope="col">حجم فایل</th>
                        <th scope="col">سطح دسترسی</th>
                        <th scope="col">لینک</th>
                        <th scope="col">عملیات</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($test->files as $file)
                        <tr>
                            <td class="align-middle">{{ $file->name }}</td>
                            <td class="align-middle">{{ $file->type }}</td>
                            <td class="align-middle">{{ number_format($file->size / (1024 * 1024), 2) }} مگابایت</td>
                            @if ($file->is_private)
                                <td class="align-middle">خصوصی</td>
                            @else
                                <td class="align-middle">عمومی</td>
                            @endif
                            <td class="align-middle">
                                @if (!$file->is_private)
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="kt_clipboard_{{ $file->id }}"
                                            value="{{ env('APP_URL') . 'storage/' . $file->url() }}" />
                                        <div class="input-group-append">
                                            <a href="#" class="btn btn-secondary" data-clipboard="true"
                                                data-clipboard-target="#kt_clipboard_{{ $file->id }}">
                                                <i class="la la-copy"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td class="align-middle">
                                <a href="{{ route('file.show', $file->id) }}" class='btn btn-primary btn-sm'>دانلود</a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#deleteModel{{ $file->id }}">
                                    حذف
                                </button>
                            </td>
                        </tr>
                        <div class="modal fade" id="deleteModel{{ $file->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">حذف فایل</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        آیا از حذف فایل اطمینان دارید؟
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-primary font-weight-bold"
                                            data-dismiss="modal">انصراف</button>
                                        <a class="btn btn-danger text-center btn-sm"
                                            href="{{ route('test.file.delete',[$test->id, $file->id]) }}">
                                            <i class="flaticon-delete-1"></i> حذف فایل
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script src="{{ asset('js/pages/tinymce.js') }}"></script>
    <script src="{{ asset('js/pages/clipboard.js') }}"></script>
@endsection
