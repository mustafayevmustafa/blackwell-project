<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\TechnicalConsultation;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
      return view('contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name'    => $validated['name'],
            'email'   => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
        }

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function requestQuote(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'subject'  => 'nullable|string|max:255',
            'message'  => 'required|string',
            'position' => 'nullable|string|max:255',
            'partner'  => 'nullable|string|max:255',
        ]);

        Contact::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'subject'  => $validated['subject'] ?? 'Quote Request',
            'message'  => $validated['message'],
            'position' => $validated['position'] ?? null,
            'partner'  => $validated['partner'] ?? null,
        ]);

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Quote request sent successfully!']);
        }

        return back()->with('success', 'Your quote request has been sent successfully!');
    }

    public function expertContact(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'message'      => 'required|string',
            'company_name' => 'nullable|string|max:255',
            'phone'        => 'nullable|string|max:255',
            'country'      => 'nullable|string|max:255',
        ]);

        Contact::create([
            'name'         => $validated['name'],
            'email'        => $validated['email'],
            'subject'      => 'Expert Contact Request',
            'message'      => $validated['message'],
            'company_name' => $validated['company_name'] ?? null,
            'phone'        => $validated['phone'] ?? null,
            'country'      => $validated['country'] ?? null,
        ]);

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Your request has been sent successfully!']);
        }

        return back()->with('success', 'Your request has been sent successfully!');
    }


    public  function technical(){
        return view('technical');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'companyname' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'consultationdate' => 'required|date',
            'problemdescription' => 'required|string',
        ]);

        TechnicalConsultation::create([
            'title' => $request->fullname,
            'description' => $request->problemdescription,
            'user_id' => auth()->id() ?? null, // optional
            'scheduled_at' => $request->consultationdate,
            'is_completed' => false,
        ]);

        return redirect()->back()->with('success', 'Your request has been submitted. Thank you!');
    }
}
