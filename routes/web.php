<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\MemberController;
use App\Http\Controllers\RemobController;
use App\Http\Controllers\MobsellController;
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
Route::get('/home', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about-us');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/recycle', function () {
    return view('recycle');
});

Route::get('/logout', function () {
    return view('logout');
});
Route::get('/mobsell', function () {
    return view('mobsell');
});


//Route::get('list',[MemberController::class,'show']);
Route::post('recycle',[RemobController::class,'addData'])->name('remos.addData');
Route::post('mobsell',[MobsellController::class,'addData'])->name('mobsells.addData');
//Route::post('recycle',[RemobController::class,'adData'])->name('remos.adData');
//Route::post('sell', [sellsubmit::class,'create'])->name('sell.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
