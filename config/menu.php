<?php

return [
    'classes' => [
        1 => [
            'ul'       => 'flex flex-col divide-y md:flex-wrap md:flex-row md:divide-y-0',
            'li'       => 'group hover:bg-gray-200 w-full md:w-auto md:hover:bg-transparent',
            'category' => 'block p-4 text-primary font-bold text-center',
        ],
        2 => [
            'ul'       => 'hidden absolute flex bg-white border p-3 z-10 md:group-hover:flex',
            'li'       => 'px-3',
            'category' => 'block text-primary font-bold py-3',
        ],
        3 => [
            'ul'       => 'text-sm',
            'category' => 'inline-block py-1 hover:text-primary',
        ],
    ],
];
