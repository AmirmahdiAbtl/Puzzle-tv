
    <div class="main-content padding-0">
        <p class="box__title">ایجاد بخش جدید</p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                <form action="{{ route('category.store') }}" class="padding-30" method="POST" enctype="multipart/form-data">
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
                        category_name : <input class="form-controller" type="text" placeholder="category_name" name="category_name">
                    </div>
                    <div>
                        category_parent : <input class="form-controller" type="text" placeholder="category_parent" name="category_parent">
                    </div>
                    <div>
                        <button type="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>