<?php

namespace App\Services;

use App\Models\City;
use Illuminate\Http\Request;

class CityService
{
    public function setCity($citySlug)
    {
        $city = City::where('slug', $citySlug)->firstOrFail();
        session(['city' => $city->slug]);
        return $city;
    }

    public function destroy(City $city)
    {
        $city->delete();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:cities',
        ]);

        $city = City::create($validated);

        return $city;
    }
}
