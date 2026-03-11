<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages/contact');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'fullname' => 'required|min:5',
                'youremail' => 'required'
            ],
            [
                'fullname.required' => "Enter Your Name!",
                'fullname.min' => "full name must be minimum 5 characters!",
            ]
        );

        return back()->with('success', 'Message has been sent!');
    }
}
