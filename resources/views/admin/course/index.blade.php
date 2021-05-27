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
                </tr>
            </thead>
            <tbody class="rounded">
                @forelse ($courses as $course)
                <tr class="rounded">
                    <td> {{ $course->id }} </td>
                    <td> {{ $course->title }} </td>
                    <td> {{ $course->teacher->fname }} {{ $course->teacher->lname }} </td>
                    <td> @if ($course->status == 0)رایگان@else اشتراکی@endif </td>
                    <td>
                        <a href="{{route('course.edit',['course'=>$course->id])}}"
                            class="btn btn-warning text-center btn-icon btn-circle mr-1">
                            <span class="svg-icon svg-icon-md svg-icon-white" data-container="body" data-toggle="tooltip" data-placement="top" title="ویرایش دوره">
                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-19-122603/theme/html/demo1/dist/../src/media/svg/icons/General/Settings-2.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                    viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </a>
                        <a href="{{route('episode.index',['id'=>$course->id])}}"
                            class="btn btn-success btn-circle btn-icon mr-1" data-container="body" data-toggle="tooltip" data-placement="top" title="جلسات دوره">
                            <span class="svg-icon svg-icon svg-icon-white">
                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-19-122603/theme/html/demo1/dist/../src/media/svg/icons/Media/Media-library1.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                    viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <rect fill="#000000" opacity="0.9" x="2" y="9" width="20"
                                            height="13" rx="2" />
                                        <rect fill="#000000" opacity="0.8" x="5" y="5" width="14" height="2"
                                            rx="0.5" />
                                        <rect fill="#000000" opacity="0.7" x="7" y="1" width="10" height="2"
                                            rx="0.5" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </a>
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