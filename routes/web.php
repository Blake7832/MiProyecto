<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('welcome');
});
Route::get('login','login')->name('login')->Middleware('guest');
Route::get('dashborad','dashboard')->middleware('auth'); 


Route::post('login', function(){
    $credentials = request()->only('email','password');
    if (Auth::attempt($credentials)){
        request()->session()->regenerate();
     return redirect('dashboard');
    }else{
     return redirect('login');   
    }

});