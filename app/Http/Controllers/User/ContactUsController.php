<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ContacUs;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        try {
            $contact = ContacUs::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            return response()->json(['message' => 'Your message has been sent successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to send your message. Please try again.'], 500);
        }
    }
}
