<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view('pages.index'); //resources/views/pages/index.blade.php
    }

    public function signup()
    {
    	return view('pages.signup');
    }

    public function login()
    {
    	return view('pages.login');
    }

    public function graphics()
    {
        return view('pages.graphics');
    }

    public function writing()
    {
        return view('pages.writing');
    }

    public function programming()
    {
        return view('pages.programming');
    }

    public function video()
    {
        return view('pages.video');
    }

    public function data()
    {
        return view('pages.data');
    }

    public function marketing()
    {
        return view('pages.marketing');
    }
}
