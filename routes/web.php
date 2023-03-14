<?php

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

Route::get('/',function(){
    $profile=[[
        "name" =>"Aurelia Vieryn",
        "nim" => "2440066626",
        "birth-date" => "24 October 2002",
        "img" => "/images/1.jpg",
        "alt" => "aurel"

    ],
    [
        "name" => "Amanda Gouw",
        "nim" => "2440016874",
        "birth-date" => "1 July 2002",
        "img" => "/images/2.jpg",
        "alt" => "amanda"
    ],
    [
        "name" => "Virgie Cecilia",
        "nim" => "2440043433",
        "birth-date" => "30 August 2002",
        "img" => "/images/3.jpg",
        "alt" => "virgie"
    ]];
    return view('welcome',["data" => $profile]);
});