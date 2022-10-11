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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $data = [
        'comics' => config('comics'),
    ];
    return view('products.index', $data);
})->name('comics');

Route::get('/comics/{id}', function ($id) {

    $comics = config('comics');
    if($id < count($comics)) {
        $comic = $comics[$id];
        $data = [
            'comic' => $comic
        ];
    }
    return view('products.show', $data);
})->where('id', '[0-9]+')->name('comic');