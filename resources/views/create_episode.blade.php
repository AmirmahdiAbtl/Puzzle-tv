
    <div class="main-content padding-0">
        <p class="box__title">ایجاد مقاله جدید</p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                <form action="{{ route('episode.store',['id'=>$id,'season_id'=>$season_id]) }}" class="padding-30" method="POST" enctype="multipart/form-data">
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
                        file : <input class="form-controller" type="file" placeholder="title" name="file">
                    </div>
                    <div>
                        Free : <select name="freeable" id="">
                            <option value="0">Free</option>
                            <option value="1">premium</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>