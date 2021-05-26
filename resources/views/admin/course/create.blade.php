{{-- @extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card card-custom rounded">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded ">
                    افزودن ویدیو
                </h3>
                <button class="btn btn-bg-secondary btn-hover-bg-danger rounded-circle" id="add">+</button>
            </div>

        </div>
        <div class="card-body rounded">
            <table class="table table-striped rounded border-white bg-white">
                <thead class="rounded ">
                    <tr>
                        <th scope="col">شناسه</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">بنر فیلم</th>
                        <th scope="col">عکس</th>
                        <th scope="col">اشتراک</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="forms" class=" rounded bg-white">
                    <tr class=" rounded  " id="">
                        <form action="{{ route('course.store') }}" class="padding-30 rounded bg-white" method="POST" enctype="multipart/form-data">
                            @if (count($errors)>0)
                            <div class="alert rounded bg-white">
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
                                    <input value="" class="form-controller rounded" type="text" placeholder="عنوان فیلم " name="title">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <input class="form-controller rounded" type="text" placeholder="توضیحات فیلم " name="discription">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <input class="form-controller rounded" type="file" placeholder="title" name="banner">

                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <input class="form-controller rounded" type="file" placeholder="title" name="poster">
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
                                    <p>دسته بندی های مربوطه</p>
                                    <li class="tagAdd taglist">
                                        <input type="text" id="search-field">
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <button class="btn rounded bg-primary" type="submit">اضافه کردن فیلم</button>
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
            <tr class=" rounded-card rounded  " id="${i}">
                        <form action="{{ route('course.store') }}" class="padding-30 rounded bg-white" method="POST" enctype="multipart/form-data">
                            @if (count($errors)>0)
                            <div class="alert rounded bg-white">
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
                                    <input value="" class="form-controller rounded" type="text" placeholder="عنوان فیلم " name="title">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <input class="form-controller rounded" type="text" placeholder="توضیحات فیلم " name="discription">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <input class="form-controller rounded" type="file" placeholder="title" name="banner">

                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <input class="form-controller rounded" type="file" placeholder="title" name="poster">
                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <select name="status" id="">
                                        <option value="0">Free</option>
                                        <option value="1">premium</option>
                                    </select>

                                </div>
                            </td>
                            <td>
                                <div class=" rounded">
                                    <button class="rounded bg-primary" type="submit">اضافه کردن فیلم</button>
                                    <button class=" btn rounded" id="delete${i}"><img src="https://img.icons8.com/flat-round/50/000000/delete-sign.png" width="30 px" height="30px" /></button>
                                </div>
                            </td>

                        </form>
                    </tr>
            `)
            i+=1;});
      
        $(`#delete${i}`).click(function() {

                $("#forms").remove(`#${i}`);
                i-=1
        });
        
    });
    $.expr[":"].contains = $.expr.createPseudo(function(arg) {
        return function( elem ) {
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
                if (($(this).val() != '') && ($(".tags .addedTag:contains('" + $(this).val() + "') ").length == 0 ))  {
                    $('<li class="addedTag">' + $(this).val() + '<span class="tagRemove" onclick="$(this).parent().remove();">x</span><input type="hidden" value="' + $(this).val() + '" name="tags[]"></li>').insertBefore('.tags .tagAdd');
                    $(this).val('');
                } else {
                    $(this).val('');
                }
            }
        });

    });
</script>

@endsection --}}

        
        @extends('layouts.admin')
        @section('content')
        <div class="main-content padding-0">
            <p class="box__title">ایجاد مقاله جدید</p>
            <div class="row no-gutters bg-white">
                <div class="col-12">
                    <form action="{{ route('course.store') }}" class="padding-30" method="POST" enctype="multipart/form-data">
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
                        <table>
                            <tr>
                                <td>
                                    <div class=" rounded">
                                        <input value="" class="form-controller" type="text" placeholder="title" name="title">
                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <input value="" class="form-controller" type="text" placeholder="discription" name="discription">
                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <input value="" class="form-controller" type="file" placeholder="title" name="banner">
                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <input value="" class="form-controller" type="file" placeholder="title" name="poster">
                                    </div>
                                </td>
                                <td>
                                    <div class=" rounded">
                                        <select name="status" id="">
                                            <option value="0">Free</option>
                                            <option value="1">premium</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                Category : 
                                    <ul class="tags">
                                        <p>دسته بندی های مربوطه</p>
                                        <li class="tagAdd taglist">
                                            <input type="text" id="search-field">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="submit">submit</button>
                                </td>
                            </tr>
                        </table>
                        
                            
                        
                    </form>
                </div>
            </div>
        </div>
        @endsection
        @section('js')
        <script>
            $.expr[":"].contains = $.expr.createPseudo(function(arg) {
            return function( elem ) {
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
                    if (($(this).val() != '') && ($(".tags .addedTag:contains('" + $(this).val() + "') ").length == 0 ))  {
                        $('<li class="addedTag">' + $(this).val() + '<span class="tagRemove" onclick="$(this).parent().remove();">x</span><input type="hidden" value="' + $(this).val() + '" name="tags[]"></li>').insertBefore('.tags .tagAdd');
                        $(this).val('');
                    } else {
                        $(this).val('');
                    }
                }
            });
    
        });
        
        </script>
    
        @endsection