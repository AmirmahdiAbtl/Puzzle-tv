<!DOCTYPE html>
<html lang="en" direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>
	<base href="">
	<meta charset="utf-8" />
	<title>ایران تی‌وی</title>
	<meta name="description" content="دایرکتوری آزمایشگاهی شرکت پل ایده آل پارس" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--begin::Fonts-->
	<link href="https://v1.fontapi.ir/css/Sahel" rel="stylesheet">
	<!--end::Fonts-->
	<!--begin::Page Vendors Styles(used by this page)-->
	@yield('css')
	<!--end::Page Vendors Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="{{ asset('plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<link href="{{ asset('css/header/base/light.rtl.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/header/menu/light.rtl.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/brand/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/aside/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="https://guard.medpip.com/media/02_1.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
	class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<!--begin::Main-->
	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
		<!--begin::Logo-->
		<a href="index.html">
			<a class="navbar-brand font-weight-boldest font-size-h1 text-danger text-hover-danger" href="{{ route('home') }}">ایران&zwnj;تی&zwnj;وی</a>
		</a>
		<!--end::Logo-->
		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<!--begin::Aside Mobile Toggle-->
			<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
				<span></span>
			</button>
			<!--end::Aside Mobile Toggle-->
			<!--begin::Topbar Mobile Toggle-->
			<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
				<span class="svg-icon svg-icon-xl">
					<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
						height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path
								d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
								fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path
								d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
								fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
			<!--end::Topbar Mobile Toggle-->
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header Mobile-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<!--begin::Aside-->
			<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
				<!--begin::Brand-->
				<div class="brand flex-column-auto" id="kt_brand">
					<!--begin::Logo-->
					<a class="navbar-brand font-weight-boldest font-size-h1 text-danger text-hover-danger" href="{{ route('home') }}">ایران&zwnj;تی&zwnj;وی</a>
					<!--end::Logo-->
					<!--begin::Toggle-->
					<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
						<span class="svg-icon svg-icon svg-icon-xl">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path
										d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
										fill="#000000" fill-rule="nonzero"
										transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
									<path
										d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
										fill="#000000" fill-rule="nonzero" opacity="0.3"
										transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</button>
					<!--end::Toolbar-->
				</div>
				<!--end::Brand-->
				<!--begin::Aside Menu-->
				<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
					<!--begin::Menu Container-->
					<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
						data-menu-dropdown-timeout="500">
						<!--begin::Menu Nav-->
						<ul class="menu-nav">
							<li class="menu-item" aria-haspopup="true">
								<a href="{{ route('home') }}" class="menu-link">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M21.4451171,17.7910156 C21.4451171,16.9707031 21.6208984,13.7333984 19.0671874,11.1650391 C17.3484374,9.43652344 14.7761718,9.13671875 11.6999999,9 L11.6999999,4.69307548 C11.6999999,4.27886191 11.3642135,3.94307548 10.9499999,3.94307548 C10.7636897,3.94307548 10.584049,4.01242035 10.4460626,4.13760526 L3.30599678,10.6152626 C2.99921905,10.8935795 2.976147,11.3678924 3.2544639,11.6746702 C3.26907199,11.6907721 3.28437331,11.7062312 3.30032452,11.7210037 L10.4403903,18.333467 C10.7442966,18.6149166 11.2188212,18.596712 11.5002708,18.2928057 C11.628669,18.1541628 11.6999999,17.9721616 11.6999999,17.7831961 L11.6999999,13.5 C13.6531249,13.5537109 15.0443703,13.6779456 16.3083984,14.0800781 C18.1284272,14.6590944 19.5349747,16.3018455 20.5280411,19.0083314 L20.5280247,19.0083374 C20.6363903,19.3036749 20.9175496,19.5 21.2321404,19.5 L21.4499999,19.5 C21.4499999,19.0068359 21.4451171,18.2255859 21.4451171,17.7910156 Z"
													fill="#000000" fill-rule="nonzero"
													transform="translate(12.254964, 11.721538) scale(-1, 1) translate(-12.254964, -11.721538) " />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">بازگشت به صفحه اصلی</span>
								</a>
							</li>

							@can('video CRUD')
							<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
								<a href="javascript:;" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Devices/TV1.svg--><svg
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M4.5,6 L19.5,6 C20.8807119,6 22,6.97004971 22,8.16666667 L22,16.8333333 C22,18.0299503 20.8807119,19 19.5,19 L4.5,19 C3.11928813,19 2,18.0299503 2,16.8333333 L2,8.16666667 C2,6.97004971 3.11928813,6 4.5,6 Z M4,8 L4,17 L20,17 L20,8 L4,8 Z"
													fill="#000000" fill-rule="nonzero" />
												<polygon fill="#000000" opacity="0.3" points="4 8 4 17 20 17 20 8" />
												<rect fill="#000000" opacity="0.3" x="7" y="20" width="10" height="1"
													rx="0.5" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">مدیریت ویدیوها</span>
									<i class="menu-arrow"></i>
								</a>
								<div class="menu-submenu">
									<i class="menu-arrow"></i>
									<ul class="menu-subnav">
										<li class="menu-item" aria-haspopup="true">
											<a href="{{route('course.index')}}" class="menu-link">
												<i class="menu-bullet menu-bullet-dot">
													<span></span>
												</i>
												<span class="menu-text">لیست ویدیوها</span>
											</a>
										</li>
										<li class="menu-item" aria-haspopup="true">
											<a href="{{route('course.create')}}" class="menu-link">
												<i class="menu-bullet menu-bullet-dot">
													<span></span>
												</i>
												<span class="menu-text">افزودن ویدیو</span>
											</a>
										</li>
										<li class="menu-item" aria-haspopup="true">
											<a href="{{route('category.index')}}" class="menu-link">
												<i class="menu-bullet menu-bullet-dot">
													<span></span>
												</i>
												<span class="menu-text">دسته‌بندی‌ها</span>
											</a>
										</li>

									</ul>
								</div>
							</li>
							<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
								<a href="javascript:;" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Devices/TV1.svg--><svg
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M4.5,6 L19.5,6 C20.8807119,6 22,6.97004971 22,8.16666667 L22,16.8333333 C22,18.0299503 20.8807119,19 19.5,19 L4.5,19 C3.11928813,19 2,18.0299503 2,16.8333333 L2,8.16666667 C2,6.97004971 3.11928813,6 4.5,6 Z M4,8 L4,17 L20,17 L20,8 L4,8 Z"
													fill="#000000" fill-rule="nonzero" />
												<polygon fill="#000000" opacity="0.3" points="4 8 4 17 20 17 20 8" />
												<rect fill="#000000" opacity="0.3" x="7" y="20" width="10" height="1"
													rx="0.5" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">مدیریت اشتراک ها</span>
									<i class="menu-arrow"></i>
								</a>
								<div class="menu-submenu">
									<i class="menu-arrow"></i>
									<ul class="menu-subnav">
										<li class="menu-item" aria-haspopup="true">
											<a href="{{route('course.index')}}" class="menu-link">
												<i class="menu-bullet menu-bullet-dot">
													<span></span>
												</i>
												<span class="menu-text">لیست اشتراک ها </span>
											</a>
										</li>
										<li class="menu-item" aria-haspopup="true">
											<a href="{{route('course.create')}}" class="menu-link">
												<i class="menu-bullet menu-bullet-dot">
													<span></span>
												</i>
												<span class="menu-text">افزودن اشتراک</span>
											</a>
										</li>
							

									</ul>
								</div>
							</li>

							@endcan
							
							
							@can('user CRUD')
                        <li class="menu-section">
                            <h4 class="menu-text">کاربران</h4>
                            <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                        </li>
                        <li class="menu-item {{ request()->is('admin/user') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('user.index') }}" class="menu-link">
                                <span class="svg-icon menu-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text">لیست کاربران</span>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/user/create') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('user.create') }}" class="menu-link">
                                <span class="svg-icon menu-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text">افزودن کاربر جدید</span>
                            </a>
                        </li>
                    @endcan

							@can('permission CRUD')
							<li class="menu-section">
								<h4 class="menu-text">نقش ها و دسترسی ها</h4>
								<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
							</li>
							<li class="menu-item {{ request()->is('admin/role') ? 'menu-item-active' : '' }}"
								aria-haspopup="true">
								<a href="{{ route('role.index') }}" class="menu-link">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
													fill="#000000" />
												<rect fill="#000000" opacity="0.3"
													transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
													x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">لیست نقش ها</span>
								</a>
							</li>
							<li class="menu-item {{ request()->is('admin/permission') ? 'menu-item-active' : '' }}"
								aria-haspopup="true">
								<a href="{{ route('permission.index') }}" class="menu-link">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
													fill="#000000" />
												<rect fill="#000000" opacity="0.3"
													transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
													x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">لیست دسترسی ها</span>
								</a>
							</li>
							@endcan


							@can('setting CRUD')
							
							<li class="menu-section">
								<h4 class="menu-text">مدیریت</h4>
								<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
							</li>
							<li class="menu-item" aria-haspopup="true">
								<a target="_blank" href="{{ route('permission.index') }}"
									class="menu-link">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
													fill="#000000" />
												<rect fill="#000000" opacity="0.3"
													transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
													x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">تنظیمات محتوایی</span>
								</a>
							</li>
								
							<li class="menu-item" aria-haspopup="true">
								<a target="_blank" href="{{ route('setting.index') }}"
									class="menu-link">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
													fill="#000000" />
												<rect fill="#000000" opacity="0.3"
													transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
													x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">تنظیمات صفحه اصلی</span>
								</a>
							</li>
							@endcan
						</ul>
						<!--end::Menu Nav-->
					</div>
					<!--end::Menu Container-->
				</div>
				<!--end::Aside Menu-->
			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header header-fixed">
					<!--begin::Container-->
					<div class="container-fluid d-flex align-items-stretch justify-content-between">
						<!--begin::Header Menu Wrapper-->
						<div class="header-menu-wrapper header-menu-wrapper-left d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap"
							id="kt_header_menu_wrapper">
							<!--begin::Info-->
							<div class="d-flex align-items-center flex-wrap mr-2">
								<!--begin::Page Title-->
								<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">داشبورد</h5>
								<!--end::Page Title-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Header Menu Wrapper-->
						<!--begin::Topbar-->
						<div class="topbar">
							<!--begin::User-->
							<form class="topbar-item" method="post" action="{{ route('logout') }}">
								@csrf
								<button class="btn btn-transparent-danger font-weight-bold mr-2">خروج</button>
							</form>
							<!--end::User-->
						</div>
						<!--end::Topbar-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Dashboard-->
							@yield('content')
							<!--end::Dashboard-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Entry-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
					<!--begin::Container-->
					<div
						class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
						<!--begin::Copyright-->
						<div class="text-dark order-2 order-md-1">
							<span class="text-muted font-weight-bold mr-2">۱۴۰۰ ©</span>
							<a href="https://medpip.com" target="_blank" class="text-dark-75 text-hover-primary">پازل
								تی‌وی</a>
						</div>
						<!--end::Copyright-->
						<!--begin::Nav-->
						<div class="nav nav-dark">
							<a href="https://medpip.com/" target="_blank" class="nav-link pl-0 pr-5">بازگشت به سایت</a>
							<a href="https://medpip.com/pipaboutus/" target="_blank" class="nav-link pl-0 pr-5">ورود به
								پازل استودیو</a>
						</div>
						<!--end::Nav-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Main-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop">
		<span class="svg-icon">
			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
				height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24" />
					<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
					<path
						d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
						fill="#000000" fill-rule="nonzero" />
				</g>
			</svg>
			<!--end::Svg Icon-->
		</span>
	</div>
	<!--end::Scrolltop-->
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
						"dark": "#D6D6E0"
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
			"font-family": "Sahel"
		};
	</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
	<script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
	<script src="{{ asset('js/scripts.bundle.js') }}"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Scripts(used by this page)-->
	@yield('js')
	<!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
