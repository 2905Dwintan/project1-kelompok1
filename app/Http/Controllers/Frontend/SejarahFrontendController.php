<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SejarahFrontendController extends Controller
{
    //halaman sejarah
    public function index()
    {
        return view('pages.frontend.sejarah.index');
    }
}
