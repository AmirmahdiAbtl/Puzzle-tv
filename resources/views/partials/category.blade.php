@foreach ($categories as $sub_category)
    <option value="{{ $sub_category->title }}">{{ str_repeat('___', $level) }} {{ $sub_category->title }}</option>
    @if (count($sub_category->childrenRecursive) > 0)
        @include('partials.category', ['categories' => $sub_category->childrenRecursive, 'level' => $level+1])
    @endif
@endforeach
