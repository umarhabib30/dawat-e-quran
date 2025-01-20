<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ContacUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Contact Us',
            'breadcrumbs' => array('home' => 'Home', 'contact.us' => 'Contact Us'),
            'active' => 'contact',
        ];
        return view('user.contact-us.index', $data);
    }

    public function store(Request $request)
    {

        $contact = ContacUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }
}
