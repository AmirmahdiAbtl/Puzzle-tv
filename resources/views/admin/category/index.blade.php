@extends('layouts.admin')
@section('content')
<div class="card card-custom mb-5">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label font-weight-bolder">
                ساخت دسته بندی
            </h3>
        </div>
    </div>
    <div class="card-body">
        @if (count($errors)>0)
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('category.store') }}">
            @csrf
            <div class="form-group row">
                <label class="font-size-h6 font-weight-bolder text-dark">نام دسته بندی</label>
                <input type="text" name="title" class="form-control" placeholder="نام دسته بندی">
                @if ($errors->has('name'))
                <small class="form-text text-danger"> {{ $errors->first('name') }} </small>
                @endif
            </div>
            <div class="form-group row">
                <label class="font-size-h6 font-weight-bolder text-dark">نام انگلیسی دسته بندی</label>
                <input type="text" name="slug" class="form-control" placeholder="نام انگلیسی دسته بندی">
                @if ($errors->has('name'))
                <small class="form-text text-danger"> {{ $errors->first('name') }} </small>
                @endif
            </div>
            <div class="form-group row">
                <label class="font-size-h6 font-weight-bolder text-dark">دسته بندی والد</label>
                <select name="sub_category" class="form-control selectpicker">
                    <option value="" selected>بدون دسته بندی</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @if (count($category->childrenRecursive) > 0)
                    @include('partials.category', ['categories'=>$category->childrenRecursive,
                    'level'=>1])
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <input type="submit" class="btn btn-success btn-lg" value="افزودن دسته‌بندی">
            </div>
        </form>
    </div>
</div>

<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label font-weight-bolder">
                لیست دسته بندی ها
            </h3>
        </div>

    </div>
    <div class="card-body">
        <div class="rounded h-100 pr-5">
            <table class="table table-striped pr-5 ">
                <thead class="rounded">
                    <tr class="rounded">
                        <th>شناسه</th>
                        <th>نام دسته بندی</th>
                        <th>نام انگلیسی دسته بندی</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody class="rounded ">
                    @foreach ($categories as $category)
                    <tr role="row" class="">
                        <td><a href="">{{$category->id}}</a></td>
                        <td><a href="">{{$category->title}}</a></td>
                        <td class="initialism">{{$category->slug}}</td>
                        <td>
                            <a href="{{ route('category.edit',$category->id) }}"
                                class="btn btn-success text-center btn-icon mr-1">
                                <span class="svg-icon svg-icon-md svg-icon-white" data-container="body"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="ویرایش دوره">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-19-122603/theme/html/demo1/dist/../src/media/svg/icons/General/Settings-2.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                fill="#000000"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </a>
                           <form style="display: inline" action="{{ route('category.destroy' ,['category' => $category->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger btn-icon mr-1" data-toggle="modal"
                            data-target="#deleteModel{{$category->id}}">
                            <span class="svg-icon" data-container="body" data-toggle="tooltip" data-placement="top"
                                title="حذف دوره">
                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-19-122603/theme/html/demo1/dist/../src/media/svg/icons/Home/Trash.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                        <path
                                            d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                            fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </button>
                           </form>
                        </td>
                    </tr>
                    @if (count($category->childrenRecursive) > 0)
                        @include('partials.categoryList', ['categories'=>$category->childrenRecursive,
                        'level'=>1])
                    @endif
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection