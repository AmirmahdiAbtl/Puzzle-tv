@extends('layouts.app')

@section('content')

    <div class=" coontainer-fluid ">
        <div class=" overlay">
            <div class="overlay-wrapper">
                <div class="slider h-lg-700px h-500px"
                    style="background: url('{{ asset("/images/poster/$course->poster") }}');background-size:cover;">
                    <div class="col-md-8 bg-slider align-items-center px-20 d-flex h-100">
                    </div>
                </div>
                <div class="overlay-layer bg-dark-o-100  rounded align-items-start  justify-content-start">
                    <button type="button" class="close mt-1 ml-1" id="close1" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-flex flex-column  mt-35   align-items-start ">
                        <a href="#" class="font-size-h3 font-weight-bolder text-white mb-5  ml-10  mt-11"> {{ $course->title }} </a>
                        <span class="font-size-h5 text-white mb-5  ml-10  mt-1 col-md-4 text-justify"> {{ $course->discription }} </span>
                        <span class="font-size-h3 font-weight-bolder text-white mb-5  ml-10  mt-1">تعداد فصل ها : {{ $course->seasons->count() }} </span>
                        <span class="font-size-h3 font-weight-bolder text-white mb-5  ml-10  mt-1">مدرس : {{ $course->teacher->fname }} {{ $course->teacher->lname }}</span>
                        {{-- <span class="font-size-h3 font-weight-bolder text-white mb-5  ml-10  mt-1">تاریخ انتشار : {{ $course->lastUpdated() }} </span> --}}
                        <div class=" d-flex flex-row">
                            <div class="d-flex mt-1">
                                <button class="btn hover-opacity-47">
                                    <span class="svg-icon svg-icon-white svg-icon-2x">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                                <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </button>
                            </div>
                            <div class=" flex d-flex">
                                <a href="">
                                    <button class="btn btn-light btn-text-danger mt-5  me-11 me-5 ms-11  btn-hover-bg-dark">
                                        نمایش قسمت‌ها
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="containar-fluid mt-10">
        <div class="row">
            <div class="main-content mx-15">
                <h2 id="data" class=" text-white  "> خلاصه فیلم  <h2>
                <h5 class=" text-white " id="data-main">  lorem epsom </h5>
            </div>
        </div>
        <div class="mx-10 accordion accordion-solid accordion-toggle-plus" id="accordionExample3">
           @foreach ($course->seasons as $season)
            <div class="card bg-dark rounded" style="box-shadow: rgba(238,238,238,0.8) 0px 1px 10px !important; background-color: rgba(0, 0, 0, 0.5) !important">
                <div class="card-header bg-dark rounded" id="headingOne3">
                    <div class="card-title bg-dark text-light rounded" data-toggle="collapse" data-target="#collapse-{{ $season->id }}">
                        <span class="svg-icon svg-icon-light svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Devices/Video-camera.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" x="2" y="6" width="13" height="12" rx="2"/>
                                <path d="M22,8.4142119 L22,15.5857848 C22,16.1380695 21.5522847,16.5857848 21,16.5857848 C20.7347833,16.5857848 20.4804293,16.4804278 20.2928929,16.2928912 L16.7071064,12.7071013 C16.3165823,12.3165768 16.3165826,11.6834118 16.7071071,11.2928877 L20.2928936,7.70710477 C20.683418,7.31658067 21.316583,7.31658098 21.7071071,7.70710546 C21.8946433,7.89464181 22,8.14899558 22,8.4142119 Z" fill="#000000" opacity="0.3"/>
                            </g>
                        </svg><!--end::Svg Icon--></span>
                        <h5 class="pl-5 pt-1">{{ $season->title }}</h5>
                    </div>
                </div>
                <div id="collapse-{{ $season->id }}" class="collapse rounded" data-parent="#accordionExample3">
                    @foreach ($season->episodes as $episode)
                        <a href="{{ route('player',['slug'=>$course->slug,'seasonId'=>$season->id,'episode'=>$episode->slug]) }}">
                            <div class="card-body  text-light rounded" style="border: none; cursor: pointer;">
                                <span class="svg-icon svg-icon-light svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Angle-double-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                                {{ $episode->title }}
                            </div>
                        </a>
                     @endforeach
                </div>
            </div>
           @endforeach
        </div>
    </div>
    <div class="mr-10 ml-10 mt-10">
        @if ($course->category)
            @foreach($course->category as $item)
                <a href="{{ route('category.single',['slug' => $item->slug]) }}"><span class="label label-dark label-inline mr-2"  style="box-shadow: rgba(238,238,238,0.8) 0px 1px 6px !important; cursor: pointer;">{{ $item->title }}</span></a>
            @endforeach
        @endif
    </div>
    <div class="container-fluid my-10  ">
        <div class="col-12 mb-7">
            <h2 class="text-white font-weight-boldest display5-md">جدیدترین ویدیوها</h2>
        </div>
        <div class="row  slider_main overflow-x-scroll ">
            @foreach ($recent_course as $recent)
                <a href="{{ route('course',['slug' => $recent->slug]) }}">
                    <div class="col-12">
                        <img src="{{ asset("/images/banner/$recent->banner") }}"
                            class="w-100 rounded" height="269.44px" alt="">
                        <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">{{ $recent->title }}</h4>
                        {{-- <h4 class="small text-white">قسمت ۳</h4> --}}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
@section('css')

@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $(".slider_main").owlCarousel({
                items: 7,
                rtl: true,

            });
            $("#first").click(function() {
                $("#content").css("visibility", "visible");
                $("#content").css("display", "inline")
            });
            $("#close1").click(function() {

                $("#content").css("visibility", "hidden");
                $("#content").css("display", "none")

            })

        });

    </script>
@endsection