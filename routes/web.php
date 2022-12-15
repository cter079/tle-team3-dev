<?php
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/privacy', function () {
  return view('privacy');
});


Auth::routes();
Route::middleware(['auth'])->group(function () {
  Route::get('/', function () {
    return view('home');
});


Route::get('/wiki', function () {
  return view('wiki');
});




Route::get('/deposit', function () { 

  return view('deposit'); 

}); 



Route::get('/withdraw', function () { 

  return view('withdraw'); 

}); 



Route::get('/request', function () { 

  return view('request'); 

}); 
  Route::get('/wiki', function () {
    return view('wiki');
  });
  Route::get('/chat/{id}', [App\Http\Controllers\AppController::class, 'chatView'])->name('chat');
  Route::get('/bankoe', [App\Http\Controllers\AppController::class, 'saldoView'])->name('bankoe');

  Route::get('/gappie', [App\Http\Controllers\AppController::class, 'showChats'])->name('gappie');
  Route::post('/sendMessage', [App\Http\Controllers\AppController::class, 'sendMessage'])->name('sendMessage');
  Route::get('/settings', [App\Http\Controllers\AppController::class, 'settings'])->name('settings');

  
  Route::post('/reset', [App\Http\Controllers\AppController::class, 'reset'])->name('reset');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
