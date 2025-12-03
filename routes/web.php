<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/home', function () {
    return view('home');
});
Route::post('/', function (Request $request) {
    $input = $request->input('input');
    $method = $request->input('method');
    $path = $request->input('path');
    return "this is a post method $input";
});
// Route::get('/student', function (Request $request) {
//     $input = $request->input('input');
//     return "this is a post method $input";
// });

Route::get('/student/{id}/{name}', function ($id, $name) {
    return "Hi, $id $name";
});