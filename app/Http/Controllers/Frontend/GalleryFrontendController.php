<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryFrontendController extends Controller
{
    //halaman gallery
    public function index()
    {
        return view('pages.frontend.gallery.index');
    }
}
