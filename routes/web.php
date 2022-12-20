<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
//  });

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/detail/{id} ',[HomeController::class,'show']);
// Route::get('/admin',[AdminController::class,'index']);

Route::get('/admin',  [AdminController::class, 'index'] , function () {
    return view('admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::post('/tikets',  [AdminController::class, 'tikets'] , function () {
    return view('tikets');
})->middleware(['auth', 'verified'])->name('tikets');

Route::get('/create',  [AdminController::class, 'create'] , function () {
    return view('create');
})->middleware(['auth', 'verified'])->name('create');

Route::get('/destroy/{id}', [AdminController::class, 'destroy']);
Route::get('/edit/{id}', [AdminController::class, 'edit']);
Route::post('/update/{id}', [AdminController::class, 'update']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
