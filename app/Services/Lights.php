<?php

namespace App\Services;

class Lights
{
    public const CACHE_KEY = "lightsStatus";
    
    public static function turnOn()
    {
        cache()->set(self::CACHE_KEY, true);
    }

    public static function turnOff()
    {
        cache()->set(self::CACHE_KEY, false);
    }

    public static function getStatus()
    {
        cache()->get(self::CACHE_KEY, false);
    }
}
