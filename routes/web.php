<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
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

//Route::get('/', function () {
//    return view('layouts.admin-templeate');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//user controller
Route::get('/',[UserController::class, 'index'])->name('/');
Route::get('/create',[UserController::class, 'Create'])->name('create_user');
Route::post('/user-create',[UserController::class, 'CreateUser'])->name('create_user');
Route::get('/user-edit/{id}',[UserController::class, 'EditeUser'])->name('uesr_edit');
//Route::post('/user-update/{id}',[UserController::class, 'UpdateUser'])->name('update');
Route::put('/user-update/{id}', [UserController::class, 'UpdateUser'])->name('update');
Route::get('/user-delete/{id}', [UserController::class, 'DeleteUser'])->name('delete_user');

// trip controller
Route::get('/trip',[TripController::class, 'index'])->name('trip');
Route::get('/create',[TripController::class, 'Create'])->name('create_trip');
Route::post('/trip-create',[TripController::class, 'CreateTrip'])->name('CreateTrip');
Route::get('/trip-edit/{id}',[TripController::class, 'EditTrip'])->name('trip_edit');
////Route::post('/user-update/{id}',[TripController::class, 'UpdateUser'])->name('update');
Route::post('/trip-update/{id}', [TripController::class, 'UpdateTrip'])->name('trip_update');
Route::get('/trip-delete/{id}',[TripController::class, 'DeleteTrip'])->name('delete_trip');




require __DIR__.'/auth.php';
