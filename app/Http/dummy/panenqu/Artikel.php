<?php

namespace App\Http\Dummy\panenqu;

use App\Http\Dummy\BaseDummy;

class Artikel extends BaseDummy
{
    protected static $base =
    [
        'title' => "Lorem Ipsum",
        'content' =>
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.",
        'img' => "",
        'slug' => "artikel-slug",
    ];
}
