<?php

namespace App\Http\Controllers;

use App\Models\Partner;

class HomeController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('index', compact('partners'));
    }
}
