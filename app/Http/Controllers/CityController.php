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
    public function destroy(City $city)
    {
        $city->delete();
        return response()->json(['message' => 'City deleted successfully']);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:cities',
        ]);

        $city = City::create($validated);

        return response()->json(['message' => 'City created successfully', 'city' => $city]);
    }
}
