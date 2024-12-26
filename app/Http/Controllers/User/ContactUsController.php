<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'Contact Us',
            'breadcrumbs' => array('home'=> 'Home','contact.us'=> 'Contact Us'),
            'active' => 'contact',
        ];
        return view('user.contact-us.index',$data);
    }
}
