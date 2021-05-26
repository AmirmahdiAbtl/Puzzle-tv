
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
                        @foreach ($subscription as $item)
                            
                            <table>
                                <tr>
                                    <td>نوع اشتزاک</td>
                                    <td>فیمت</td>
                                    <td>زمان</td>
                                    <td>انتخواب</td>
                                </tr>
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->price }} $</td>
                                    <td>{{ $item->time }} days</td>
                                    <td>
                                        <input type="checkbox" value="{{ $item->title }}" name="subscriptions_title">
                                    </td>
                                </tr>
                            </table>
                        @endforeach
                    </div>
                    <div>
                        <button type="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>