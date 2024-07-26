<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Services\CityService;

class CityController extends Controller
{
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function setCity(Request $request)
    {
        $this->cityService->setCity($request->city);
        return redirect()->back();
    }

    public function destroy(City $city)
    {
        $this->cityService->destroy($city);
        return response()->json(['message' => 'City deleted successfully']);
    }

    public function store(Request $request)
    {
        $city = $this->cityService->store($request);
        return response()->json(['message' => 'City created successfully', 'city' => $city]);
    }
}
