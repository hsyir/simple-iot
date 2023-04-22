<?php

namespace App\Services;

class Lights
{
    public const CACHE_KEY = "lightsStatus";

    public static function turnOn()
    {
        cache()->put(self::CACHE_KEY, true);
    }

    public static function turnOff()
    {
        cache()->put(self::CACHE_KEY, false);
    }

    public static function getStatus()
    {
        return cache()->get(self::CACHE_KEY, false);
    }
}
