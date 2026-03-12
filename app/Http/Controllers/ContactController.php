<?php

namespace App\Http\Controllers;

use App\Models\Contact;

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

        Contact::Create([
            'name' => $request->fullname,
            'email' => $request->youremail,
            'phone' => $request->yourphone,
            'message' => $request->yourmessage
        ]);

        return back()->with('success', 'Message has been sent!');
    }

    public function list()
    {
        $contacts = Contact::get();
        //echo "<pre>";
        //print_r($contact);
        return view('pages/contact-list', compact('contacts'));
    }
}
