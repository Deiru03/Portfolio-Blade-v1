<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

///////////////////// Main Page //////////////////////
Route::get('/e-portfolio', function () {
    return view('e-portfolio.main');
})->name('e-portfolio');

///////////////////// Main Sub Page //////////////////////
Route::get('/intro', function () {
    return view('e-portfolio.introduction');
})->name('e-portfolio.intro');


