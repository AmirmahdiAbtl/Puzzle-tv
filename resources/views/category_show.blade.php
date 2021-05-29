@extends('layouts.app')
@section('content')
  
<div class="container-fluid my-10">
    <div class="col-12 mb-7">
        <h2 class="text-white font-weight-boldest display5-md">category name </h2>
    </div>
    <div class="row main-slider">

        @foreach ($course as $item)
        <div class="col-md rounded first" id="{{ $item->id }}">
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

@endsection
@section('js')
<script>
    $(document).ready(function() {
            $(".top-slider").owlCarousel({
                items: 1,
                rtl: true,

            });
            $(".main-slider").owlCarousel({
                items: 7,
                rtl: true,

            });
            $(".first").click(function() {
            if ($(this).hasClass('slide-was-down')) {
                $("#content").slideUp()
                $(this).removeClass("slide-was-down");
            } else {
                $("#content").slideDown()
                let currentId = this.getAttribute("id");

                async function ajax() {
                    let url = '{{ URL::to(' / ') }}/api/coursebanner/' + currentId;
                    const response = await fetch(url);
                    const json = await response.json();

                    $("#contentTitle").text(json.title)
                    $("#contentDetail").text(json.discription)
                    $("#contentLink a").attr('href', '{{ URL::to(' / ') }}/course/' + json.slug)
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
        });
            
    </script>
@endsection

