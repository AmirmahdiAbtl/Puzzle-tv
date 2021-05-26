@extends('layouts.admin')

@section('content')
    <!--begin::Content-->
    <div class="flex-row-fluid">
        <div class="card card-custom gutter-b">
            <!--Begin::Body-->
            <div class="card-body p-2">
                <div class="tab-content pt-5">
                    <!--begin::Tab Content-->
                    <div class="tab-pane active">
                        <div class="card card-custom gutter-b shadow-none">
                            <!--begin::Header-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">افزودن کاربر</span>
                                </h3>
                                <div class="card-toolbar">
                                    <a href="{{ route('user.index') }}"
                                        class="btn btn-success font-weight-bolder font-size-sm">
                                        لیست کاربران
                                    </a>
                                </div>
                            </div>
                            <!--end::Header-->
                            <div class="card-body">
                                @include('partials.alerts')
                                @include('partials.validation')
                                <form method="post" action=" {{ route('user.store') }} "
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-md-6 col-12">
                                            <label class="font-size-h6 font-weight-bolder text-dark">نام</label>
                                            <input type="text" name="fname" class="form-control  " placeholder="نام" >
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label class="font-size-h6 font-weight-bolder text-dark">نام خانوادگی</label>
                                            <input type="text" name="lname" class="form-control "
                                                placeholder="نام خانوادگی">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label class="font-size-h6 font-weight-bolder text-dark">تلفن همراه</label>
                                            <input type="text" class="form-control" name="mobile" placeholder="09123456789"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-12">
                                            <label class="font-size-h6 font-weight-bolder text-dark">رمز عبور</label>
                                            <input type="password" class="form-control" name="password"/>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label class="font-size-h6 font-weight-bolder text-dark">تکرار رمز عبور</label>
                                            <input type="password" class="form-control" name="cpassword" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="font-size-h6 font-weight-bolder text-dark">افزودن نقش به کاربر</label>
                                        <hr>
                                    </div>
                                    <div class="form-group">
                                        @forelse ($roles as $role)
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" name='roles[]' value="{{ $role->name }}"
                                                    class="custom-control-input" id="{{ 'role' . $role->id }}">
                                                <label class="custom-control-label"
                                                    for="{{ 'role' . $role->id }}">{{ $role->persian_name }}</label>
                                            </div>
                                        @empty
                                            <p>
                                                هیچ نقشی تعریف نشده است.
                                            </p>
                                        @endforelse
                                    </div>
                                    <div class="form-group mt-5">
                                        <label class="font-size-h6 font-weight-bolder text-dark">افزودن دسترسی به
                                            کاربر</label>
                                        <hr>
                                    </div>
                                    <div class="form-group">
                                        @forelse ($permissions as $permission)
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" name='permissions[]' value="{{ $permission->name }}"
                                                    class="custom-control-input" id="{{ 'permission' . $permission->id }}">
                                                <label class="custom-control-label"
                                                    for="{{ 'permission' . $permission->id }}">{{ $permission->persian_name }}</label>
                                            </div>
                                        @empty
                                            <p>
                                                هیچ دسترسی تعریف نشده است .
                                            </p>
                                        @endforelse
                                    </div>
                                    <div class="form-group mt-5">
                                        <input type="submit" class="btn btn-outline-success btn sm" value="ایجاد کاربر">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end::Tab Content-->
                </div>
            </div>
            <!--end::Body-->
        </div>
    </div>
    <!--end::Content-->

@endsection
