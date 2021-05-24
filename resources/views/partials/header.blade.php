<div class="position-fixed w-100 right-0 left-0 p-md-3 p-0 zindex-5">
    <nav class="navbar navbar-expand-lg navbar-dark py-2 navbar-glass w-100">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand font-weight-boldest font-size-h2 text-danger text-hover-danger" href="{{ route('home') }}">ایران&zwnj;تی&zwnj;وی</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav font-size-h6">
                    @foreach ($categoryList as $item)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('category.single',['slug' => $item->slug]) }}">{{ $item->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            {{-- <div class="form-group mb-0">
                <div class="input-icon input-icon-right">
                    <input type="text" class="form-control text-white bg-transparent border-light" placeholder="جستجو..." />
                    <span><i class="flaticon2-search-1 icon-md"></i></span>
                </div>
            </div> --}}
            <button class="btn btn-light mr-2 ml-3 btn-text-dark px-md-15 px-3">خرید اشتراک</button>
            @auth
            <a href="{{ route('dashboard') }}" class="btn btn-outline-light btn-text-light btn-hover-text-dark px-md-5 px-3">حساب کاربری</a>
            @endauth
            @guest
            <a href="{{ route('login') }}" class="btn btn-outline-light btn-text-light btn-hover-text-dark px-md-5 px-3">ورود | ثبت
                نام</a>
            @endguest
        </div>
    </nav>
</div>