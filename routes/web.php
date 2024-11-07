<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;

Route::get('/', [AppController::class,'home'])->name('home');
Route::get('/about', [AppController::class,'aboutus'])->name('aboutus');
Route::get('/popular', [AppController::class,'popular'])->name('popular');

Route::get('/writer/index', [WriterController::class,'index'])->name('writer.index');
Route::get('/writer/show/{wid}/{cid}', [WriterController::class,'show'])->name('writer.detail');

Route::get('/category/index/{id}', [CategoryController::class,'index'])->name('category.index');
Route::get('/category/detail/{id}/{cds}', [CategoryController::class,'show'])->name('category.detail');

