<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsFrontendController extends Controller
{
    //halaman about
    public function index()
    {
        return view('pages.frontend.aboutus.index');
    }
}
