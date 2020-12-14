<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\content;

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

Route::get('/', [content::class, 'index']);

Route::get('/create', [content::class, 'create']);

Route::post('/firmas', [content::class, 'store']);



/*
Route::resource('/', 'App\Http\Controllers\content');
*/
