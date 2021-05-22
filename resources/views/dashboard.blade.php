@extends('layouts.admin')

@section('content')
<div class=" container-fluid">
    <div class="row">
        <a class="navbar-brand font-weight-boldest font-size-h1 text-danger text-hover-danger" href="{{ route('home') }}">ایران&zwnj;تی&zwnj;وی</a>
    </div>
    <div>
        <h5> سامانه مدیریت ویدیو ها</h5>
        lorem epsom goes here
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('js/pages/widgets.js') }}"></script>
@endsection