<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/standard'                  , [App\Http\Controllers\dashboardController::class, 'standard'])->name('standard');
Route::get('/grade'                     , [App\Http\Controllers\dashboardController::class, 'grade'])->name('grade');
Route::get('/subject'                   , [App\Http\Controllers\dashboardController::class, 'subject'])->name('subject');
Route::get('/question'                  , [App\Http\Controllers\dashboardController::class, 'subject'])->name('subject');
Route::get('/learningOutCome'           , [App\Http\Controllers\dashboardController::class, 'learningOutCome'])->name('learning.out.come');
Route::get('/addQuestion'               , [App\Http\Controllers\dashboardController::class, 'addQuestion'])->name('add.question');
Route::post('/createQuestion/'         , [App\Http\Controllers\dashboardController::class, 'addQuestionCreate'])->name('add.question');
