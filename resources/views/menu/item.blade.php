<li class="{{ config('menu.classes.'.$loop->depth.'.li') }}">
    <a class="{{ config('menu.classes.'.$loop->depth.'.category') }}" href="{{ $item->url }}">
        {{ $item->name }}
    </a>
    @includeWhen($item->children->count(), 'rapidez::menu', ['items' => $item->children])
</li>
