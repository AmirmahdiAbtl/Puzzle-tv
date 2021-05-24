@extends('layouts.admin')
@section('content')
<div class="card card-custom text-success bg-success col-3">
        فیلم ها با موفقیت اضافه شده است 
    </div>
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    لیست ویدیو ها
                </h3>
            </div>
            
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">شناسه</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">مدرس</th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td> {{ $course->id }} </td>
                            <td> {{ $course->title }} </td>
                            <td> {{ $course->teacher->fname }} {{ $course->teacher->lname }} </td>
                            <td> {{ $course->status }} </td>
                            <td>  </td>
                        </tr>
                       
                    @empty
                        <p>
                            هیچ ویدیوی برای نمایش وجود ندارد.                        </p>
                    @endforelse
                </tbody>
            </table>
         
        </div>
    </div>
@endsection
