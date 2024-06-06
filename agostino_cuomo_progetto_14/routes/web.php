<?php

use App\Http\Controllers\ControllerPrincipale;
use Illuminate\Support\Facades\Route;

Route::get('home',[ControllerPrincipale::class, 'home'])->name('home');

Route::get('lista', [ControllerPrincipale::class, 'lista'])->name('lista');

Route::get('form', [ControllerPrincipale::class, 'form'])->name('form');


/* CRUD CONTROLLER------ */

Route::put('', [ControllerPrincipale::class, 'store'])->name('store');