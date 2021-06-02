<div class="col-md-2 h-100 col-12 col-md-2 form-group column ">
    <div class="card rounded border-1   border-white">
        <h5 class="card-header"> {{$user->fname}} {{$user->lname}} خوش آمدید</h5>
        <div class="col-12">
            <a href="{{ route('edit_user') }}" class="btn btn-bg-light mt-5 mb-5  w-75 ">
                
                <span class="text-black">ویرایش اطلاعات</span>
            </a>

        </div>
        <div class="col-12">
            <a href="{{ route('dashboard') }}" class="btn btn-bg-light mt-5 mb-5  w-75 ">
               
                <span class="text-black">داشبورد</span>
            </a>
        </div>
        <div class="col-12">
            <a href="{{ route('dashboard') }}" class="btn btn-bg-light mt-5 mb-5 w-75 ">
               
                <span class="text-black w-100">خروج</span>
            </a>
        </div>
        <div class="col-12 w-100">
            <a href="{{ route('dashboard') }}" class="btn btn-bg-light mt-5 mb-5  w-75 ">
              
                <span class="text-black">تغییر رمز عبور</span>
            </a>
        </div>
        <div class="col-12 w-100">
            <a href="{{ route('dashboard') }}" class="btn btn-bg-light mt-5 mb-5  w-75 ">
              
                <span class="text-black">اشتراک</span>
            </a>
        </div>
    </div>
</div>
<style>
    #dashboard>div,
    h5,
    table,
    thead,
    tbody {
        background-color: rgb(38, 38, 38) !important;
        color: white;
    }

    .card,
    h5 {
        background-color: rgb(70, 70, 75) !important;
        color: white;
    }
</style>