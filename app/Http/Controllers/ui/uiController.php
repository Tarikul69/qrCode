<?php

namespace App\Http\Controllers\ui;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class uiController extends Controller
{
    //index
    public function index()
    {
        return view('ui.index');
    }

    //contact
    public function contact()
    {
        return view('ui.contact');
    }

    //blog
    public function blog()
    {
        return view('ui.blog');
    }

    //features
    public function features()
    {
        return view('ui.features');
    }
}
