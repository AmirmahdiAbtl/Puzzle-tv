@if(session('success'))
<div class="alert alert-success">
	عملیات با موفقیت انجام شد.
</div>
@endif
@if (session()->has('success-custom'))
    <div class="alert alert-success">
        {{session()->get('success-custom')}}
    </div>
@endif
@if (session()->has('error-custom'))
    <div class="alert alert-danger">
        {{session()->get('error-custom')}}
    </div>
@endif
@if(session('error'))
<div class="alert alert-danger">
	عملیات با شکست مواجه شد.
</div>
@endif
