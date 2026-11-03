<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shelf', [ShelfController::class, 'index'])->name('shelf.index');
Route::get('/shelf/{user}', [ShelfController::class, 'userShelf'])->name('shelf.user');