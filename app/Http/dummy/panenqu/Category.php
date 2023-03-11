<?php

namespace App\Http\Dummy\panenqu;

use App\Http\Dummy\BaseDummy;

class Category extends BaseDummy
{
    protected static $base = [
        [
            'type' => 'udang',
            'title' => 'Udang',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.'
        ],
        [
            'type' => 'ikan',
            'title' => 'Ikan',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.'
        ],
        [
            'type' => 'olahan',
            'title' => 'Olahan',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.'
        ],
    ];

    public static function with()
    {
        $data = [
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'produk' => static::$base
        ];

        return $data;
    }
}
