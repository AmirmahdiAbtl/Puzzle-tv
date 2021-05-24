<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        
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
                        <div>
                            Title : <input value="" class="form-controller" type="text" placeholder="title" name="title">
                        </div>
                        <div>
                            Discription : <input class="form-controller" type="text" placeholder="discription" name="discription">
                        </div>
                        <div>
                            Banner : <input class="form-controller" type="file" placeholder="title" name="banner">
                        </div>
                        <div>
                            Poster : <input class="form-controller" type="file" placeholder="title" name="poster">
                        </div>
                        <div>
                            Free : <select name="status" id="">
                                <option value="0">Free</option>
                                <option value="1">premium</option>
                            </select>
                        </div>
                        <div>
                            Category : 
                                <ul class="tags">
                                    <p>دسته بندی های مربوطه</p>
                                    <li class="tagAdd taglist">
                                        <input type="text" id="search-field">
                                    </li>
                                </ul>
                        </div>
                        <div>
                            <button type="submit">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
</body>
</html>