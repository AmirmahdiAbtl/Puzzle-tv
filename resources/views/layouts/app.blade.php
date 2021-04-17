<!DOCTYPE html>
<html lang="en" direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>گروه کارنسا | طراحی و توسعه وبسایت، پرتال، فروشگاه و سامانه های تحت وب</title>
    <meta name="description" content="طراحی و توسعه وبسایت، پرتال، فروشگاه و سامانه های تحت وب با بهره گیری از بروزترین تکنولوژی های فنی در سطح جهان" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://v1.fontapi.ir/css/Shabnam" />
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all p ages)-->
    <link href="{{ asset('plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('css/header/base/light.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/header/menu/light.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/brand/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="https://guard.medpip.com/media/02_1.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-mobile-fixed subheader-enable page-loading">
    <!--begin::Main-->

    @include('partials.header')

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid mb-0 pb-0" id="kt_content">

                    @yield('content')

                </div>
                <!--end::Content-->

                @include('partials.footer')

                <!--end::Page-->
            </div>
            <!--end::Main-->
            <script>
                var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";

            </script>
            <!--begin::Global Config(global config for global JS scripts)-->
            <script>
                var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#f9396a",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#EBECF4"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Shabnam"
        };

            </script>
            <!--end::Global Config-->
            <!--begin::Global Theme Bundle(used by all pages)-->
            <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
            <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
            <script src="{{ asset('js/scripts.bundle.js') }}"></script>
            <!--end::Global Theme Bundle-->
            <!--begin::Page Scripts(used by this page)-->
            <script src="{{ asset('js/pages/widgets.js') }}"></script>
            <!--end::Page Scripts-->

            @yield('js')
            <!--end::Page Vendors-->
            <!--begin::Page Scripts(used by this page)-->
            {{-- <script src="{{ asset('js/pages/widgets.js') }}"></script> --}}
            <!--end::Page Scripts-->
            @yield('script')

</body>
<!--end::Body-->

</html>