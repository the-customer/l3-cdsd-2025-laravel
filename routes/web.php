<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/',[EtudiantController::class,"Index"])->name('etudiants.index');

Route::get('/etudiants', [EtudiantController::class,"Liste"])->name('etudiants.liste');

Route::get('/etudiants/{id}',[EtudiantController::class,"Details"])->name('etudiants.details');


Route::get('/about', [EtudiantController::class,'About'])->name('about');

