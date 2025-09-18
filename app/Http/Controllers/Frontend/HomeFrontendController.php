<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeFrontendController extends Controller
{
    public function index()
    {
        // Memanggil view home frontend
        return view('pages.frontend.home.index');
    }
}
