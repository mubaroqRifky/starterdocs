<?php

namespace App\Http\Dummy\panenqu;

use App\Http\Dummy\BaseDummy;

class NewsUpdate extends BaseDummy
{
    protected static $base = [
        [
            'type' => "instagram",
            'img' => "https://firebasestorage.googleapis.com/v0/b/catch-of-the-day-a8059.appspot.com/o/ig-post.jpeg?alt=media&token=72c1c07b-20d8-4b4f-a011-fdb0678b15fe",
            'meta' => [
                'likes' => "12K",
                'name' => "PanenQu",
                'caption' =>
                "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel a debitis nostrum odit molestias sequi, cum vero",
            ],
        ],
        [
            'type' => "article",
            'img' => "https://firebasestorage.googleapis.com/v0/b/catch-of-the-day-a8059.appspot.com/o/ig-post.jpeg?alt=media&token=72c1c07b-20d8-4b4f-a011-fdb0678b15fe",
            'meta' => [
                'title' => "Lorem Ipsum",
                'content' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.",
                'slug' => "article-slug",
            ],
        ],
        [
            'type' => "instagram",
            'img' => "https://firebasestorage.googleapis.com/v0/b/catch-of-the-day-a8059.appspot.com/o/ig-post.jpeg?alt=media&token=72c1c07b-20d8-4b4f-a011-fdb0678b15fe",
            'meta' => [
                'likes' => "12K",
                'name' => "PanenQu",
                'caption' =>
                "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel a debitis nostrum odit molestias sequi, cum vero",
            ],
        ],
        [
            'type' => "article",
            'img' => "https://firebasestorage.googleapis.com/v0/b/catch-of-the-day-a8059.appspot.com/o/ig-post.jpeg?alt=media&token=72c1c07b-20d8-4b4f-a011-fdb0678b15fe",
            'meta' => [
                'title' => "Lorem Ipsum",
                'content' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.",
                'slug' => "article-slug",
            ],
        ],
        [
            'type' => "instagram",
            'img' => "https://firebasestorage.googleapis.com/v0/b/catch-of-the-day-a8059.appspot.com/o/ig-post.jpeg?alt=media&token=72c1c07b-20d8-4b4f-a011-fdb0678b15fe",
            'meta' => [
                'likes' => "12K",
                'name' => "PanenQu",
                'caption' =>
                "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel a debitis nostrum odit molestias sequi, cum vero",
            ],
        ],
        [
            'type' => "article",
            'img' => "https://firebasestorage.googleapis.com/v0/b/catch-of-the-day-a8059.appspot.com/o/ig-post.jpeg?alt=media&token=72c1c07b-20d8-4b4f-a011-fdb0678b15fe",
            'meta' => [
                'title' => "Lorem Ipsum",
                'content' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.",
                'slug' => "article-slug",
            ],
        ],
    ];

    public static function with()
    {
        $data = [
            'thumbnail' => 'https://firebasestorage.googleapis.com/v0/b/catch-of-the-day-a8059.appspot.com/o/thumbnail.png?alt=media&token=33fed0c0-e980-48f0-9fa7-1da650813fca',
            'src' => 'https://www.youtube.com/embed/tgbNymZ7vqY',
            'detail' => static::$base
        ];

        return $data;
    }
}
