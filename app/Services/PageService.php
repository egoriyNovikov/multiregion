<?php

namespace App\Services;

use App\Models\City;
use Illuminate\Http\Request;

class PageService
{
    public function getCurrentCity()
    {
        $citySlug = session('city');
        return City::where('slug', $citySlug)->first();
    }

    public function setCity(City $city = null)
    {
        if ($city) {
            session(['city' => $city->slug]);
        } else {
            $citySlug = session('city');
            $city = City::where('slug', $citySlug)->first();
        }

        return $city;
    }

    public function getCities()
    {
        return City::all();
    }
}
