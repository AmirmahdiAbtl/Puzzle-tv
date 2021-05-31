@extends('layouts.app')

@section('content')
<div class="top-slider w-100">
    @isset($slider[0])
    <div class="slider h-lg-700px h-500px" style='background: url("{{ asset("/images/poster/".$slider[0]->poster) }}");background-size:cover;'>
        <div class="col-md-6 bg-slider align-items-center px-20 d-flex h-100">
            <div class="d-block">
                <img src="https://lh3.googleusercontent.com/proxy/--DkDznWOPqdXAvdPsjccL2OC9KCrF4-oeff7sJMmhMknzE1K3hAQUqSnZlnrpRt1RkFrhL_W4y5GybhvO7rk-97yj8okqgTmynNw7mFYXBAanDNP4aT6cAHvhpidekvgSPy" alt="{{ $slider[0]->title }}" class="w-100px mb-3">
                <h2 class="text-white font-weight-boldest display4-md">{{ $slider[0]->title }}</h2>
                <p class="text-white mt-4">{{ explode('-',$dbvalue[0]->name)[0] }}</p>
                <a href="{{ asset('course/'.$slider[0]->slug) }}">
                    <button class="btn btn-light btn-text-dark mt-5">نمایش قسمت‌ها</button>
                </a>
            </div>
        </div>
    </div>
    @endisset

    @isset($slider[1])
    <div class="slider h-lg-700px h-500px" style='background: url("{{ asset("/images/poster/".$slider[1]->poster) }}");background-size:cover;'>
        <div class="col-md-6 bg-slider align-items-center px-20 d-flex h-100">
            <div class="d-block">
                <img src="https://lh3.googleusercontent.com/proxy/--DkDznWOPqdXAvdPsjccL2OC9KCrF4-oeff7sJMmhMknzE1K3hAQUqSnZlnrpRt1RkFrhL_W4y5GybhvO7rk-97yj8okqgTmynNw7mFYXBAanDNP4aT6cAHvhpidekvgSPy" alt="{{ $slider[1]->title }}" class="w-100px mb-3">
                <h2 class="text-white font-weight-boldest display4-md">{{ $slider[1]->title }}</h2>
                <p class="text-white mt-4">{{ explode('-',$dbvalue[1]->name)[0] }}</p>
                <a href="{{ asset('course/'.$slider[1]->slug) }}">
                    <button class="btn btn-light btn-text-dark mt-5">نمایش قسمت‌ها</button>
                </a>
            </div>
        </div>
    </div>
    @endisset

    @isset($slider[2])
    <div class="slider h-lg-700px h-500px" style='background: url("{{ asset("/images/poster/".$slider[2]->poster) }}");background-size:cover;'>
        <div class="col-md-6 bg-slider align-items-center px-20 d-flex h-100">
            <div class="d-block">
                <img src="https://lh3.googleusercontent.com/proxy/--DkDznWOPqdXAvdPsjccL2OC9KCrF4-oeff7sJMmhMknzE1K3hAQUqSnZlnrpRt1RkFrhL_W4y5GybhvO7rk-97yj8okqgTmynNw7mFYXBAanDNP4aT6cAHvhpidekvgSPy" alt="{{ $slider[2]->title }}" class="w-100px mb-3">
                <h2 class="text-white font-weight-boldest display4-md">{{ $slider[2]->title }}</h2>
                <p class="text-white mt-4">{{ explode('-',$dbvalue[2]->name)[0] }}</p>
                <a href="{{ asset('course/'.$slider[2]->slug) }}">
                    <button class="btn btn-light btn-text-dark mt-5">نمایش قسمت‌ها</button>
                </a>
            </div>
        </div>
    </div>
    @endisset

    @isset($slider[3])
    <div class="slider h-lg-700px h-500px" style='background: url("{{ asset("/images/poster/".$slider[3]->poster) }}");background-size:cover;'>
        <div class="col-md-6 bg-slider align-items-center px-20 d-flex h-100">
            <div class="d-block">
                <img src="https://lh3.googleusercontent.com/proxy/--DkDznWOPqdXAvdPsjccL2OC9KCrF4-oeff7sJMmhMknzE1K3hAQUqSnZlnrpRt1RkFrhL_W4y5GybhvO7rk-97yj8okqgTmynNw7mFYXBAanDNP4aT6cAHvhpidekvgSPy" alt="{{ $slider[3]->title }}" class="w-100px mb-3">
                <h2 class="text-white font-weight-boldest display4-md">{{ $slider[3]->title }}</h2>
                <p class="text-white mt-4">{{ explode('-',$dbvalue[3]->name)[0] }}</p>
                <a href="{{ asset('course/'.$slider[3]->slug) }}">
                    <button class="btn btn-light btn-text-dark mt-5">نمایش قسمت‌ها</button>
                </a>
            </div>
        </div>
    </div>
    @endisset

    @isset($slider[4])
    <div class="slider h-lg-700px h-500px" style='background: url("{{ asset("/images/poster/".$slider[4]->poster) }}");background-size:cover;'>
        <div class="col-md-6 bg-slider align-items-center px-20 d-flex h-100">
            <div class="d-block">
                <img src="https://lh3.googleusercontent.com/proxy/--DkDznWOPqdXAvdPsjccL2OC9KCrF4-oeff7sJMmhMknzE1K3hAQUqSnZlnrpRt1RkFrhL_W4y5GybhvO7rk-97yj8okqgTmynNw7mFYXBAanDNP4aT6cAHvhpidekvgSPy" alt="{{ $slider[4]->title }}" class="w-100px mb-3">
                <h2 class="text-white font-weight-boldest display4-md">{{ $slider[4]->title }}</h2>
                <p class="text-white mt-4">{{ explode('-',$dbvalue[4]->name)[0] }}</p>
                <a href="{{ asset('course/'.$slider[4]->slug) }}">
                    <button class="btn btn-light btn-text-dark mt-5">نمایش قسمت‌ها</button>
                </a>
            </div>
        </div>
    </div>
    @endisset

</div>

<div class="container-fluid my-10">
    <div class="row ">
        <div class="col-md-4">
            <div class="card card-custom overlay">
                <div class="card-body p-0">
                    <div class="overlay-wrapper">
                        <img src="https://i.pinimg.com/originals/91/a4/a6/91a4a66cab7cff135879c28c420e64fe.jpg" width="100%" height="300px" alt="" class="w-100 rounded" />
                    </div>
                    <div class="overlay-layer m-5 rounded align-items-start justify-content-end">
                        <div class="d-flex flex-column mt-5 mr-5 align-items-end">
                            <a href="#" class="font-size-h3 font-weight-bolder text-white mb-5">دوره‌های آموزشی تخصصی
                                آرایشگری</a>
                            <button class="btn btn-light btn-text-danger btn-hover-danger">نمایش قسمت‌ها</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom overlay">
                <div class="card-body p-0">
                    <div class="overlay-wrapper">
                        <img src="https://media.istockphoto.com/videos/shoes-stop-motion-video-id1061181284?s=640x640" width="100%" height="300px" alt="" class="w-100 rounded" />
                    </div>
                    <div class="overlay-layer m-5 rounded align-items-start justify-content-end">
                        <div class="d-flex flex-column mt-5 mr-5 align-items-end">
                            <a href="#" class="font-size-h3 font-weight-bolder text-white mb-5">تمرینات ویژه بدنسازی</a>
                            <button class="btn btn-light btn-text-danger btn-hover-danger">نمایش قسمت‌ها</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom overlay">
                <div class="card-body p-0">
                    <div class="overlay-wrapper">
                        <img src="https://img.freepik.com/free-photo/word-english-with-globe-wooden-background_1357-127.jpg?size=626&ext=jpg&ga=GA1.2.1356500412.1616976000" width="100%" height="300px" alt="" class="w-100 rounded" />
                    </div>
                    <div class="overlay-layer m-5 rounded align-items-start justify-content-end">
                        <div class="d-flex flex-column mt-5 mr-5 align-items-end">
                            <a href="#" class="font-size-h3 font-weight-bolder text-white mb-5">آموزش زبان انگلیسی
                                کودکان</a>
                            <button class="btn btn-light btn-text-danger btn-hover-danger">نمایش قسمت‌ها</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid my-10">
    <div class="col-12 mb-7">
        <h2 class="text-white font-weight-boldest display5-md">جدیدترین ویدیوها</h2>
    </div>
    <div class="row main-slider">
        @foreach ($recent_course as $recent)

        <div class="col-12 first1" id="{{ $recent->id }}">
            <img src='{{ asset("/images/poster/$recent->poster") }}' class="w-100 rounded" height="269.44px" alt="">
            <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">{{ $recent->title }}</h4>
            <h4 class="small text-white">قسمت ۳</h4>
        </div>
        @endforeach
    </div>
</div>


<div id="content1" class=" container-fluid my-10" style="display:none">
    <div class="container-fluid my-10 ">
        <div class="card card-custom overlay">
            <div class="card-body p-0">
                <div class="overlay-wrapper">
                    <img src="" width="100%" height="500px" alt="" class="w-100 rounded" id="contentImage1" />
                </div>
                <div class="overlay-layer bg-dark-o-95  rounded align-items-start  justify-content-start">
                    <button type="button" class="close mt-1 ml-1" id="close1" aria-label="Close">
                        <span class=" text-white" aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-flex flex-column   align-items-start ">
                        <a href="#" class="font-size-h3 font-weight-bolder text-black mb-2  ml-10  mt-11" id="contentTitle1">فیلم ها </a>
                        <p class=" mb-2  ml-10  mt-11" id="contentDetail1">hello</p>
                        <button class="btn btn-light btn-text-danger mt-5  me-11 me-5 ms-11 ml-10 btn-hover-bg-dark" id="contentLink1">
                            <a href="">نمایش قسمت‌ها</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid my-10">
    <div class="col-12 mb-7">
        <h2 class="text-white font-weight-boldest display5-md">محبوب‌‌ترین‌ها</h2>
    </div>
    <div class="row main-slider">

        @foreach ($course as $item)
        <div class="col-12  rounded first" id="{{ $item->id }}">
            <img src="{{ asset("/images/poster/$item->poster") }}" class="w-100 rounded" alt="">
            <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">{{ $item->title }}</h4>
            <h4 class="small text-white">قسمت ۳</h4>
        </div>
        @endforeach

    </div>
</div>
<div id="content" class=" container-fluid my-10" style="display:none">
    <div class="container-fluid my-10 ">
        <div class="card card-custom overlay">
            <div class="card-body p-0">
                <div class="overlay-wrapper">
                    <img src="" id="contentImage" width="100%" height="500px" alt="" class="w-100 rounded" />
                </div>
                <div class="overlay-layer bg-dark-o-95  rounded align-items-start  justify-content-start">
                    <button type="button" class="close mt-1 ml-1" id="close1" aria-label="Close">
                        <span class=" text-white" aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-flex flex-column   align-items-start ">
                        <a href="#" class="font-size-h3 font-weight-bolder text-black mb-2  ml-10  mt-11" id="contentTitle">فیلم ها </a>
                        <p class=" mb-2  ml-10  mt-11" id="contentDetail">hello</p>
                        <button class="btn btn-light btn-text-danger mt-5  me-11 me-5 ms-11 ml-10 btn-hover-bg-dark" id="contentLink">
                            <a href="">نمایش قسمت‌ها</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid my-10">
    <div class="col-12 mb-7">
        <h2 class="text-white font-weight-boldest display5-md">آموزش کنکور</h2>
    </div>
    <div class="row main-slider">

        @foreach ($course as $item)
        <div class="col-12 rounded first2" id="{{ $item->id }}">
            <img src="{{ asset("/images/poster/$item->poster") }}" class="w-100 rounded" alt="">
            <h4 class="font-size-h6 mt-3 mb-1 font-weight-bolder text-white">{{ $item->title }}</h4>
            <h4 class="small text-white">قسمت ۳</h4>
        </div>
        @endforeach

    </div>
</div>
<div id="content2" class=" container-fluid my-10" style="display:none">
    <div class="container-fluid my-10 ">
        <div class="card card-custom overlay">
            <div class="card-body p-0">
                <div class="overlay-wrapper">
                    <img src="" width="100%" height="500px" alt="" class="w-100 rounded" id="contentImage2" />
                </div>
                <div class="overlay-layer bg-dark-o-95  rounded align-items-start  justify-content-start">
                    <button type="button" class="close mt-1 ml-1" id="close1" aria-label="Close">
                        <span class=" text-white" aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-flex flex-column   align-items-start ">
                        <a href="#" class="font-size-h3 font-weight-bolder text-black mb-2  ml-10  mt-11" id="contentTitle2">فیلم ها </a>
                        <p class=" mb-2  ml-10  mt-11" id="contentDetail2">hello</p>
                        <button class="btn btn-light btn-text-danger mt-5  me-11 me-5 ms-11 ml-10 btn-hover-bg-dark" id="contentLink2">
                            <a href="">نمایش قسمت‌ها</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid my-10">
    <div class="row">
        <div class="col-md-6">
            <img src="https://designrz.com/images/responsive-website-designing-usa.png" class="w-75 float-right" alt="">
        </div>
        <div class="col-md-6 align-items-center d-flex">
            <div class="d-block">
                <h2 class="text-white font-weight-boldest display4-md">دسترسی آسان</h2>
                <p class="text-white mt-4 w-75">امکان دسترسی آسان به پخش زنده و آرشیو برنامه‌ها از طریق موبایل، لپ تاپ،
                    کامپیوتر های خانگی و حتی تلویزیون های هوشمند در ایران‌تی‌وی فراهم است. ما برای شما بهترین تجربه از
                    تلویزیون اینترنتی را فراهم می‌کنیم.</p>
                <button class="btn btn-light mt-10 btn-text-dark px-md-15 px-3">خرید اشتراک</button>
            </div>
        </div>
    </div>
</div>
<div>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit"> LogOUt</button>
    </form>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $(".top-slider").owlCarousel({
            items: 1,
            rtl: true,
            autoplay: true,
            autoplayTimeout: 3000

        });
        $(".main-slider").owlCarousel({
            items: 7,
            rtl: true,
            autoplay: true,
            autoplayTimeout: 3000

        });
        // async function courses(proms) {
        //     let url = '{{ URL::to('/') }}/api/coursebanner/' + proms;
        //     const response = await fetch(url);
        //     const json = await response.json();

        //     $("#contentTitle").text(json.title)
        //     $("#contentDetail").text(json.discription)
        //     $("#contentLink a").attr('href','{{ URL::to('/') }}/course/' + json.slug)
        //     $("#contentImage").attr('src',"{{ URL::to('/') }}/images/banner/" + json.banner)

        // }
        $(".first").click(function() {
            if ($(this).hasClass('slide-was-down')) {
                $("#content").slideUp()
                $(this).removeClass("slide-was-down");
            } else {
                $("#content").slideDown()
                let currentId = this.getAttribute("id");

                async function ajax() {
                    let url = '{{ URL::to('/') }}/api/coursebanner/' + currentId;
                    const response = await fetch(url);
                    const json = await response.json();

                    $("#contentTitle").text(json.title)
                    $("#contentDetail").text(json.discription)
                    $("#contentLink a").attr('href', '{{ URL::to('/') }}/course/' + json.slug)
                    $("#contentImage").attr('src', "{{ URL::to('/') }}/images/banner/" + json.banner)
                }
                ajax()

                $(this).addClass("slide-was-down");
                $(this).parent().siblings().each(function(index) {
                    if ($(this).children().hasClass('slide-was-down')) {
                        $(this).children().removeClass('slide-was-down')
                    }
                })

            }
        });
        $(".first1").click(function() {
            if ($(this).hasClass('slide-was-down')) {
                $("#content1").slideUp()
                $(this).removeClass("slide-was-down");
            } else {
                $("#content1").slideDown()
                let currentId = this.getAttribute("id");

                async function ajax() {
                    console.log(currentId)
                    let url = '{{ URL::to('/') }}/api/coursebanner/' + currentId;
                    const response = await fetch(url);
                    const json = await response.json();

                    $("#contentTitle1").text(json.title)
                    $("#contentDetail1").text(json.discription)
                    $("#contentLink1 a").attr('href', '{{ URL::to('/') }}/course/' + json.slug)
                   
                    $("#contentImage1").attr('src', "{{ URL::to('/') }}/images/banner/" + json.banner)
                }
                ajax()

                $(this).addClass("slide-was-down");
                $(this).parent().siblings().each(function(index) {
                    if ($(this).children().hasClass('slide-was-down')) {
                        $(this).children().removeClass('slide-was-down')
                    }
                })

            }
        });
        $(".first2").click(function() {
            if ($(this).hasClass('slide-was-down')) {
                $("#content2").slideUp()
                $(this).removeClass("slide-was-down");
            } else {
                $("#content2").slideDown()
                let currentId = this.getAttribute("id");

                async function ajax() {
                    let url = '{{ URL::to('/') }}/api/coursebanner/' + currentId;
                    const response = await fetch(url);
                    const json = await response.json();

                    $("#contentTitle2").text(json.title)
                    $("#contentDetail2").text(json.discription)
                    $("#contentLink2 a").attr('href', '{{ URL::to('/') }}/course/' + json.slug)
                    $("#contentImage2").attr('src', "{{ URL::to('/') }}/images/banner/" + json.banner)
                }
                ajax()

                $(this).addClass("slide-was-down");
                $(this).parent().siblings().each(function(index) {
                    if ($(this).children().hasClass('slide-was-down')) {
                        $(this).children().removeClass('slide-was-down')
                    }
                })

            }
        });
        $("#close1").click(function() {

            $("#content").css("visibility", "hidden");
            $("#content").css("display", "none")

        })

    });
</script>
@endsection