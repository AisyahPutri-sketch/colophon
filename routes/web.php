<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::get('/shelf', [ShelfController::class, 'index'])->name('shelf.index');
Route::get('/shelf/{user}', [ShelfController::class, 'userShelf'])->name('shelf.user');
=======
>>>>>>> bd14887c356353c2f574ce226e57073d02fc761b
