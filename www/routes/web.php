<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdventureController;
use App\Http\Controllers\ModuleController; // Adjust if in a subdirectory

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/module/{moduleId}', [ModuleController::class, 'viewModule'])->name('module.view');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/adventure/create', [AdventureController::class, 'create'])->name('adventure.create');
Route::post('/adventure/store', [AdventureController::class, 'store'])->name('adventure.store');

require __DIR__.'/auth.php';
