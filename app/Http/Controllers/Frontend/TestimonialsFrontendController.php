<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialsFrontendController extends Controller
{
    //halaman testimonial
    public function index()
    {
        return view('pages.frontend.testimonials.index');
    }
}
