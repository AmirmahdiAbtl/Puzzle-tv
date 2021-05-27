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
                        <th colspan="1"  scope="col">شناسه</th>
                        <th colspan="1"  scope="col">عنوان</th>
                        <th colspan="1"   scope="col">بنر فیلم</th>
                        <th colspan="1"   scope="col">عکس</th>
                        <th class=" ml-2" colspan="1"   scope="col">اشتراک</th>
                        <th colspan="1"   scope="col"> ویرایش </th>
                        <th colspan="1"   scope="col"> دسته بندی </th>
                        <th colspan="1"  scope="col"> اضافه کردن </th>


                        <th   scope="col">حذف</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="forms" class=" rounded bg-white  pl-10 pr-26">
                    <tr class=" rounded   " id="">
                        <form action="{{ route('course.update',['course' => $course->id]) }}" class="" method="POST" enctype="multipart/form-data">
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
                                @foreach ($course->category as $item)
                                    <li class="addedTag">{{ $item->title }}<span style="cursor: pointer" class="tagRemove" onclick="$(this).parent().remove();">x</span>
                                        <input type="hidden" value="{{ $item->title }}" name="tags[]">
                                    </li>
                                @endforeach
                                    <li class="tagAdd taglist">
                                        <input type="text" id="search-field">
                                    </li>
                            </td>
                            <td>
                                <div class=" rounded col-1 ">
                                    <button class="btn btn-transparent-danger font-weight-bold mr-2 rounded " type="submit">ویرایش</button>
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
                                    <button class="btn btn-transparent-danger font-weight-bold mr-2 rounded " type="submit">اضافه کردن دسته بندی </button>
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
                </tbody>

            </table>

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