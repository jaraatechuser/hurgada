<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'message' => ['required','string','max:2000'],
        ]);

        // Here you can dispatch a Job to send email / store message
        // For now, just redirect back with success
        return back()->with('status', 'Thanks! We will get back to you soon.');
    }
}
