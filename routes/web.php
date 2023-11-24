<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [homeController::class, 'home'])->name('home');
Route::get('/about', [homeController::class, 'about'])->name('about');
Route::get('/project', [homeController::class, 'project'])->name('project');
Route::get('/contact', [homeController::class, 'contact'])->name('contact');
