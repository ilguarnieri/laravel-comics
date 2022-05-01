<?php

use Illuminate\Support\Facades\Route;
use League\CommonMark\Util\Configuration;

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

    $comics = config('comics');
    
    $metaTitle = 'Comics';

    return view('pages.index', [
        'metaTitle' => $metaTitle,
        'comics' => $comics
    ]);

})->name('pages.index');


Route::get('/comic-detail/{id}', function($id){

    $comics = config('comics');

    abort_unless(isset($comics[$id]), 404);
    $comic = $comics[$id];

    return view('pages.show')
    ->with ('comic', $comic);

})->name('pages.show')
->where('$id', '[0-9]+');