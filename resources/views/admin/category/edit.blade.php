@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card card-custom rounded ">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded ">
                   ویرایش دسته بندی
                </h3>
               
            </div>

        </div>
        <div class=" table_scroll card-body rounded   py-3  col-sm-8" style="overflow-x: scroll;">
            <table class="table    table-striped rounded border-white bg-white ">
                <thead class="rounded    ">
                    <tr class=" ">
                        <th colspan="1" scope="col">نام</th>
                        <th colspan="1" scope="col">نام انگلیسی</th>
                        <th colspan="1" scope="col">بنر فیلم</th>
                        <th colspan="1" scope="col">دسته بتدی پدر</th>
                       

                    </tr>
                </thead>
                <tbody id="forms" class=" rounded bg-white  pl-10 pr-26">
                    <tr class=" rounded col-10   " id="">
                        <form action="{{ route('category.update',['id' => $category->id]) }}" method="POST">
                            @csrf
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
                            <td>
                                <div class=" rounded">
                             <input value="{{ $category->title }}" type="text" name="title">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded"> <input value="{{ $category->slug }}" type="text" name="slug">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                            <select name="sub_category" class="select" name="" id="">
                                <option value="@if($category->sub_category) {{$category->sub_category}}  @endif">@if($category->sub_category) {{$category->parentCategoryName()}} @else ندارد @endif</option>
                                @foreach ($all as $item)
                                @if (!$item->sub_category && $item->id !== $category->id)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endif
                                @endforeach
                            </select>
                            </div>
                            </td>
                            <td>
                                <div class=" rounded">
                            <button class="btn btn-transparent-danger font-weight-bold mr-2 rounded" type="submit">Submit</button>
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
