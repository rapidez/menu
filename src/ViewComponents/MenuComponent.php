<?php

namespace Rapidez\Menu\ViewComponents;

use Rapidez\Core\Models\Category;
use Rapidez\Menu\Models\Menu;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class MenuComponent extends Component
{
    public function render(): string
    {
        return Cache::rememberForever('menu.'.config('rapidez.store'), function () {
            return view('menu::menu', [
                'items' => $this->convertToMenuTree(
                    Category::where('include_in_menu', 1)
                        ->orderBy('path')
                        ->get()
                )
            ])->render();
        });
    }

    protected function convertToMenuTree($items, $parentId = 2)
    {
        return $items->where('parent_id', $parentId)->map(function ($item) use ($items) {
            $item['children'] = $this->convertToMenuTree($items, $item->entity_id);
            return $item;
        })->sortBy('position');
    }
}
