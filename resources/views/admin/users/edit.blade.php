@extends('layouts.admin')

@section('content')
<div class="flex-row-fluid">
    <div class="card card-custom gutter-b shadow-none">
        <!--begin::Header-->
        <div class="card-header border-0 py-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">ویرایش کاربر</span>
            </h3>
            <div class="card-toolbar">
                <a href={{route('user.index')}}
                    class="btn btn-success font-weight-bolder font-size-sm">
                    <span class="svg-icon svg-icon-md svg-icon-white">
                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo7\dist/../src/media/svg/icons\Files\Folder-plus.svg--><svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                            viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                    fill="#000000" opacity="0.3" />
                                <path
                                    d="M11,13 L11,11 C11,10.4477153 11.4477153,10 12,10 C12.5522847,10 13,10.4477153 13,11 L13,13 L15,13 C15.5522847,13 16,13.4477153 16,14 C16,14.5522847 15.5522847,15 15,15 L13,15 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,15 L9,15 C8.44771525,15 8,14.5522847 8,14 C8,13.4477153 8.44771525,13 9,13 L11,13 Z"
                                    fill="#000000" />
                            </g>
                        </svg>
                        <!--end::Svg Icon--></span>
                    لیست کاربران
                </a>
            </div>
        </div>
        <!--end::Header-->
        <div class="card-body">
            @include('partials.alerts')
            @include('partials.validation')
            <form method="post" action=" {{ route('user.update',$user->id) }} "
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PATCH">

                <div class="form-group row">
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">نام</label>
                    <input type="text" name="fname" class="form-control" value="{{$user->fname}}" placeholder="نام">
                    </div>
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">نام خانوادگی</label>
                        <input type="text" name="lname" class="form-control "
                    placeholder="نام خانوادگی" value="{{$user->lname}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">شماره موبایل</label>
                    <input type="tel" value="{{$user->mobile}}" class="form-control" name="mobile" placeholder="09123456789" />
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
                                class="custom-control-input" id="{{ 'role' . $role->id }}" {{ $user->hasRole($role->name) ? 'checked' : '' }}>
                            <label class="custom-control-label"
                                for="{{ 'role' . $role->id }}" >{{ $role->persian_name }}</label>
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
                                class="custom-control-input" id="{{ 'permission' . $permission->id }}" {{ $user->hasPermission($permission) ? 'checked' : '' }}>
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
                    <input type="submit" class="btn btn-outline-success btn sm" value="ویرایش">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
