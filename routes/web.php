<?php

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

Route::get('/', 'StaticPage@home');
Route::get('/fotowoltaika', 'StaticPage@fotowoltaika');
Route::get('/fotowoltaika/kielce', 'StaticPage@fotowoltaikaKielce');
Route::get('/folie-grzewcze', 'StaticPage@folieGrzewcze');
Route::get('/wspolpraca/ThGdb', 'StaticPage@presentation');

