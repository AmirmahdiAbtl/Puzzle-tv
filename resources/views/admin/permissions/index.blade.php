@extends('layouts.admin')

@section('title','پازل استودیو | لیست نقش ها')

@section('content')
    <div class="flex-row-fluid">
        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">لیست دسترسی ها</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--Begin::Body-->
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">نام دسترسی</th>
                            <th scope="col">نام فارسی دسترسی</th>
                            <th scope="col">عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($permissions as $permission)
                            <tr>
                                <td> {{ $permission->name }} </td>
                                <td> {{ $permission->persian_name }} </td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-outline-danger btn-sm" data-toggle="modal"
                                        data-target="#deleteModel{{ $permission->id }}">
                                        <i class="flaticon-delete-1"></i>
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="deleteModel{{ $permission->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">حذف دسترسی</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            آیا از حذف دسترسی اطمینان دارید؟
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-primary font-weight-bold"
                                                data-dismiss="modal">انصراف</button>
                                            <a class="btn btn-danger text-center btn-sm" href="{{ route('permission.destroy', $permission->id) }}" onclick="event.preventDefault();
                                                    document.getElementById('DeleteForm{{$permission->id}}').submit();">
                                                <i class="flaticon-delete-1"></i> حذف دسترسی
                                            </a>
                                            <form method="post" id="DeleteForm{{$permission->id}}"
                                                action="{{ route('permission.destroy', $permission->id) }}" class="d-none">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>
                                هیچ دسترسی برای نمایش وجود ندارد.
                            </p>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Content-->
    </div>
    <!--begin::Content-->
    <div class="flex-row-fluid">
        @include('partials.alerts')
        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">افزودن دسترسی</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--Begin::Body-->
            <div class="card-body">
                <form method="post" action="{{ route('permission.store') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-5 col-12">
                            <input type="text" name="name" class="form-control  " placeholder="نام نقش">
                            @if ($errors->has('name'))
                                <small class="form-text text-danger"> {{ $errors->first('name') }} </small>
                            @endif
                        </div>
                        <div class="col-md-5 col-12 mt-5 mt-md-0">
                            <input type="text" name="persian_name" class="form-control " placeholder="نام فارسی نقش">
                            @if ($errors->has('persian_name'))
                                <small class="form-text text-danger"> {{ $errors->first('persian_name') }} </small>
                            @endif
                        </div>
                        <div class="col-md-2 col-12 mt-5 mt-md-0">
                            <input type="submit" class="btn btn-outline-success btn sm w-100" value="افزودن">
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Body-->
        </div>
    </div>

@endsection
