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
                <form action="{{ route('episode.store', ['id' => $course->id]) }}" class="padding-30" method="POST"
                    enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">عنوان</label>
                            <input value=" " type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">فصل ها </label>
                            <select name="categories[]" class="form-control selectpicker" multiple>
                                <option value=null selected disabled>فصل دوره را انتخاب کنید.
                                </option>
                                {{-- اینجا فصل ها میائ-- --}}
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-md-6">
                            <label class="font-size-h6 font-weight-bolder text-dark">لینک </label>
                            <input value=" " type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="font-size-h6 font-weight-bolder text-dark">فایل فیلم</label>
                            <div class="custom-file mb-3">
                                <input type="file" name="poster" value="{{ old('poster') }}" class="custom-file-input"
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
                        <button type="submit" class="btn btn-primary btn-lg font-weight-bolder mt-3">ویرایش قسمت</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid">
    <div class="card card-custom rounded">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded ">
                    افزودن قسمت
                </h3>
                <button class="btn btn-bg-secondary btn-hover-bg-danger rounded-circle" id="add">+</button>
            </div>

        </div>
        <div class="card-body rounded">
            <table class="table table-striped rounded border-white bg-white">
                <thead class="rounded ">
                    <tr>
                        <th scope="col">عنوان</th>
                        <th scope="col">لینک</th>
                        <th scope="col"> فایل فیلم</th>
                        <th scope="col"> فصل ها</th>
                        <th scope="col"> نام فصل مورد نظر</th>
                        <th scope="col">وضعیت اشتراک</th>

                    </tr>
                </thead>
                <tbody id="forms" class=" rounded bg-white">
                    <tr class=" rounded  " id="">
                        <form action="{{ route('episode.store',['id'=>$course->id]) }}" class="padding-30" method="POST" enctype="multipart/form-data">
                            @if (count($errors) > 0)
                            <div class="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @csrf
                            <td>
                                <div class=" rounded">
                                    <input value="" class="form-controller" type="text" placeholder="title" name="title">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <input class="form-controller" type="text" placeholder="discription" name="slug">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <input class="form-controller" type="file" placeholder="title" name="video">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <select name="season_id" id="seasons-select">
                                        <option value=""></option>
                                        @foreach ($course->seasons as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                        <option value="0">فصل جدید</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <input type="text" value="{{ $course->seasons->count() + 1 }}" name="season_id" placeholder="شماره فصل" class="new-seasons" disabled>
                                    <input type="text" name="season_title" class="new-seasons" placeholder="نام فصل" disabled>
                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <select name="status" id="">
                                        <option value="0">Free</option>
                                        <option value="1">Premioum</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <button class=" btn btn-transparent-danger font-weight-bold mr-2" type="submit">اضافه کردن</button>
                                </div>
                            </td>
                        </form>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>
</div> --}}
@endsection
@section('js')

    <script>
        $(document).ready(function() {
            let i = 0;
            $("#add").click(function() {
                $("#forms").append(`
                <tr class=" rounded  " id="${i}">
                            <form action="{{ route('episode.store', ['id' => $course->id]) }}" class="padding-30" method="POST" enctype="multipart/form-data">
                                @if (count($errors) > 0)
                                    <div class="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @csrf
                                <td>
                                    <div class=" rounded">
                                       <input value="" class="form-controller" type="text" placeholder="title" name="title">
                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <input class="form-controller" type="text" placeholder="discription" name="slug">
                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <input class="form-controller" type="file" placeholder="title" name="video">
                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <select name="season_id" id="seasons-select">
                                            <option value=""></option>
                                            @foreach ($course->seasons as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach
                                            <option value="0">فصل جدید</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <input type="text" value="{{ $course->seasons->count() + 1 }}" name="season_id" placeholder="شماره فصل" class="new-seasons" disabled>
                                        <input type="text" name="season_title" class="new-seasons" placeholder="نام فصل" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <select name="status" id="">
                                            <option value="0">Free</option>
                                            <option value="1">Premioum</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <button class=" btn btn-transparent-danger font-weight-bold mr-2" type="submit">اضافه کردن</button>
                                    </div>
                                </td>
                            </form>
                        </tr>
                `)
                i += 1;
            });

            $(`#delete${i}`).click(function() {

                $("#forms").remove(`#${i}`);
                i -= 1
            });
            $('#seasons-select').change((e) => {
                if (e.target.value == "0") {
                    $('.new-seasons').removeAttr('disabled')
                } else {
                    $('.new-seasons').attr('disabled', '')
                }
            });

        });

    </script>

@endsection
