<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\User\LessonViewController;


    Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('lessons', LessonController::class);
});


    Route::middleware(['auth', 'user'])->get('/lessons', [LessonViewController::class, 'index'])->name('user.lessons');


