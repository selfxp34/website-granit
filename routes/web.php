<?php

use App\Http\Controllers\InboxMessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/index');
});

Route::get('/otzivi', function () {
    return view('otzivi');
});

Route::get('/lic', function () {
    return view('lic');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/granit', function () {
    return view('granit');
});

Route::post('/contact1', [InboxMessageController::class, 'mail']);
Route::get('/contact', [InboxMessageController::class, 'show']);


Auth::routes();

Route::get('auth/login',
    [\App\Http\Controllers\HomeController::class, 'index']
)->middleware('auth');

Route::post('auth/login',
    function (Request $request) {
        $sm = new \App\Http\Controllers\HomeController();
        return $sm->send($request['message']);
    }
)->middleware('auth');
