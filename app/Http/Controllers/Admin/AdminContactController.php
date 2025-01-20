<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContacUs;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        $data = [
            'active' => 'Contact',
            'title' => 'Contact Us Messages',
            'messages' => ContacUs::all(),
        ];
        return view('admin.contactus.index', $data);
    }
}
