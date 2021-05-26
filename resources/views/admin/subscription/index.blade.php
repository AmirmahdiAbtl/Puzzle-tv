@extends('layouts.admin')
@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
               لیست اشتراک ها
            </h3>
        </div>

    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead class="rounded">
                <tr class="rounded">
                    <th scope="col">عنوان</th>
                    <th scope="col">مدت </th>
                    <th scope="col">قیمت </th>
                    <th scope="col">ویرایش</th>
                   

                </tr>
            </thead>
            <tbody class="rounded">
                @forelse ($subscriptions as $subscription)
                <tr class="rounded">
                    <td> {{ $subscription->title }} </td>
                    <td> {{ $subscriptions->time }} </td>
                    <td> {{ $subscriptions->price}} </td>
                    <td>
                        <div class=" rounded">
                            <button class="btn btn-transparent-danger font-weight-bold mr-2" type="submit"><a class="rounded" href="{{route('episode.edit',['slug'=>$episode->slug])}}"> ویرایش </a></button>

                        </div>
                    </td>
                    
                </tr>

                @empty
                <p>
                    هیچ ویدیوی برای نمایش وجود ندارد. </p>
                @endforelse
            </tbody>
        </table>

    </div>
</div>
@endsection