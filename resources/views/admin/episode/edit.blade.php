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
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">عنوان</label>
                            <input value=" {{ $episode->title }}" type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-3 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">فصل ها </label>
                            <select value="{{ $episode->season_id }}" name="season_id"  id="seasons-select" class="form-control selectpicker" multiple>
                                </option>
                                @foreach ($episode->course->seasons as $item)
                                    <option value="{{ $item->id }}" @if($item->id == $episode->season_id) selected @endif >{{ $item->title }}</option>
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
                            <input value="{{ $episode->slug }}" type="text" name="slug" class="form-control">
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">فایل فیلم</label>
                            <div class="custom-file mb-3">
                                <input type="file" name="file" class="custom-file-input"
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
                                    <input type="radio" name="status" value="1" @if ($episode->freeable == 1) checked="checked" @endif />
                                    <span></span>
                                    اشتراکی
                                </label>
                                <label class="radio radio-lg">
                                    <input type="radio" name="status" value="0" @if ($episode->freeable == 0) checked="checked" @endif />
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