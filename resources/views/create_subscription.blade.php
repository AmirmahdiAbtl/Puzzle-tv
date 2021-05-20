
    <div class="main-content padding-0">
        <p class="box__title">ایجاد subscription جدید</p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                <form action="{{ route('subscription.store') }}" class="padding-30" method="POST">
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
                        time(day) : <input class="form-controller" type="number" placeholder="time" name="time">
                    </div>
                    <div>
                        price : <input class="form-controller" type="text" placeholder="price" name="price">
                    </div>
                    <div>
                        <button type="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>