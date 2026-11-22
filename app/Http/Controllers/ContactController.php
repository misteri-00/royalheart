<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('landing.contact');
    }

    public function submit(Request $request)
    {
        return back()->with('success', 'Pesan Anda telah berhasil dikirim! Tim RoyalHeart akan segera menghubungi Anda.');
    }
}
