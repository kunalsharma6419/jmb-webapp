<?php

use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Chat\Chat;
use App\Http\Livewire\Chat\Index;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/why-choose-us', [HomeController::class, 'whyus'])->name('whyus');
Route::get('/help-and-faq', [HomeController::class, 'helpandfaq'])->name('helpandfaq');
Route::get('/our-products', [HomeController::class, 'ourproducts'])->name('ourproducts');
Route::get('/contact-us', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/request-quote', [HomeController::class, 'requestquote'])->name('requestquote');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/chat',Index::class)->name('chat.index');
    Route::get('/chat/{query}',Chat::class)->name('chat');

    Route::get('/users',Users::class)->name('users');    
    Route::resource('roles', RolesController::class); 
    Route::resource('permissions', PermissionsController::class); 





});


