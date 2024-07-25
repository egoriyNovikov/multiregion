<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class PageController extends Controller
{
    public function index(City $city = null)
    {
        if ($city) {
            session(['city' => $city->slug]);
        } else {
            $citySlug = session('city');
            $city = City::where('slug', $citySlug)->first();
        }

        $cities = City::all();
        $currentCity = $city;

        return view('index', compact('cities', 'currentCity'));
    }

    public function about(City $city)
    {
        return view('about', compact('city'));
    }

    public function news(City $city)
    {
        return view('news', compact('city'));
    }
}
