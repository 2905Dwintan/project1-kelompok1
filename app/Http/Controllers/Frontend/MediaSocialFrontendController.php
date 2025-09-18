<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaSocialFrontendController extends Controller
{
    //halaman media social
    public function index()
    {
        return view('pages.frontend.mediasocial.index');
    }
}
