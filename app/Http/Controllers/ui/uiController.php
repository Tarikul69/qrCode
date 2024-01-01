<?php

namespace App\Http\Controllers\ui;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class uiController extends Controller
{
    //
    public function index()
    {
        return view('ui.index');
    }
}
