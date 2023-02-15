<label for="hamburger" class="relative flex flex-col">
    <input type="checkbox" class="absolute opacity-0 inset-0 w-10 h-10 pointer-cursor z-10 peer" id="hamburger">
    <x-heroicon-o-menu class="absolute w-10 h-10 m-1 mt-1 duration-150 peer-checked:rotate-90 peer-checked:opacity-0"/>
    <x-heroicon-o-x class="w-10 h-10 m-1 mt-1 duration-150 opacity-0 peer-checked:rotate-90 peer-checked:opacity-100"/>
    <ul class="{{ config('menu.classes.'.(isset($loop->depth) ? $loop->depth + 1 : 1).'.ul') }} h-0 -translate-x-[100%] opacity-0 peer-checked:h-auto peer-checked:translate-x-0 peer-checked:opacity-100 duration-150">
        @foreach ($items as $item)
            @include('rapidez::menu.item')
        @endforeach
    </ul>
</label>