<?php

use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\ClubController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\ClimberController;
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

    Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');
    Route::post('/clubs', [ClubController::class, 'store'])->name('clubs.store');
    Route::get('/clubs/create', [ClubController::class, 'create'])->name('clubs.create');
    Route::get('/clubs/{club}', [ClubController::class, 'show'])->name('clubs.show');
    Route::get('/clubs/{club}/edit', [ClubController::class, 'edit'])->name('clubs.edit');
    Route::put('/clubs/{club}', [ClubController::class, 'update'])->name('clubs.update');
    Route::delete('/clubs/{club}', [ClubController::class, 'delete'])->name('clubs.destroy');

    Route::get('/climbers', [ClimberController::class, 'index'])->name('climbers.index');
    Route::post('/climbers', [ClimberController::class, 'store'])->name('climbers.store');
    Route::get('/climbers/create', [ClimberController::class, 'create'])->name('climbers.create');
    Route::get('/climbers/{climber}', [ClimberController::class, 'show'])->name('climbers.show');
    Route::get('/climbers/{climber}/edit', [ClimberController::class, 'edit'])->name('climbers.edit');
    Route::put('/climbers/{climber}', [ClimberController::class, 'update'])->name('climbers.update');
    Route::delete('/climbers/{climber}', [ClimberController::class, 'delete'])->name('climbers.destroy');

    Route::get('/routes', [RouteController::class, 'index'])->name('routes.index');
    Route::post('/routes', [RouteController::class, 'store'])->name('routes.store');
    Route::get('/routes/create', [RouteController::class, 'create'])->name('routes.create');
    Route::get('/routes/{route}', [RouteController::class, 'show'])->name('routes.show');
    Route::get('/routes/{route}/edit', [RouteController::class, 'edit'])->name('routes.edit');
    Route::put('/routes/{route}', [RouteController::class, 'update'])->name('routes.update');
    Route::delete('/routes/{route}', [RouteController::class, 'delete'])->name('routes.destroy');
});

require __DIR__.'/auth.php';
