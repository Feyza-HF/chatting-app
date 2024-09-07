<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Chat;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', Chat::class)->name('home');



