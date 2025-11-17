<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale(); // AZ, EN və s.

        $partners = Partner::all()->map(function ($partner) use ($locale) {

            $title = $partner->title[$locale]
                ?? $partner->title['en']
                ?? '';

            $content = $partner->content[$locale]
                ?? $partner->content['en']
                ?? '';

            $imagePath = $partner->image
                ? asset('storage/' . $partner->image)
                : asset('assets/img/no-image.png');

            return [
                'id'          => $partner->id,
                'name'        => $title,
                'description' => $content,
                'image'       => $imagePath,
                'url'         => $partner->url ?? '#',
            ];
        });

        return view('index', compact('partners'));
    }

    public function api()
    {
        $locale = app()->getLocale();

        $partners = Partner::all()->map(function ($partner) use ($locale) {
            $title = $partner->title[$locale] ?? $partner->title['en'] ?? '';
            $content = $partner->content[$locale] ?? $partner->content['en'] ?? '';
            $imagePath = $partner->image ? asset('storage/' . $partner->image) : asset('assets/img/no-image.png');

            return [
                'id'          => $partner->id,
                'name'        => $title,
                'description' => $content,
                'image'       => $imagePath,
                'url'         => $partner->url ?? '#',
            ];
        });

        return response()->json($partners);
    }
}
