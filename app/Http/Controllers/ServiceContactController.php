<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceContactRequest;
use App\Models\ServiceContact;
use Illuminate\Http\Request;

class ServiceContactController extends Controller
{
    public function store(ServiceContactRequest $request)
    {
        ServiceContact::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'partner'   => $request->partner,
            'position'  => $request->position,
            'content'   => $request->content,
            'status'    => false,
        ]);

        return redirect()->back()->with('success', 'Mesajınız uğurla göndərildi!');
    }
}
