@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card card-custom rounded ">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded ">
                    ویرایش اشتراک ها
                </h3>

            </div>
        </div>
        <div class=" table_scroll card-body rounded col-12   py-3  " style="overflow-x: scroll;">
            <table class="table    col-12  table-striped rounded border-white bg-white ">
                <thead class="rounded col-12   ">
                    <tr class="col-12 ">
                        <th colspan="1" scope="col">عنوان </th>
                        <th colspan="1" scope="col">تاریخ</th>
                        <th colspan="1" scope="col">قیمت</th>
                        


                    </tr>
                </thead>
                <tbody id="forms" class=" col-12  rounded bg-white  pl-10 pr-26">
                    <tr class=" rounded    " id="">
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
                            <td>
                                <div class="rounded">
                                    <input class="rounded" value="{{ $subscription->title }}" class="form-controller" type="text" placeholder="title" name="title">
                                </div>
                            </td>
                            <td>
                                <div class="rounded">
                                    <input class="rounded" value="{{ $subscription->time }}" class="form-controller" type="number" placeholder="time" name="time">
                                </div>
                            </td>
                            <td>
                                <div class="rounded">
                                    <input  class="rounded" value="{{ $subscription->price }}" class="form-controller" type="text" placeholder="price" name="price">
                                </div>
                            </td>
                            <td>
                                <div class="rounded">
                                    <button class="btn btn-transparent-danger font-weight-bold mr-2 rounded" type="submit">اعمال </button>
                                </div>
                        </form>

                    </tr>
                </tbody>

            </table>

        </div>
    </div>
</div>

@endsection

@section('css')
<style>
    .table_scroll::-webkit-scrollbar {

        height: 7px;
    }

    .table_scroll::-webkit-scrollbar-thumb {
        background-color: rgb(54, 153, 255);

        overflow-x: hidden;
    }

    .table_scroll::-webkit-scrollbar-track-piece {
        background-color: rgb(30, 30, 45);

        height: 7px;
        overflow-x: hidden;
        overflow-x: hidden;
        overflow-y: hidden;
    }
</style>

@endsection