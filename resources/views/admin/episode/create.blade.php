@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card card-custom rounded">
            <div class="card-header rounded">
                <div class="card-title rounded">
                    <h3 class="card-label rounded font-weight-bolder">
                        اضافه کردن قسمت
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
                <form action="{{ route('episode.store', ['id' => $course->id]) }}" class="padding-30" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">عنوان</label>
                            <input value=" " type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-3 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">فصل ها </label>
                            <select name="season_id"  id="seasons-select" class="form-control selectpicker" multiple>
                                <option value=null  disabled>فصل دوره را انتخاب کنید.
                                </option>
                                @foreach ($course->seasons as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                                <option value="0">فصل جدید</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">نام فصل </label>
                            <input type="text" name="season_title" class="form-control new-seasons" disabled>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-md-6">
                            <label class="font-size-h6 font-weight-bolder text-dark">لینک </label>
                            <input type="text" name="slug" class="form-control">
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">فایل فیلم</label>
                            <div class="custom-file mb-3">
                                <input type="file" name="video" class="custom-file-input"
                                    id="customFile">
                                <label class="custom-file-label" for="customFile">فایل خود را انتخاب کنید</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">وضعیت ویدیو</label>
                            <div class="radio-inline mt-2">
                                <label class="radio radio-lg">
                                    <input type="radio" name="status" value="1" @if($course->status == 1) checked="checked" @endif />
                                    <span></span>
                                    اشتراکی
                                </label>
                                <label class="radio radio-lg">
                                    <input type="radio" name="status" value="0" @if($course->status == 0) checked="checked" @endif  />
                                    <span></span>
                                    رایگان
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">

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

@section('js')
<script>
    $(document).ready(() => {
        $('#seasons-select').change((e)=>{
            if(e.target.value == "0"){
                $('.new-seasons').removeAttr('disabled')
            }else {
                $('.new-seasons').attr('disabled','')
            }
        })
    })
</script>
@endsection