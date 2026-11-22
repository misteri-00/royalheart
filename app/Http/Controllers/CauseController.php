<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CauseController extends Controller
{
    public function index()
    {
        return view('landing.causes');
    }

    public function detail()
    {
        return view('landing.cause-detail');
    }
}
