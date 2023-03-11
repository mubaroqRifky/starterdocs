<?php

namespace App\Http\Dummy\panenqu;

use App\Http\Dummy\BaseDummy;

class Video extends BaseDummy
{
    protected static $base =
    [
        'thumbnail' => 'https://firebasestorage.googleapis.com/v0/b/catch-of-the-day-a8059.appspot.com/o/thumbnail.png?alt=media&token=33fed0c0-e980-48f0-9fa7-1da650813fca',
        'title' => "Makanan Sehat & Praktis Selama PPKM.",
        'src' => "https://www.youtube.com/embed/tgbNymZ7vqY",
    ];
}
