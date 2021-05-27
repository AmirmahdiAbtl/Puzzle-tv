@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card card-custom rounded ">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded ">
                   ویرایش دسته بندی
                </h3>
               
            </div>

        </div>
        <div class="card-body rounded py-3">
            <form method="POST" action="{{ route('category.update',['category' => $category->id]) }}">
                @csrf
                @method('put')
                <div class="form-group row">
                    <label class="font-size-h6 font-weight-bolder text-dark">نام دسته بندی</label>
                    <input type="text" name="title" value="{{ $category->title }}" class="form-control" placeholder="نام دسته بندی">
                    @if ($errors->has('name'))
                    <small class="form-text text-danger"> {{ $errors->first('titlel') }} </small>
                    @endif
                </div>
                <div class="form-group row">
                    <label class="font-size-h6 font-weight-bolder text-dark">نام انگلیسی دسته بندی</label>
                    <input type="text" name="slug" value="{{ $category->slug }}" class="form-control" placeholder="نام انگلیسی دسته بندی">
                    @if ($errors->has('name'))
                    <small class="form-text text-danger"> {{ $errors->first('slug') }} </small>
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
                    <input type="submit" class="btn btn-success btn-lg" value="ویرایش دسته‌بندی">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
