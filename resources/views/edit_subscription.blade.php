
    <div class="main-content padding-0">
        <p class="box__title">ایجاد subscription جدید</p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                <form action="{{ route('subscription.update',['id' => $subscription->id]) }}" class="padding-30" method="POST">
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
                        Title : <input value="{{ $subscription->title }}" class="form-controller" type="text" placeholder="title" name="title">
                    </div>
                    <div>
                        time : <input value="{{ $subscription->time }}" class="form-controller" type="number" placeholder="time" name="time">
                    </div>
                    <div>
                        price : <input value="{{ $subscription->price }}" class="form-controller" type="text" placeholder="price" name="price">
                    </div>
                    <div>
                        <button type="submit">submit</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>