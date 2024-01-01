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
}
