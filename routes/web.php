<?php
use App\Http\Controllers\AppController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/wiki', function () {
  return view('wiki');
});
Auth::routes();
  Route::get('/chat/{id}', [App\Http\Controllers\AppController::class, 'chatView'])->name('chat');

  Route::get('/gappie', [App\Http\Controllers\AppController::class, 'show'])->name('gappie');

  Route::post('/sendMessage', [App\Http\Controllers\AppController::class, 'sendMessage'])->name('sendMessage');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
