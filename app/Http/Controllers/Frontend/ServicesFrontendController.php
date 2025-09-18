<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesFrontendController extends Controller
{
    //halaman services
    public function index()
    {
        return view('pages.frontend.services.index');
    }
}
