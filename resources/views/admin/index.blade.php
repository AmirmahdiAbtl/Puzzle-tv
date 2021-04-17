@extends('layouts.admin')

@section('content')
<!--begin::Row-->
<div class="row">
	<div class="col-12">
		<!--begin::Engage Widget 1-->
		<div class="card card-custom card-stretch gutter-b">
			<div class="card-body d-flex p-0">
				<div class="flex-grow-1 p-10 card-rounded bgi-no-repeat d-flex align-items-center bg-info" style="background-position: right bottom;background-size: contain;background-image: url(/images/custom-6.svg);">
					<div class="row">
						<div class="col-12 col-xl-3"></div>
						<div class="col-12 col-xl-8">
							<h4 class="text-success font-weight-bolder">همین حالا محصولی که خریدید رو ثبت کنید!</h4>
							<p class="text-white my-5 font-size-xl font-weight-bold">با ثبت محصول خریداری شده، پیش از گذشت یک ماه از زمان فاکتور خرید، از ۲۰ درصد تخفیف در خرید های بعدی خود برخوردار شوید.</p>
							<a href="#" class="btn btn-success font-weight-bold py-2 px-6">ثبت محصول</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end::Engage Widget 1-->
	</div>
</div>
<!--end::Row-->
<div class="card card-custom p-6">
	<div class="card-body w-75">
		<!--begin::Heading-->
		<h2 class="text-dark mb-8">سامانه ثبت محصول</h2>
		<!--end::Heading-->
		<!--begin::Content-->
		<div class="text-dark-65 line-height-lg mb-8">
			<p class="font-size-h5">خریدار گرامی،</p>
			<p class="font-size-h5">به صفحه ی ثبت کالای مشتریان P.I.P. و P.I.T. خوش آمدید</p>
			<p class="font-size-h5">ضمن تشکر از اعتماد و خرید شما، پیشنهادات ارزنده ای را برای شما مهیا کرده ایم.</p>
			<p class="font-size-h5">شما با ثبت هریک از کالاهای خریداری شده ی خود می توانید از مزایای زیر برخوردار شوید:</p>
			<ul class="font-size-h5">
				<li><strong>اطمینان از اصالت کالای خریداری شده</strong>: با ثبت شماره سریال کالای خود در بخش ثبت محصول، قادر خواهید بود تا تصویر و مشخصات دستگاه خود را مشاهده کرده و از اصل بودن آن مطمئن شوید.</li>
				<li><strong>اطمینان از اصالت کالای خریداری شده</strong>: سهولت در رهگیری کالا و برخورداری از خدمات گارانتی و پس از فروش توسط ثبت شماره سریال دستگاه امکان پذیر خواهد بود.</li>
				<li><strong>کسب امتیاز و دریافت جوایز</strong></li>
			</ul>
			<a class="font-weight-bold btn btn-success" href="#">ثبت محصول</a>
		</div>
		<!--end::Content-->
	</div>
</div>
<!--begin::Accordion-->
<div class="accordion accordion-solid accordion-panel accordion-svg-toggle mt-5" id="accordionExample8">
	<div class="card">
		<div class="card-header" id="FAQ1">
			<div class="card-title collapsed" data-toggle="collapse" data-target="#ColFAQ1">
				<span class="svg-icon svg-icon-primary">
					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
							<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
				<div class="card-label">لیست کالاهای قابل ثبت</div>
			</div>
		</div>
		<div id="ColFAQ1" class="collapse" data-parent="#accordionExample8">
			<div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header" id="FAQ2">
			<div class="card-title collapsed" data-toggle="collapse" data-target="#ColFAQ2">
				<span class="svg-icon svg-icon-primary">
					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
							<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
				<div class="card-label">پرسش‌های متداول</div>
			</div>
		</div>
		<div id="ColFAQ2" class="collapse" data-parent="#accordionExample8">
			<div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
		</div>
	</div>
</div>
<!--end::Accordion-->
@endsection

@section('js')
<script src="{{ asset('js/pages/widgets.js') }}"></script>
@endsection