@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card card-custom rounded">
            <div class="card-header rounded">
                <div class="card-title rounded">
                    <h3 class="card-label rounded ">
                        افزودن ویدیو
                    </h3>
                   
                </div>

            </div>
            <div class="table_scroll card-body rounded col-12 col-md-12  py-3  col-sm-8 " style="overflow-x: scroll;">
                <form action="{{ route('course.store') }}" class=" rounded bg-white" method="POST"
                    enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <div class="alert rounded bg-white">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <table class="table pr-50 px-50 py-50 pl-50 mt-50 mx-50 my-50 ml-50     table-striped rounded border-white bg-white">
                        <thead class="rounded  ">
                            <tr>
                                <th scope="col">شناسه</th>
                                <th scope="col">عنوان</th>
                                <th scope="col">بنر فیلم</th>
                                <th scope="col">عکس</th>
                                <th scope="col">اشتراک</th>
                                <th scope="col">دسته بندی ها </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="forms" class=" rounded bg-white   ">
                            <tr class=" rounded   " id="">

                                <td>
                                    <div class=" rounded">
                                        <input value="" class="form-controller rounded" type="text"
                                            placeholder="عنوان فیلم " name="title">
                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <input class="form-controller rounded" type="text" placeholder="توضیحات فیلم "
                                            name="discription">
                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <input class="form-controller rounded" type="file" placeholder="title"
                                            name="banner">

                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <input class="form-controller rounded" type="file" placeholder="title"
                                            name="poster">
                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <select name="status" id="">
                                            <option value="0">رایگان</option>
                                            <option value="1">اشتراکی</option>
                                        </select>

                                    </div>
                                </td>
                                <td>
                                    <ul class="tags">
                                        <li class="tagAdd taglist">
                                            <input class=" rounded" type="text" id="search-field">
                                        </li>
                                    </ul>
                                </td>
                                <td class=" pl-10">
                                    <div class=" rounded">
                                        <button class="btn btn-transparent-danger font-weight-bold mr-2 rounded"
                                            type="submit">اضافه کردن فیلم</button>
                                    </div>
                                </td>


                            </tr>
                        </tbody>

                    </table>
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
