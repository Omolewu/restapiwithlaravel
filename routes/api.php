<?php

use App\Http\Controllers\Api\SclassController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/class', [SclassController::class, 'index'])->name('classes.index');
Route::post('/class/store', [SclassController::class, 'store'])->name('classes.store');
Route::get('/class/{id}', [SclassController::class, 'show'])->name('classes.show');
Route::post('/class/update/{id}', [SclassController::class, 'update'])->name('classes.update');
Route::delete('/class/delete/{id}', [SclassController::class, 'destroy'])->name('classes.destroy');
