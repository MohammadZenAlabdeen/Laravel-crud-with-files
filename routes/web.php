<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CardController::class,'index'])->name('Card.index');
Route::get('/create',[CardController::class,'create'])->name('Card.create');
Route::post('/store',[CardController::class,'store'])->name('Card.store');
Route::get('/{Card}/view',[CardController::class,'show'])->name('Card.show');
Route::get('/{Card}/edit',[CardController::class,'edit'])->name('Card.edit');
Route::put('/update/{Card}',[CardController::class,'update'])->name('Card.update');
Route::delete('/delete/{Card}',[CardController::class,'destroy'])->name('Card.destroy');
