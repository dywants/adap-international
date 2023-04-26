<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Blog;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurActionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiskyImmigrationController;
use App\Http\Controllers\TourismSolidarityController;
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


Route::get('/', HomeController::class)->name('home');
Route::get('/contact', ContactController::class)->name('contact');
Route::get('/qui-sommes-nous', AboutController::class)->name('about');
Route::get('/notre-actualite', Blog::class)->name('blog');
Route::get('/immigration-responsable', RiskyImmigrationController::class)->name('immigrat');
Route::get('/nos-actions', OurActionController::class)->name('Oactions');
Route::get('/tousrisne-solidarite', TourismSolidarityController::class)->name('tourism');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
