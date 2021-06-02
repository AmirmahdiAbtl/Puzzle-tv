@extends('layouts.app')

@section('content')
<div class="container   mt-30 text-white  ">
    <div class="row">
        @include('layouts.Dashboard')

        <div class="card card-custom rounded col-6    border-1 border-white  ml-7" style="height: 80%;">
            <div class="card-header rounded">
                <div class="card-title rounded">
                    <h3 class="card-label rounded font-weight-bolder text-white">
                        ویرایش اطلاعات
                    </h3>
                </div>

            </div>
            <div class="card-body rounded col-12 col-md-12  py-3 col-sm-8 text-white">
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
                            <label class="font-size-h6 font-weight-bolder text-white">نام</label>
                            <input value="{{$user->fname}}" type="text" name="fname" class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8">
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-white">نام خانوادگی</label>
                            <input value="{{$user->lname}}" type="text" name="lname" class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8">
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-white">شهر</label>
                            <input value="{{$user->city}}" type="text" name="city" class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8">
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-white">کشور</label>
                            <input value=" {{$user->country}}" type="text" name="country" class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-white">سن</label>
                            <input value=" {{$user->age}}" type="text" name="age" class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8">
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-white">کد ملی</label>
                            <input value="{{$user->national_code}} " type="text" name="" class="form-control h-auto text-white bg-white-o-5 rounded border-0 py-4 px-8">
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-12 offset-4">
                        <button type="submit" class="btn btn-danger w-100 text-white px-15 py-3">ویرایش اطلاعات</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
@section('css')
<style>
    #dashboard>div,
    h5,
    table,
    thead,
    tbody {
        background-color: rgb(30, 30, 30) !important;
        color: white;
    }

    .card,
    h5 {
        background-color: rgb(45, 45, 45) !important;
        color: white;
    }
</style>
@endsection