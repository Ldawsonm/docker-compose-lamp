<?php
use App\Http\Controllers\UserResponseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdventureController;

use App\Http\Controllers\SlideController;
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

    Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('/module/{moduleId}', [ModuleController::class, 'viewModule'])->name('module.view');

//Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//Route::get('/adventure/create', [AdventureController::class, 'create'])->name('adventure.create');
//Route::post('/adventure/store', [AdventureController::class, 'store'])->name('adventure.store');
//Route::get('/adventures', [AdventureController::class, 'index'])->name('adventure.index');
//Route::delete('/adventure/{adventure}', [AdventureController::class, 'destroy'])->name('adventure.destroy');
//Route::get('/adventure/{adventure}/edit', [AdventureController::class, 'edit'])->name('adventures.edit');
//Route::put('/adventure/{adventure}', [AdventureController::class, 'update'])->name('adventures.update');

//Route::resource('slides', SlideController::class);

//Route::get('/adventure/{adventure}/editor', [AdventureController::class, 'editor'])->name('adventure.editor');

// Route to show the form for creating a new slide
//Route::get('/slides/create', [SlideController::class, 'create'])->name('slides.create');

// Route to store the new slide
//Route::post('/slides', [SlideController::class, 'store'])->name('slides.store');

// Route to delete a slide
//Route::delete('/slides/{slide}', [SlideController::class, 'destroy'])->name('slides.destroy');

Route::get('/adventure/{adventure}', 'App\Http\Controllers\UserResponseController@showForm')->middleware(['auth', 'verified'])->name('adventure.show');
Route::post('/form', 'App\Http\Controllers\UserResponseController@submitForm')->middleware(['auth', 'verified'])->name('form.submit');



require __DIR__.'/auth.php';
