<div>
    <form action="{{ route('category.update',['id' => $category->id]) }}" method="POST">
        @csrf
        @method('put')
        @if (count($errors)>0)
                        <div class="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        Category Name : <input value="{{ $category->title }}" type="text" name="title">
        Category Slug : <input value="{{ $category->slug }}" type="text" name="slug">
        Category parent : 
        <select name="sub_category" class="select" name="" id="">
            <option value="@if($category->sub_category) {{$category->sub_category}}  @endif">@if($category->sub_category) {{$category->parentCategoryName()}} @else ندارد @endif</option>
            @foreach ($all as $item)
              @if (!$item->sub_category && $item->id !== $category->id)    
                  <option value="{{ $item->id }}">{{ $item->title }}</option>
              @endif
            @endforeach
        </select>
        <button type="submit">Submit</button>
    </form>
</div>

   