<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $currentCity = session('city');
        return view('index', compact('cities', 'currentCity'));
    }

    public function city(City $city)
    {
        session(['city' => $city->slug]);
        return redirect()->route('index');
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
