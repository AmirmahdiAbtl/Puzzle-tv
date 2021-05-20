
    <div class="main-content padding-0">
        <p class="box__title">ایجاد peyment جدید</p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                <form action="{{ route('payment.store') }}" class="padding-30" method="POST">
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
                        subscriptions_title : <input  class="form-controller" type="text" placeholder="subscriptions_title" name="subscriptions_title">
                    </div>
                    <div>
                        <button type="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>