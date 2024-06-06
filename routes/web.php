<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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
    return response()->json([
        'message' => "I'M here! CI | CD SUCCESS"
    ]);
    // dd("I'M here! CI | CD SUCCESS");
    // return view('welcome');
});

Route::get('/admin-dashboard',function () {
    return view('backend.layouts.app');
});