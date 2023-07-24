<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

// Route::resource('home', HomeController::class);

Route::get('home', [HomeController::class, 'index'])->name('home.index');

Route::get('home/create', [HomeController::class, 'create'])->name('home.create');

Route::post('home', [HomeController::class, 'store'])->name('home.store');

Route::get('home/{post}', [HomeController::class, 'show'])->name('home.show');

Route::get('home/{post}/edit', [HomeController::class, 'edit'])->name('home.edit');

Route::patch('home/{post}', [HomeController::class, 'update'])->name('home.update');

Route::delete('home/{post}', [HomeController::class, 'destroy'])->name('home.destroy');
