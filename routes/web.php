<?php

use App\Http\Controllers\TipController;
use App\Models\Tip;
use GuzzleHttp\Psr7\Request;
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
    return redirect(route('home'));
});

Auth::routes();

//Rota da HOME (sem login)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Rotas do CRUD com Resource
Route::resource('tip', 'TipController')->middleware('auth');
