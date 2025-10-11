<?php

namespace App\Helpers;

class ImageHelper
{
    public static function cpuBrandImage(string $brand): string
    {
        $brand = strtolower($brand);
        $path = public_path("images/{$brand}.png");

        return file_exists($path)
            ? asset("images/{$brand}.png")
            : asset("images/default.png");
    }

    public static function deviceBrandImage(string $brand): string
    {
        $brand = strtolower($brand);
        $path = public_path("images/{$brand}.png");

        return file_exists($path)
            ? asset("images/{$brand}.png")
            : asset("images/default.png");
    }
}



