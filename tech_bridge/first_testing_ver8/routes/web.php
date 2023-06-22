<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/testing', function () {
    return "<h1>Testing</h1>";
});

Route::get('/about', function () {
    $name = "Leo Lame";
    $age = 19;
    $status = "single";

    return view('about', compact("name", "age", "status"));
});

Route::get('profile', [ProfileController::class, "index"]);