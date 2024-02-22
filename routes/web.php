<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Blog;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexActionSocials;
use App\Http\Controllers\OurActionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiskyImmigrationController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\TourismSolidarityController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\App;
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


Route::get('/localization/{locale}', \App\Http\Controllers\Localization::class)->name('localization');

Route::middleware(Localization::class)
    ->group(function (){
        Route::get('/', HomeController::class)->name('home');
        Route::get('/contact', ContactController::class)->name('contact');
        Route::post('/contact-send', [SendMailController::class, 'sendContactEmail'])->name('contact.send');
        Route::get('/qui-sommes-nous', AboutController::class)->name('about');
        Route::get('/notre-actualite', Blog::class)->name('blog');
        Route::get('/immigration-responsable', RiskyImmigrationController::class)->name('immigrat');
        Route::get('/nos-actions', OurActionController::class)->name('Oactions');
        Route::get('/tousrisne-humanitaire', TourismSolidarityController::class)->name('tourism');
        Route::get('/nos-actions-sociales', IndexActionSocials::class)->name('actions-socials');

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });

        require __DIR__.'/auth.php';
});
