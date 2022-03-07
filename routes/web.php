<?php

use App\Http\Controllers\CookieConsentController;
use App\Http\Livewire\Home;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Page;
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

Route::get('cookies-warning/accept', 'CookiesWarningController@accept')->name('cookies-warning.accept');

Route::get('/', [Home::class, '__invoke'])->name('home');
Route::get('/contact', [Contact::class, '__invoke'])->name('contact');
Route::get('/{slug}', [Page::class, '__invoke'])->name('page');
