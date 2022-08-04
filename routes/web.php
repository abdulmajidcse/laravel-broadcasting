<?php

use App\Events\SendMessage;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('messages/send', function () {
        SendMessage::dispatch(uniqid('welcome'));

        return 'message sent.';
    });

    Route::get('messages/get', function () {
        return view('send-message');
    });
});

require __DIR__ . '/auth.php';
