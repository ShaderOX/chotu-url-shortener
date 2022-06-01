<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Dashboard\MyURLs;
use App\Http\Controllers\Dashboard\RegisterURL;
use App\Http\Controllers\Redirector;
use App\Mail\ContactUs;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

// Auth
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);

Route::post('logout', [LogoutController::class, 'store'])->name('logout');


// Dashboard
Route::get('/dashboard/my-urls', [MyURLs::class, 'index'])->name('my-urls');

Route::get('/dashboard/register-url', [RegisterURL::class, 'index'])->name('register-url');
Route::post('/dashboard/register-url', [RegisterURL::class, 'store']);
Route::get('/dashboard/register-url/{id}', [RegisterURL::class, 'delete']);
Route::get('/dashboard/query/{suffix}', [RegisterURL::class, 'query']);

// Redirector 
Route::get('/r/{suffix}', [Redirector::class, 'index'])->name('redirector');

// Contact Us
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [ContactUsController::class, 'store']);

Route::get('/plans', function () {
    return view('plans');
})->name('plans');

Route::get('/', function () {


    return view('home');
})->name('home');
