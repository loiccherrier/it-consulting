<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use Illuminate\Console\View\Components\Alert;

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

Route::get('test', function () {
    return view('test');
});

//Route::get('/search', [PostController::class, 'search']);
Route::controller(PostController::class)->group(function () {
    Route::get('/search', 'search');
    Route::get('/searchbyid', 'searchbyid');
});