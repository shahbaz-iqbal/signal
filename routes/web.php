<?php

use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index_dashboard', [\App\Http\Controllers\SiteController::class, 'index'])
    ->name('index');

require __DIR__.'/auth.php';

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     Route::get('profile', [\App\Http\Controllers\SiteController::class, 'profile'])
//         ->middleware('password.confirm')
//         ->name('profile');
// });
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/user_chat/{id}', [UserController::class, 'user_chat'])->name('user_chat');
Route::get('/chat', [ChatController::class, 'index'])->name('chat');
Route::post('/send_message', [ChatController::class, 'send_message'])->name('send_message');

Route::get('/group_chat', [GroupController::class, 'index'])->name('group_chat');