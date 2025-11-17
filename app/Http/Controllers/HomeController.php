<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\PanaProduct;
use App\Models\Section;
use App\Models\Team;
use App\Models\ServiceSection;

class HomeController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        $panaProducts = PanaProduct::where('is_active', true)->orderBy('order')->get();
        $teams = Team::all();
        $serviceSections = Section::get();
        return view('index', compact('partners', 'panaProducts', 'teams', 'serviceSections'));
    }
}
