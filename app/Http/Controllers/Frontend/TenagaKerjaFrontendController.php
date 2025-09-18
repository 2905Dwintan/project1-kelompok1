<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenagaKerjaFrontendController extends Controller
{
    //halaman tenaga kerja
    public function index()
    {
        return view('pages.frontend.tenaga kerja.index');
    }
}
