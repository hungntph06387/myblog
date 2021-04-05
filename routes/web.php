<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/post', [PostController::class, 'create'])->middleware(['login', 'role'])->name(name:'post.create');
Route::post('/post', [PostController::class, 'store'])->name(name:'post.store');
Route::get('/login', function(){
    return view('login');
})->name('login');
