@extends('layouts.app')

@section('content')

    <div class=" coontainer-fluid ">
        <div class=" overlay">
            <div class="overlay-wrapper">
                <div class="slider h-lg-700px h-500px"
                    style="background: url('https://static.namava.ir/Content/Upload/Images/4ba7b1c6-29d3-4559-8af7-bcb9972d45d4.jpg?anchor=middlecenter&amp;crop=auto&amp;scale=both&amp;w=1920&amp;h=900');background-size:cover;">
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
                        <span class="font-size-h3 font-weight-bolder text-white mb-5  ml-10  mt-1">لورم اپسوم </span>
                        <span class="font-size-h3 font-weight-bolder text-white mb-5  ml-10  mt-1">لورم اپسوم </span>
                        <span class="font-size-h3 font-weight-bolder text-white mb-5  ml-10  mt-1">لورم اپسوم </span>
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
            <div class="card">
                <div class="card-header" id="headingOne3">
                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne3">
                        {{ $season->title }}
                    </div>
                </div>
                <div id="collapseOne3" class="collapse show" data-parent="#accordionExample3">
                    @foreach ($season->episodes as $episode)
                        <div class="card-body">
                            {{ $episode->title }}
                        </div>
                     @endforeach
                </div>
            </div>
           @endforeach
        </div>
    </div>
    <div class="container-fluid my-10  ">
        <div class="col-12 mb-7">
            <h2 class="text-white font-weight-boldest display5-md">جدیدترین ویدیوها</h2>
        </div>
        <div class="row  slider_main overflow-x-scroll ">
            <div class="col-12">
                <img src="https://www.doostihaa.com/img/uploads/2017/07/National-Geographic-Monster-Moves.jpg"
                    class="w-100 rounded" height="269.44px" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">جابجایی‌های غول‌آسا</h4>
                <h4 class="small text-white">قسمت ۳</h4>

            </div>
            <div class="col-12">
                <img src="https://ir-dl.com/wp-content/uploads/2019/06/LezateAshpazi.jpg" class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">آشپزی با سامان گلریز</h4>
                <h4 class="small text-white">قسمت ۱۵۴</h4>
            </div>
            <div class="col-12">
                <img src="https://cdn.isna.ir/d/off/khouzestan/2021/01/04/3/61818296.jpg" class="w-100 rounded"
                    height="269.44px" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">مستند ده روایت</h4>
            </div>
            <div class="col-12">
                <img src="https://lh3.googleusercontent.com/proxy/qUZ1tQEzo5lFLDW6DahrCMHjLL6zbAaowZaa7EDKRDrC9pVX7RLf2sSDfbc4QpAAHb3KiNDpsfHGNwYbNpZWOXAi0UCqTImpblgtlJfjcfxY"
                    class="w-100 rounded" height="269.44px" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">مستند حیات وحش</h4>
                <h4 class="small text-white">قسمت ۳</h4>
            </div>
            <div class="col-12">
                <img src="https://civilica.com/images/calendar/posters/TAHAVOL01_poster.jpg" height="269.44px"
                    class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">پخش رویداد تحول در آموزش</h4>
            </div>
            <div class="col-12">
                <img src="https://www.doostihaa.com/img/uploads/2017/07/National-Geographic-Monster-Moves.jpg"
                    height="269.44px" class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">جابجایی‌های غول‌آسا</h4>
                <h4 class="small text-white">قسمت ۳</h4>
            </div>
            <div class="col-12">
                <img src="https://www.doostihaa.com/img/uploads/2017/07/National-Geographic-Monster-Moves.jpg"
                    height="269.44px" class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">جابجایی‌های غول‌آسا</h4>
                <h4 class="small text-white">قسمت ۳</h4>
            </div>
            <div class="col-12">
                <img src="https://www.doostihaa.com/img/uploads/2017/07/National-Geographic-Monster-Moves.jpg"
                    height="269.44px" class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">جابجایی‌های غول‌آسا</h4>
                <h4 class="small text-white">قسمت ۳</h4>
            </div>
            <div class="col-12">
                <img src="https://www.doostihaa.com/img/uploads/2017/07/National-Geographic-Monster-Moves.jpg"
                    height="269.44px" class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">جابجایی‌های غول‌آسا</h4>
                <h4 class="small text-white">قسمت ۳</h4>
            </div>
            <div class="col-12">
                <img src="https://www.doostihaa.com/img/uploads/2017/07/National-Geographic-Monster-Moves.jpg"
                    height="269.44px" class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">جابجایی‌های غول‌آسا</h4>
                <h4 class="small text-white">قسمت ۳</h4>
            </div>
            <div class="col-12">
                <img src="https://www.doostihaa.com/img/uploads/2017/07/National-Geographic-Monster-Moves.jpg"
                    height="269.44px" class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">جابجایی‌های غول‌آسا</h4>
                <h4 class="small text-white">قسمت ۳</h4>
            </div>
            <div class="col-12">
                <img src="https://www.doostihaa.com/img/uploads/2017/07/National-Geographic-Monster-Moves.jpg"
                    height="269.44px" class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">جابجایی‌های غول‌آسا</h4>
                <h4 class="small text-white">قسمت ۳</h4>
            </div>
            <div class="col-12">
                <img src="https://www.doostihaa.com/img/uploads/2017/07/National-Geographic-Monster-Moves.jpg"
                    height="269.44px" class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">جابجایی‌های غول‌آسا</h4>
                <h4 class="small text-white">قسمت ۳</h4>
            </div>
            <div class="col-12">
                <img src="https://www.doostihaa.com/img/uploads/2017/07/National-Geographic-Monster-Moves.jpg"
                    height="269.44px" class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">جابجایی‌های غول‌آسا</h4>
                <h4 class="small text-white">قسمت ۳</h4>
            </div>
            <div class="col-12">
                <img src="https://www.doostihaa.com/img/uploads/2017/07/National-Geographic-Monster-Moves.jpg"
                    height="269.44px" class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">جابجایی‌های غول‌آسا</h4>
                <h4 class="small text-white">قسمت ۳</h4>
            </div>
            <div class="col-12">
                <img src="https://www.doostihaa.com/img/uploads/2017/07/National-Geographic-Monster-Moves.jpg"
                    height="269.44px" class="w-100 rounded" alt="">
                <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">جابجایی‌های غول‌آسا</h4>
                <h4 class="small text-white">قسمت ۳</h4>
            </div>

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
