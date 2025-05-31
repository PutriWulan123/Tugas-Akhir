<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('tampilan.master');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group([
    'prefix' => 'admin'
], function () {
    Route::get("/surat-masuk", [Controllers\Admin\SuratMasukController::class, "index"])
        ->middleware(['auth', 'verified'])
        ->name('surat-masuk');
});


// route admin
// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    
    // Route::get('register', [RegisteredUserController::class, 'create'])
    //     ->name('register');

    // Route::post('register', [RegisteredUserController::class, 'store']);

    // Route::get('login', [AuthenticatedSessionController::class, 'create'])
    //     ->name('login');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/admin', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified', 'role:admin']);
// Route::get('/tamu', function () {
//     return view('tampilan.master');
// });


require __DIR__.'/auth.php';
