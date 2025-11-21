<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $testimonials = Testimonial::orderBy('id', 'desc')->get();

        return view('about', compact('teams', 'testimonials'));
    }
}
