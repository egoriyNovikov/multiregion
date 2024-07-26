<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Services\PageService;

class PageController extends Controller
{
    protected $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function index(City $city = null)
    {
        $currentCity = $this->pageService->setCity($city);
        $cities = $this->pageService->getCities();

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
