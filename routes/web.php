<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackOffice\{UserController, RoleController, PermissionController};

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// LES ROUTES DU BACKOFFICE
Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('/user', UserController::class)->except('index');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::resource('/role', RoleController::class)->except('index');
    Route::get('/roles', [RoleController::class, 'index'])->name('roles');
    Route::resource('/permission', PermissionController::class)->except('index');
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions');

});

require __DIR__.'/auth.php';
