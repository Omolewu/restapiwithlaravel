<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\subjectController;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// class rpoutes
Route::get('/class', [SclassController::class, 'index'])->name('classes.index');
Route::post('/class/store', [SclassController::class, 'store'])->name('classes.store');
Route::get('/class/{id}', [SclassController::class, 'show'])->name('classes.show');
Route::post('/class/update/{id}', [SclassController::class, 'update'])->name('classes.update');
Route::delete('/class/delete/{id}', [SclassController::class, 'destroy'])->name('classes.destroy');

// Subject routes
Route::get('/subject', [subjectController::class, 'index'])->name('subject.index');
Route::post('/subject/store', [subjectController::class, 'store'])->name('subject.store');
Route::get('/subject/show/{id}', [subjectController::class, 'show'])->name('subject.show');
Route::post('/subject/update/{id}', [subjectController::class, 'update'])->name('subject.update');
Route::delete('/subject/delete/{id}', [subjectController::class, 'destroy'])->name('subject.destroy');

//Section Routes
Route::get('/section', [SectionController::class, 'index'])->name('section.index');
Route::get('/section/store', [SectionController::class, 'store'])->name('section.store');
Route::get('/section/show/{id}', [SectionController::class, 'show'])->name('section.show');
Route::get('/section/update/{id}', [SectionController::class, 'update'])->name('section.update');
Route::get('/section/delete/{id}', [SectionController::class, 'destroy'])->name('section.delete');
