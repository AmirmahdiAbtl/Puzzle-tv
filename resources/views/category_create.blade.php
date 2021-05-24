
<div class="main-content padding-0 categories">
    <div class="row no-gutters  ">
        <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
            <p class="box__title">دسته بندی ها</p>
            <div class="table__box">
                <table class="table bg-white">
                    <thead role="rowgroup">
                    <tr role="row" class="title-row">
                        <th>شناسه</th>
                        <th>نام دسته بندی</th>
                        <th>نام انگلیسی دسته بندی</th>
                        <th>دسته پدر</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $item)    
                        <tr role="row" class="">
                            <td><a href="">{{$item->id}}</a></td>
                            <td><a href="">{{$item->title}}</a></td>
                            <td>{{$item->slug}}</td>
                            <td>{{ $item->parentCategoryName() }}</td>
                            <td>
                                <a href="{{ route('category.destroy', $item->id) }}" onclick="destroyCategory(event, {{ $item->id }})" class="item-delete mlg-15" title="حذف"> X </a>
                                <a href="{{ route('category.edit',$item->id) }}" class="item-edit " title="ویرایش">Edit</a>
                                <form action="{{ route('category.destroy', $item->id) }}" method="POST" id="destroy{{ $item->id }}">
                                  @csrf
                                  @method('delete')
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{-- {{ $categories->links() }} --}}
            </div>
        </div>
        <div class="col-4 bg-white">
            <p class="box__title">ایجاد دسته بندی جدید</p>
            <form action="{{ route('category.store') }}" method="POST" class="padding-30">
                @if (count($errors)>0)
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                  <input name="title" type="text" placeholder="نام دسته بندی" class="text">
                  <input name="slug" type="text" placeholder="نام انگلیسی دسته بندی" class="text">
                  <p class="box__title margin-bottom-15">انتخاب دسته پدر</p>
                  <select name="sub_category" class="select" name="" id="">
                      <option value="">ندارد</option>
                      @foreach ($categories as $item)
                        @if (!$item->sub_category)    
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endif
                      @endforeach
                  </select>
                  <button class="btn btn-webamooz_net">اضافه کردن</button>
              </form>
        </div>
    </div>
</div>
</div>
<script>
    function destroyCategory(event, id) {
          event.preventDefault();
          document.getElementById('destroy' + id).submit();
        }
</script>