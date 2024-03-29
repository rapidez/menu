<?php

namespace Rapidez\Menu\ViewComponents;

use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;
use Rapidez\Core\Models\Category;

class MenuComponent extends Component
{
    public function render(): string
    {
        return Cache::rememberForever('menu.'.config('rapidez.store'), function () {
            return view('rapidez::menu.menu', [
                'items' => $this->convertToMenuTree(
                    Category::where('include_in_menu', 1)
                        ->orderBy('path')
                        ->get(),
                    config('rapidez.root_category_id')
                ),
            ])->render();
        });
    }

    protected function convertToMenuTree($items, $parentId)
    {
        return $items->where('parent_id', $parentId)->map(function ($item) use ($items) {
            $item['children'] = $this->convertToMenuTree($items, $item->entity_id);

            return $item;
        })->sortBy('position');
    }
}
