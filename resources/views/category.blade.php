

    @foreach ($category as $item)
        <div>
            <a href="{{ route('category.single',['slug' => $item->slug]) }}">{{ $item->title }}</a>
        </div>
    @endforeach

