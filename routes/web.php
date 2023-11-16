<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Incomecontroller;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
  //  return view('welcome'); 
});
Route::get('/', [Incomecontroller::class, 'index'])->name('income');
Route::get('/income', [Incomecontroller::class, 'index'])->name('income');
Route::get('/create', [Incomecontroller::class, 'create'])->name('create');
Route::post('/addstud', [Incomecontroller::class, 'store'])->name('addstud');
Route::post('/checkreport', [Incomecontroller::class, 'yearReport'])->name('yearReport');
Route::delete('/delete/{id}', [Incomecontroller::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [Incomecontroller::class, 'edit'])->name('edit');
Route::get('/view/{id}', [Incomecontroller::class, 'show'])->name('show');
Route::patch('/update/{id}', [Incomecontroller::class, 'update'])->name('update');
Route::post('/generate-pdf', [PDFController::class, 'generatePDF']);

