@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card card-custom rounded">
        <div class="card-header rounded">
            <div class="card-title rounded">
                <h3 class="card-label rounded font-weight-bolder">
                    حساب کاربری
                </h3>
            </div>

        </div>
        <div class="card-body rounded col-12 col-md-12  py-3 col-sm-8">
            <div class="col-md-3 col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">نام </th>
                            <th scope="col">شروع </th>
                            <th scope="col">پایان </th>
                            <th scope="col">قیمت</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <p>
                            هیچ اشتراک برای نمایش وجود ندارد.
                        </p>

                    </tbody>
                </table>
            </div>
            <div class="col-md-9 col-12">
                <div class="card">
                    <h5 class="card-header">اشتراک شما</h5>
                    <div class="card-body">
                        <h5 class="card-title">سلام</h5>
                        <p class="card-text">قیمت</p>
                        
                        <a href="#" class="btn btn-primary">مدت زمان</a>
                    </div>
                </div>ّ

            </div>
        </div>
    </div>
</div>

@endsection