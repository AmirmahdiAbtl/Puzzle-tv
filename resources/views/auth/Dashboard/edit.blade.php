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
            <form action="{{ route('edit_user_save') }}" class="" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group row">
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">نام</label>
                        <input value="{{$user->fname}}" type="text" name="fname" class="form-control">
                    </div>
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">نام خانوادگی</label>
                        <input value="{{$user->lname}}"  type="text" name="lname" class="form-control">
                    </div>

                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">شهر</label>
                        <input value="{{$user->city}}" type="text" name="city" class="form-control">
                    </div>
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">کشور</label>
                        <input value=" {{$user->country}}" type="text" name="country" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">سن</label>
                        <input value=" {{$user->age}}" type="text" name="age" class="form-control">
                    </div>
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">کد ملی</label>
                        <input value="{{$user->national_code}} " type="text" name="" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg font-weight-bolder mt-3">ویرایش اطلاعات</button>
                </div>
            </form>
            <form action="{{ route('admin.reset.password',['id' => auth()->user()->id]) }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-md-3 col-12">
                    <button type="submit" class="btn btn-primary btn-lg font-weight-bolder mt-3">فراموشی رمز عبور</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection