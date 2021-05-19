
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
                        Title : <input class="form-controller" type="text" placeholder="title" name="title">
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
                        <button type="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>