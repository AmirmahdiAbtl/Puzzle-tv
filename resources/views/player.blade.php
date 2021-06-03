@extends('layouts.app')
@yield('css')
@section('content')
<div class="container-fluid text-white ">
    <div class="row" style="">
        <div class="card   bg-dark-o-95 card-custom overlay mt-30 col-12 ">
            <div class="header card-header bg-auto h-10">film name or nmidonam</div>
            <div class="card-body p-0">
                <div class=" d-flex flex-row flex-wrap overflow-y-scroll  ">
                    <div  class="flex-col   text-white bg-secondary-100 col-12 col-md-3 col-sm-3  " style="height: 45em; overflow-y:scroll; direction:ltr " id="suggest">
                       @if (count($array) > 0)
                            @foreach ($array as $item)
                            @php $course = $item->course @endphp
                            {{-- @php
                                dd($item->season->id)
                            @endphp --}}
                            <a href="{{ route('player',['slug'=>$item->course->slug,'seasonId'=>$item->season->id,'episode'=>$item->slug]) }}">
                                <div class="d-flex justify-content-end rounded mt-1 mb-5 ml-1 bg-secondary-o-25 w-100">
                                    <div class=" d-flex text-white mt-7 pr-17    " id="suggested text">
                                        {{$item->title}}
                                    </div>
                                    <div class="suggested_image">
                                        <button class=" btn  btn-hover-bg-dark "> 
                                        <img src="{{ asset("/images/poster/$course->poster") }}" height="150px" width="100px" class="  rounded" alt="">
                                        </button>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                       @endif
                        
                    </div>
                    <div  class="overlay-wrapper col-12 col-md-9 col-sm-12 mt-1 d-flex flex-wrap    " id="player">
                        <div class="embed-responsive embed-responsive-16by9 w-100  rounded   " style="height: 45em;">
                             <iframe class="embed-responsive-item" src="https://www.aparat.com/video/video/embed/videohash/Mm4Ko/vt/frame" allowfullscreen></iframe> 
                           {{-- <video width="320" height="240" controls>
                                <source src="{{ asset("/video/episode/$ep->video") }}" type="video/mp4">
                              </video>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=" container-fluid mt-5 bg-black">
    <div class=" row text-white" id="video_content">
        <div class=" h-1  border-4 border-white text-white bg-black " id="header">
            this is main about video
        </div>
        <div class=" body text-white" id="body_content">
            lorem epsom type anything about video here
        </div>
    </div>
</div>
<<div class="container my-10">
        <div class="row">
            <div class="col-12">
                <!--begin::Page Layout-->
                <div class="d-flex flex-row ">
                    <div class="flex-row-fluid ">
                        <a href="https://www.instagram.com/mmd_choupan/" class="w-100">
                            <div class="card card-custom card-stretch bg-primary rounded-xl py-10" style="background: url(https://puzzle-stu.com/media/pattern.png),linear-gradient(-145deg,#285aeb,#d6249f,#fd5949)">
                                <div class="card-body ">
                                    <div class="row d-flex justify-content-between align-items-center ">
                                        <div class="text-center col-md-6 col-12">
                                            <span class="font-weight-boldest text-white font-size-h3 ">
                                            inja ham hala harchi hal konim che bdeonam insta site
                                                </span>
                                        </div>
                                        <div class="text-center col-md-2 col-12">
                                            <button class="btn btn-lg btn-transparent-white rounded-circle">
                                                <i class="socicon-instagram py-3 px-1 icon-3x"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Page Layout-->
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $(".top-slide1").owlCarousel({
            items: 7,
            rtl: true,

        });
    });
</script>

@endsection
@section('css')
<style>
    #suggest::-webkit-scrollbar {
        width: 4px;
    }

    #suggest::-webkit-scrollbar-thumb {
        background-color: rgb(100, 100, 100);
        overflow-x: hidden;
    }

    #suggest::-webkit-scrollbar-track-piece {
        background-color: rgb(32, 32, 32);
        width: 1px;
        overflow-x: hidden;
        overflow-x: hidden;
        overflow-y: hidden;
    }
</style>

@endsection