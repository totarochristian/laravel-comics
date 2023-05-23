<?php

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
    $data = [
        'comicsData' => config('comicsData.comicsData'),
        'menuData' => config('menuData.menuData'),
        'brandsData' => config('menuData.brandsData'),
        'sitesData' => config('menuData.sitesData'),
        'socialsData' => config('menuData.socialsData')
    ];
    return view('home',$data);
})->name("home");
