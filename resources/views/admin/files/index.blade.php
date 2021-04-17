@extends('layouts.admin')

@section('title', 'فایلها')

@section('content')

    <div class="row justify-content-center">
        <div class="card col-md-10 mt-5">
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
                    @foreach ($files as $file)
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
                                        <input type="text" class="form-control" id="kt_clipboard_{{$file->id}}"
                                            value="{{ env('APP_URL') . 'storage/' . $file->url() }}" />
                                        <div class="input-group-append">
                                            <a href="#" class="btn btn-secondary" data-clipboard="true"
                                                data-clipboard-target="#kt_clipboard_{{$file->id}}">
                                                <i class="la la-copy"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td class="align-middle">
                                <a href="{{route('file.show', $file->id)}}" class='btn btn-primary btn-sm'>دانلود</a>
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
                                            href="{{ route('file.delete', $file->id) }}">
                                            <i class="flaticon-delete-1"></i> حذف فایل
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center align-items-center flex-wrap p-6">
                <div class="contaier">
                    <div class="d-flex flex-wrp py-2 mr-3 text-center">
                        {{ $files->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')
    <script src="{{ asset('js/pages/clipboard.js') }}"></script>
@endsection
