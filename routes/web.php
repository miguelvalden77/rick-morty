<?php

use App\Http\Controllers\apiCaller;
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

Route::get("/all-characters/{page?}", [apiCaller::class, "index"] );

Route::get("/character/{id}", [apiCaller::class, "character"] );

Route::get("/locations/{page?}", [apiCaller::class, "locations"]);

Route::get("/episodes/{page?}", [apiCaller::class, "episodes"]);

Route::get("/episode/{id}", [apiCaller::class, "getAnEpisode"]);



