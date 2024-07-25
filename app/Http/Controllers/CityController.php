<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function setCity(Request $request)
    {
        $city = City::where('slug', $request->city)->firstOrFail();
        session(['city' => $city->slug]);
        return redirect()->back();
    }
}
