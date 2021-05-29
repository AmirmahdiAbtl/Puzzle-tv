@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card card-custom rounded">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded font-weight-bolder">
                    ویرایش ویدیو
                </h3>
            </div>

        </div>
        <div class="card-body rounded col-12 col-md-12  py-3 col-sm-8">
            @if (count($errors) > 0)
            <div class="alert rounded bg-white">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('course.update',['course' => $course->id]) }}" class="" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group row">
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">عنوان</label>
                        <input  value="{{ $course->title }} " type="text" name="title" class="form-control"  >
                    </div>
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">دسته بندی</label>
                        <select name="categories[]" class="form-control selectpicker" multiple>
                            <option value=null selected disabled>دسته بندی دوره را انتخاب کنید.
                            </option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @if (count($category->childrenRecursive) > 0)
                            @include('partials.category',
                            ['categories'=>$category->childrenRecursive,
                            'level'=>1])
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">توضیحات ویدیو</label>
                        <textarea name="discription" class="form-control" value="{{$course->discription}} "
                            placeholder="توضیحات"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">پوستر ویدیو</label>
                        <div class="custom-file mb-3">
                            <input type="file" name="poster" value="{{ old('poster') }}" class="custom-file-input"
                                id="customFile">
                            <label class="custom-file-label" for="customFile">فایل خود را انتخاب کنید</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">بنر ویدیو</label>
                        <div class="custom-file mb-3">
                            <input type="file" name="banner" value="{{ old('banner') }}" class="custom-file-input"
                                id="customFile">
                            <label class="custom-file-label" for="customFile">فایل خود را انتخاب کنید</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">وضعیت ویدیو</label>
                        <div class="radio-inline mt-2">
                            <label class="radio radio-lg">
                                <input type="radio" name="status" value="1" />
                                <span></span>
                                اشتراکی
                            </label>
                            <label class="radio radio-lg">
                                <input type="radio" name="status" value="0" checked="checked" />
                                <span></span>
                                رایگان
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">

                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg font-weight-bolder mt-3">ویرایش ویدیو</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('css')
<style>
    .table_scroll::-webkit-scrollbar {

        height: 7px;
    }

    .table_scroll::-webkit-scrollbar-thumb {
        background-color: rgb(54, 153, 255);

        overflow-x: hidden;
    }

    .table_scroll::-webkit-scrollbar-track-piece {
        background-color: rgb(30, 30, 45);

        height: 7px;
        overflow-x: hidden;
        overflow-x: hidden;
        overflow-y: hidden;
    }
</style>

@endsection