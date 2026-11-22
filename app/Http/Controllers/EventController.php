<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('landing.events');
    }

    public function detail()
    {
        return view('landing.event-detail');
    }
}
