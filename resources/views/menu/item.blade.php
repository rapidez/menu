<li class="{{ config('rapidez.menu.classes.'.$loop->depth.'.li') }}">
    <a class="{{ config('rapidez.menu.classes.'.$loop->depth.'.category') }}" href="{{ url($item->url) }}">
        {{ $item->name }}
    </a>
    @includeWhen($item->children->count(), 'rapidez::menu.menu', ['items' => $item->children])
</li>
