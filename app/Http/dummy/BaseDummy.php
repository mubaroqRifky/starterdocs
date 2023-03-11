<?php

namespace App\Http\Dummy;

class BaseDummy
{
    protected static $base;

    public static function getData()
    {

        return static::with() ?: static::$base;
    }

    public static function getCollection($count = 3)
    {

        return static::with() ?: array_fill(0, $count, static::$base);
    }

    public static function with()
    {
        return false;
    }
}
