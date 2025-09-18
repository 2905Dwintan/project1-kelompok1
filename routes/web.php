<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeFrontendController;
use App\Http\Controllers\Frontend\AboutUsFrontendController;
use App\Http\Controllers\Frontend\ContactusFrontendController;
use App\Http\Controllers\Frontend\GalleryFrontendController;
use App\Http\Controllers\Frontend\MediaSocialFrontendController;
use App\Http\Controllers\Frontend\PartnersFrontendController;
use App\Http\Controllers\Frontend\SejarahFrontendController;
use App\Http\Controllers\Frontend\ServicesFrontendController;
use App\Http\Controllers\Frontend\TenagaKerjaFrontendController;
use App\Http\Controllers\Frontend\TestimonialsFrontendController;

Route::get('/', [HomeFrontendController::class, 'index']);
Route::get('/aboutus', [AboutUsFrontendController::class, 'index']);
Route::get('/services', [ServicesFrontendController::class, 'index']);
Route::get('/tenagakerja', [TenagaKerjaFrontendController::class, 'index']);
Route::get('/gallery', [GalleryFrontendController::class, 'index']);
Route::get('testimonials', [TestimonialsFrontendController::class, 'index']);
Route::get('/sejarah', [SejarahFrontendController::class, 'index']);
Route::get('/partners', [PartnersFrontendController::class, 'index']);
Route::get('/contactus', [ContactusFrontendController::class, 'index']);
Route::get('/mediasocial', [MediaSocialFrontendController::class, 'index']);
