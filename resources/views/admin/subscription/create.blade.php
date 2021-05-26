@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card card-custom rounded">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded ">
                    افزودن قسمت
                </h3>
                <button class="btn btn-bg-secondary btn-hover-bg-danger rounded-circle" id="add">+</button>
            </div>

        </div>
        <div class="card-body rounded">
            <table class="table table-striped rounded border-white bg-white">
                <thead class="rounded ">
                    <tr>
                        <th scope="col">عنوان</th>
                        <th scope="col">زمان</th>
                        <th scope="col"> قیمت</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody id="forms" class=" rounded bg-white">
                    <tr class=" rounded  " id="">
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
                            <td>
                                <div class="rounded">
                                    <input value="" class="form-controller" type="text" placeholder="title" name="title">
                                </div>
                            </td>
                            <td>
                                <div class="rounded">
                                    <input class="form-controller" type="number" placeholder="time" name="time">
                                </div>
                            </td>
                            <td>
                                <div class="rounded">
                                    <input class="form-controller" type="text" placeholder="price" name="price">
                                </div>
                            </td>

                            <td>
                                <div class="rounded">
                                    <button class="btn btn-transparent-danger font-weight-bold mr-2" type="submit">اضافه کردن</button>
                                </div>
                            </td>
                        </form>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>
</div>

@endsection

