<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'view'])->name('home');

Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('about');

Route::get('/our-process', [PagesController::class, 'ourProcess'])->name('our-process');

Route::get('/services', [PagesController::class, 'services'])->name('services');

Route::get('/pricing', [PagesController::class, 'pricing'])->name('pricing');

Route::get('/terms-conditions', [PagesController::class, 'termsCondition'])->name('terms-conditions');

Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('privacy-policy');

Route::get('/refund-policy', [PagesController::class, 'refundPolicy'])->name('refund-policy');

Route::get('/faq', [PagesController::class, 'faq'])->name('faq');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::post('/contact-submit', [PagesController::class, 'contactSubmit'])->name('contact-submit');

Route::get('/thankyou', [PagesController::class, 'thankyou'])->name('thankyou');

Route::get('/reviews', [PagesController::class, 'reviews'])->name('reviews');

Route::get('/select-package', [PagesController::class, 'selectPackage'])->name('select-package');

Route::get('/payment-thankyou', [PagesController::class, 'paymentThankyou'])->name('payment-thankyou');

Route::post('/stripe-post', [PagesController::class, 'stripePost'])->name('stripe-post');