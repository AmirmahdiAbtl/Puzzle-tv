@extends('layouts.admin')
@section('content')
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
                <thead class="rounded">
                    <tr class="rounded">
                        <th scope="col">شناسه</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">مدرس</th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">عملیات</th>
                        <th></th>
                    
                    </tr>
                </thead>
                <tbody class="rounded">
                    @forelse ($courses as $course)
                        <tr class="rounded">
                            <td> {{ $course->id }} </td>
                            <td> {{ $course->title }} </td>
                            <td> {{ $course->teacher->fname }} {{ $course->teacher->lname }} </td>
                            <td> {{ $course->status }} </td>
                            <td> <div class=" rounded">
                                    <button class="btn btn-transparent-danger font-weight-bold mr-2" type="submit"><a class="rounded" href="{{route('course.edit',['id'=>$course->id])}}"> ویرایش </a></button>
                                </div> </td>
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
