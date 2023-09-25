<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;


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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [PagesController::class, 'welcome'])->name('welcome');


Route::auto('/pages', PagesController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin/')->name('admin.')->group(function(){{
    Route::get('dashboard', function () {
        return view('admin.layouts.dashboard');
    })->name('dashboard');
}});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('admin/messages', MessageController::class)->only('index','show',
'destroy');

Route::resources([

    'posts' => PostController::class,
    'tags' => TagController::class,
    'users' => UserController::class,

]);




require __DIR__.'/auth.php';
