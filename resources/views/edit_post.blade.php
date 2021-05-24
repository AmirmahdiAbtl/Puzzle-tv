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
                <form action="{{ route('course.update',['id' => $course->id]) }}" class="padding-30" method="POST" enctype="multipart/form-data">
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
                    <div>
                        Title : <input value="{{ $course->title }}" class="form-controller" type="text" placeholder="title" name="title">
                    </div>
                    <div>
                        Discription : <input value="{{ $course->discription }}" class="form-controller" type="text" placeholder="discription" name="discription">
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
                    @foreach ($course->category as $item)
                    <li class="addedTag">{{ $item->title }}<span style="cursor: pointer" class="tagRemove" onclick="$(this).parent().remove();">x</span>
                        <input type="hidden" value="{{ $item->title }}" name="tags[]">
                    </li>
                   @endforeach
                    <li class="tagAdd taglist">
                        <input type="text" id="search-field">
                    </li>
                    <div>
                        <button type="submit">submit</button>
                    </div>
                </form>
                <form action="{{route('course.delete',['id' => $course->id])}}" method="POST">
                    @method('delete')
                    @csrf
                    <div>
                        <button type="submit">delete</button>
                    </div>
                </form>
                <form action="{{route('course.add_category',['id' => $course->id])}}" method="POST">
                    @csrf
                    <div>
                        category : <input class="form-controller" type="text" placeholder="title" name="category_title">
                    </div>
                    <div>
                        <button type="submit">add</button>
                    </div>
                </form>
                <a href="{{}}">add episode</a>
            </div>
        </div>
    </div>
</body>
</html>