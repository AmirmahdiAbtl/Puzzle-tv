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
                <form action="{{ route('episode.store',['id'=>$course->id]) }}" class="padding-30" method="POST" enctype="multipart/form-data">
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
                        slug : <input class="form-controller" type="text" placeholder="discription" name="slug">
                    </div>
                    <div>
                        video : <input class="form-controller" type="file" placeholder="title" name="video">
                    </div>
                    
                    <div>
                        season : <select name="season_id" id="seasons-select">
                            <option value="">--انتخواب فصل--</option>
                            @foreach ($course->seasons as $item)
                                 <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                                 <option value="0">فصل جدید</option>
                        </select>
                    </div>
                    <div>
                        new seasons : 
                            <input type="text" value="{{ $course->seasons->count() + 1 }}" name="season_id" class="new-seasons" disabled>
                            <input type="text" name="season_title" class="new-seasons" disabled>
                    </div>
                    <div>
                        status : <select name="status" id="">
                            <option value="0">Free</option>
                            <option value="1">Premioum</option>
                        </select>
                    </div>
                    
                    <div>
                        <button type="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(() => {
            $('#seasons-select').change((e)=>{
                if(e.target.value == "0"){
                    $('.new-seasons').removeAttr('disabled')
                }else {
                    $('.new-seasons').attr('disabled','')
                }
            })
        })
    </script>
</body>
</html>