@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card card-custom rounded">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded font-weight-bolder">
                    انتخاب صفحه نمایش
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
            <form action="{{ route('setting.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">ویدیو اول </label>
                        <select name="slider1_CID" class="form-control selectpicker">
                            <option value=null selected disabled>دسته بندی دوره را انتخاب کنید.
                            </option>
                             @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">توضیحات ویدیو</label>
                        <textarea name="slider1_DESC" class="form-control" value="{{ old('discription') }}"
                            placeholder="توضیحات"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">ویدیو دوم </label>
                            <select name="slider2_CID" class="form-control selectpicker">
                                <option value=null selected disabled>دسته بندی دوره را انتخاب کنید.
                                </option>
                                 @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->title }}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">توضیحات ویدیو</label>
                        <textarea name="slider2_DESC" class="form-control" value="{{ old('discription') }}"
                            placeholder="توضیحات"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">ویدیو سوم </label>
                        <select name="slider3_CID" class="form-control selectpicker">
                            <option value=null selected disabled>دسته بندی دوره را انتخاب کنید.
                            </option>
                             @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                    </select>
                    </div>
                    <div class="col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">توضیحات ویدیو</label>
                        <textarea name="slider3_DESC" class="form-control" value="{{ old('discription') }}"
                            placeholder="توضیحات"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">ویدیو چهارم </label>
                        <select name="slider4_CID" class="form-control selectpicker">
                            <option value=null selected disabled>دسته بندی دوره را انتخاب کنید.
                            </option>
                             @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                    </select>
                    </div>
                    <div class="col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">توضیحات ویدیو</label>
                        <textarea name="slider4_DESC" class="form-control" value="{{ old('discription') }}"
                            placeholder="توضیحات"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    
                    <div class="col-md-6 col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">ویدیو پنجم </label>
                        <select name="slider5_CID" class="form-control selectpicker">
                            <option value=null selected disabled>دسته بندی دوره را انتخاب کنید.
                            </option>
                             @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                    </select>
                    </div>
                    <div class="col-12">
                        <label class="font-size-h6 font-weight-bolder text-dark">توضیحات ویدیو</label>
                        <textarea name="slider5_DESC" class="form-control" value="{{ old('discription') }}"
                            placeholder="توضیحات"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg font-weight-bolder mt-3">انتخاب کردن</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>
    $.expr[":"].contains = $.expr.createPseudo(function(arg) {
            return function(elem) {
                return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
            };
        });
        $(document).ready(function() {
            $('#addTagBtn').click(function() {
                $('#tags option:selected').each(function() {
                    $(this).appendTo($('#selectedTags'));
                });
            });
            $('#removeTagBtn').click(function() {
                $('#selectedTags option:selected').each(function(el) {
                    $(this).appendTo($('#tags'));
                });
            });
            $('.tagRemove').click(function(event) {
                event.preventDefault();
                $(this).parent().remove();
            });
            $('ul.tags').click(function() {
                $('#search-field').focus();
            });
            $('#search-field').keypress(function(event) {
                if (event.keyCode == '13') {
                    event.preventDefault();
                    if (($(this).val() != '') && ($(".tags .addedTag:contains('" + $(this).val() + "') ")
                            .length == 0)) {
                        $('<li class="addedTag">' + $(this).val() +
                            '<span class="tagRemove" onclick="$(this).parent().remove();">x</span><input type="hidden" value="' +
                            $(this).val() + '" name="tags[]"></li>').insertBefore('.tags .tagAdd');
                        $(this).val('');
                    } else {
                        $(this).val('');
                    }
                }
            });

        });

</script>

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