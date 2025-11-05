<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello",function(){
    return "Hello World";
});

Route::get("/hello/{name}",function($name){
    return $name . " selamlar.";
});



Route::get("/contact",[PagesController::class,"contact"]);
