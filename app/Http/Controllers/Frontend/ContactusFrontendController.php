<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactusFrontendController extends Controller
{
    //halaman contact us
    public function index()
    {
        return view('pages.frontend.contactus.index');
    }
}
