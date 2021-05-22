@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card card-custom rounded ">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded ">
                    افزودن ویدیو
                </h3>
                <button class="btn btn-bg-secondary btn-hover-bg-danger rounded-circle" id="add">+</button>
            </div>

        </div>
        <div class=" table_scroll card-body rounded col-12 col-md-12  py-3  col-sm-8" style="overflow-x: scroll;">
            <table class="table col-10   table-striped rounded border-white bg-white ">
                <thead class="rounded   ">
                    <tr class=" ">

                        <th colspan="1" scope="col">عنوان</th>
                        <th colspan="1" scope="col">لینک</th>
                        <th colspan="1" scope="col">فیلم</th>
                        <th class=" ml-2" colspan="1" scope="col">فصل ها</th>
                        <th colspan="1" scope="col"> فصل های جدید </th>
                        <th colspan="1" scope="col"> وضعیت </th>
                        <th colspan="1" scope="col"> ویرایش </th>


                        <th scope="col">حذف</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="forms" class=" rounded bg-white  pl-10 pr-26">
                    <tr class=" rounded   " id="">
                        <form action="{{ route('episode.update',['slug' => $episode->slug]) }}" class="padding-30" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @if (count($errors)>0)
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
                            <div>
                                <input value="{{ $episode->title }}" class="form-controller" type="text" placeholder="title" name="title">
                            </div>
</td>
<td>
                            <div>
                                <input value="{{ $episode->slug }}" class="form-controller" type="text" placeholder="discription" name="slug">
                            </div>
</td>
<td>   
                            <div>
                                 <input class="form-controller" type="file" placeholder="title" name="video">
                            </div>
</td>
                            <div>
                               <select value="{{ $episode->season_id }}" name="season_id" id="seasons-select">
                                    @foreach ($episode->course->seasons as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                    <option value="0">فصل جدید</option>
                                </select>
                            </div>
                            <div>
                               
                                <input type="text" value="{{ $episode->course->seasons->count() + 1 }}" name="season_id" class="new-seasons" disabled>
                                <input type="text" name="season_title" class="new-seasons" disabled>
                            </div>
                            <div>
                                <select value="{{ $episode->status }}" name="status" id="">
                                    <option value="0">Free</option>
                                    <option value="1">Premioum</option>
                                </select>
                            </div>
                            <div>
                                <button type="submit">ویرایش</button>
                            </div>
                        </form>
                        <form action="{{route('episode.delete',['slug' => $episode->slug])}}" method="POST">
                            @method('delete')
                            @csrf
                            <td>
                                <div class=" rounded">
                                    <button class=" btn rounded" id="delete ${i}"><img src="https://img.icons8.com/flat-round/50/000000/delete-sign.png" width="30 px" height="30px" /></button>
                                </div>
                            </td>
                        </form>

                    </tr>
                </tbody>

            </table>

        </div>
    </div>
</div>

@endsection
@section('js')

<script>
    $(document).ready(function() {
        let i = 0;
        $("#add").click(function() {
            $("#forms").append(`
            <tr class=" rounded   " id="${i}">
                        <form action="{{ route('course.update',['id' => $course->id]) }}" class="" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @if (count($errors)>0)
                            <td colspan="1">
                                <div class="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </td>
                            @endif
                            @csrf
                            <td colspan="1">
                                <div class=" rounded ">
                                    <input value="{{ $course->title }}" class="form-controller rounded" type="text" placeholder="title" name="title">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded ">
                                    <input value="{{ $course->discription }}" class="form-controller rounded" type="text" placeholder="discription" name="discription">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded col-1 ">
                                    <input class="form-controller rounded" type="file" placeholder="title" name="banner">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded ">
                                    <input class="form-controller rounded" type="file" placeholder="title" name="poster">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded ">
                                    <select name="status" id="">
                                        <option value="0">Free</option>
                                        <option value="1">premium</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class=" rounded col-1 ">
                                    <button class="btn rounded btn-primary " type="submit">ویرایش</button>
                                </div>
                            </td>
                        </form>
                        <form action="{{route('course.add_category',['id' => $course->id])}}" method="POST">
                            @csrf
                            <td>
                                <div class=" rounded ">
                                    <input class="form-controller rounded-2xl" type="text" placeholder="title" name="category_title">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded col-2  ">
                                    <button class="btn rounded btn-primary " type="submit">اضافه کردن دسته بندی </button>
                                </div>
                            </td>
                        </form>
                        <form action="{{route('course.delete',['id' => $course->id])}}" method="POST">
                            @method('delete')
                            @csrf
                            <td>
                                <div class=" rounded">
                                    <button class=" btn rounded" id="delete${i}"><img src="https://img.icons8.com/flat-round/50/000000/delete-sign.png" width="30 px" height="30px" /></button>
                                </div>
                            </td>
                        </form>

                    </tr>
            `)
            i += 1;
        });

        $(`#delete${i}`).click(function() {

            $("#forms").remove(`#${i}`);
            i -= 1;
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