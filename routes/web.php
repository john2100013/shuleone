<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/support', [PageController::class, 'support'])->name('support');
Route::get('/help', [PageController::class, 'help'])->name('help');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');



// Service pages
Route::prefix('services')->group(function () {
    Route::get('/school-erp-system', [ServiceController::class, 'schoolErp'])->name('services.school-erp');
    Route::get('/coding-classes', [ServiceController::class, 'codingClasses'])->name('services.coding');
    Route::get('/e-learning', [ServiceController::class, 'eLearning'])->name('services.e-learning');
    Route::get('/robotics', [ServiceController::class, 'robotics'])->name('services.robotics');
});


Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
// Authentication routes (if you're using Laravel's built-in auth)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/registration', function () {
    return view('auth.register');
})->name('registration');

// Apply route
Route::get('/apply', function () {
    return view('apply');
})->name('apply');
