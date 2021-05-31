@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card card-custom rounded">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded font-weight-bolder">
                    ویرایش اطلاعات
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
                        <label class="font-size-h6 font-weight-bolder text-dark">نام</label>
                        <input value="{{ $course->title }} " type="text" name="title" class="form-control">
                    </div>
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">نام خانوادگی</label>
                        <input value="{{ $course->title }} " type="text" name="title" class="form-control">
                    </div>

                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">شهر</label>
                        <input value="{{ $course->title }} " type="text" name="title" class="form-control">
                    </div>
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">کشور</label>
                        <input value="{{ $course->title }} " type="text" name="title" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">سن</label>
                        <input value="{{ $course->title }} " type="text" name="title" class="form-control">
                    </div>
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">کد ملی</label>
                        <input value="{{ $course->title }} " type="text" name="title" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3 col-12">
                    <button type="submit" class="btn btn-primary btn-lg font-weight-bolder mt-3">فراموشی رمز عبور</button>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg font-weight-bolder mt-3">ویرایش اطلاعات</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection