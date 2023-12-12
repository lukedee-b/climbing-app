<?php

use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\ClubController;
// use App\Http\Controllers\RouteController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\ClimberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\RouteController as AdminRouteController;
use App\Http\Controllers\User\RouteController as UserRouteController;

use App\Http\Controllers\Admin\ClimberController as AdminClimberController;
use App\Http\Controllers\User\ClimberController as UserClimberController;

use App\Http\Controllers\Admin\ClubController as AdminClubController;
use App\Http\Controllers\User\ClubController as UserClubController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    // Route::resource('clubs', ClubController::class);
    // Route::resource('routes', RouteController::class);
    // Route::resource('climbers', ClimberController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::resource('/routes', UserRouteController::class)
    ->middleware(['auth', 'role:user,admin'])
    ->names('user.routes')
    ->only(['index', 'show']);

Route::resource('/admin/routes', AdminRouteController::class)->middleware(['auth', 'role:admin'])->names('admin.routes');


Route::resource('/climbers', UserClimberController::class)
    ->middleware(['auth', 'role:user,admin'])
    ->names('user.climbers')
    ->only(['index', 'show']);

Route::resource('/admin/climbers', AdminClimberController::class)->middleware(['auth'])->names('admin.climbers');


Route::resource('/clubs', UserClubController::class)
    ->middleware(['auth', 'role:user,admin'])
    ->names('user.clubs')
    ->only(['index', 'show']);

Route::resource('/admin/clubs', AdminClubController::class)->middleware(['auth'])->names('admin.clubs');

require __DIR__.'/auth.php';
