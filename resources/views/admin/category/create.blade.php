@extends('layouts.admin')
@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                لیست دسته بندی ها
            </h3>
        </div>

    </div>
    <div class="card-body  ">
        <div class=" table_scroll rounded h-100 pr-5" style="overflow-y: scroll;  max-height: 350px; direction:ltr ">
            <table class="table table-striped pr-5 ">
                <thead class="rounded">
                    <tr class="rounded">
                        <th>ویرایش</th>
                        <th>حذف</th>
                        <th>دسته پدر</th>
                        <th>نام انگلیسی دسته بندی</th>
                        <th>نام دسته بندی</th>
                        <th>شناسه</th>
                    </tr>
                </thead>
                <tbody class="rounded ">
                    @foreach ($categories as $item)
                    <tr role="row" class="">
                        <td>
                            <button class="btn btn-transparent-danger font-weight-bold mr-2 rounded" type="submit">
                                <a href="{{ route('category.edit',$item->id) }}" class="item-edit " title="ویرایش">Edit</a>
                            </button>
                            <form action="{{ route('category.destroy', $item->id) }}" method="POST" id="destroy{{ $item->id }}">
                                @csrf
                                @method('delete')
                            </form>

                        </td>
                        <td>
                            <button class="btn btn-transparent-danger font-weight-bold mr-2 rounded" type="submit">
                                <a href="{{ route('category.destroy', $item->id) }}" onclick="destroyCategory (event,{{ $item->id }} )" class="item-delete mlg-15" title="حذف"> X </a>
                            </button>
                        </td>
                        <td>{{ $item->parentCategoryName() }}</td>
                        <td>{{$item->slug}}</td>

                        <td><a href="">{{$item->title}}</a></td>
                        <td><a href="">{{$item->id}}</a></td>




                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class=" card-header">
            <h3>

                افزودن دسته بندی
            </h3>
        </div>
        <table class="table    table-striped rounded border-white bg-white">
            <thead class="rounded ">
                <tr>
                    <th scope="col">نام</th>
                    <th scope="col">نام انگلیسی</th>
                    <th scope="col">دسته پدر</th>
                    <th scope="col">اضافه کردن</th>

                </tr>
            </thead>
            <tbody id="forms" class=" rounded bg-white ml-5 ">
                <tr class=" rounded  " id="">
                    <form action="{{ route('category.store') }}" method="POST" class="padding-30">
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
                            <input name="title" type="text" placeholder="نام دسته بندی" class="text">
                        </td>
                        <td>
                            <input name="slug" type="text" placeholder="نام انگلیسی دسته بندی" class="text">
                        </td>
                        <td>

                            <select name="sub_category" class="select" name="" id="">
                                <option value="">ندارد</option>
                                @foreach ($categories as $item)
                                @if (!$item->sub_category)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endif
                                @endforeach
                            </select>
                        </td>
                        <td>


                            <button class="btn btn-transparent-danger font-weight-bold mr-2 rounded">اضافه کردن</button>
                        </td>
                    </form>
                </tr>
            </tbody>

        </table>

    </div>
</div>

<script>
    function destroyCategory(event, id) {
        event.preventDefault();
        document.getElementById('destroy' + id).submit();
    }
</script>


@endsection

@section('css')
<style>
    .table_scroll::-webkit-scrollbar {

        height: 7px;
        width: 4px;
        direction: ltr;
    }

    .table_scroll::-webkit-scrollbar-thumb {
        background-color: rgb(54, 153, 255);
        direction: ltr;
        overflow-x: hidden;
    }

    .table_scroll::-webkit-scrollbar-track-piece {
        background-color: rgb(30, 30, 45);
        width: 4px;
        direction: ltr;
        height: 7px;
        overflow-x: hidden;
        overflow-x: hidden;
        overflow-y: hidden;
    }
</style>

@endsection