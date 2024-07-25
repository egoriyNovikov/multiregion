<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class CityHelper
{
    public static function route($name, $parameters = [])
    {
        $parameters['city'] = session('city');
        return route($name, $parameters);
    }
}
