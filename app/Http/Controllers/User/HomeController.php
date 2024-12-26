<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data =[
            'title' => 'Home',
            'breadcrumbs' => array('home'=> 'Home'),
            'active' => 'home',
        ];
        return view('user.home.index',$data);
    }
}
