@extends('layouts.admin')
@section('content')
<div class="card card-custom gutter-b">
    <div class="card-header py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">لیست قسمت ها</span>
        </h3>
        <div class="card-toolbar">
            <a href="{{route('episode.create',['id'=>$course->id])}}"
                class="btn btn-success font-weight-bolder font-size-sm">
                <span class="svg-icon svg-icon-md svg-icon-white">
                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo7\dist/../src/media/svg/icons\Files\Folder-plus.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                fill="#000000" opacity="0.3" />
                            <path
                                d="M11,13 L11,11 C11,10.4477153 11.4477153,10 12,10 C12.5522847,10 13,10.4477153 13,11 L13,13 L15,13 C15.5522847,13 16,13.4477153 16,14 C16,14.5522847 15.5522847,15 15,15 L13,15 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,15 L9,15 C8.44771525,15 8,14.5522847 8,14 C8,13.4477153 8.44771525,13 9,13 L11,13 Z"
                                fill="#000000" />
                        </g>
                    </svg>
                    <!--end::Svg Icon--></span>
                قسمت جدید
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead class="rounded">
                <tr class="rounded">
                    <th scope="col">فصل</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">فایل</th>
                    <th scope="col">شماره قسمت</th>
                    <th scope="col">ویرایش</th>
                </tr>
            </thead>
            <tbody class="rounded">
                @forelse ($episodes as $episode)
                <tr class="rounded">
                    <td> {{ $episode->season->title }} </td>
                    <td> {{ $episode->title }} </td>
                    <td> {{ $episode->video }} </td>
                    <td> {{ $episode->episode_number }} </td>
                    <td>
                        <div class=" rounded">
                            <button class="btn btn-transparent-danger font-weight-bold mr-2" type="submit"><a
                                    class="rounded" href="{{route('episode.edit',['slug'=>$episode->slug])}}"> ویرایش
                                </a></button>

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