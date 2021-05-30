@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card card-custom rounded">
            <div class="card-header rounded">
                <div class="card-title rounded">
                    <h3 class="card-label rounded font-weight-bolder">
                        ویرایش قسمت
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
                <form action="{{ route('episode.update', ['slug' => $episode->slug]) }}" class="padding-30" method="POST"
                    enctype="multipart/form-data">
                    @method('put')
                    <div class="form-group row">
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">عنوان</label>
                            <input value=" " type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-3 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">فصل ها </label>
                            <select name="categories[]"  id="seasons-select" class="form-control selectpicker" multiple>
                                <option value=null  disabled>فصل دوره را انتخاب کنید.
                                </option>
                                <option value="0">فصل جدید</option>
                                {{-- اینجا فصل ها میائ-- --}}
                            </select>
                        </div>
                        <div class="col-md-3 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">نام فصل </label>
                            <input value=" " type="text" name="title" class="form-control new-seasons" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg font-weight-bolder mt-3">ویرایش قسمت</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection