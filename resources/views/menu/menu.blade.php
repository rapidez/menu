<ul class="{{ config('menu.classes.'.(isset($loop->depth) ? $loop->depth + 1 : 1).'.ul') }}">
    @foreach ($items as $item)
        @include('rapidez::menu.item')
    @endforeach
</ul>
