<?php

use App\Http\Controllers\ArticleController;
// use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::get('/about',function(){
    return view('home');
})->name('about');

Route::get('admin/articles',[ArticleController::class,"index"])
->name('articles.index');












// Route::get('/',[EtudiantController::class,"Index"])->name('etudiants.index');

// Route::get('/etudiants', [EtudiantController::class,"Liste"])->name('etudiants.liste');

// Route::get('/etudiants/{id}',[EtudiantController::class,"Details"])->name('etudiants.details');


// Route::get('/about', [EtudiantController::class,'About'])->name('about');

