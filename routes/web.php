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
});

Route::get('/kontak', function (){
    return view('template.kontak');
});

Route::get('/potensi', function (){
    return view('potensi.potensi');
});

Route::get('/wisata', function (){
    return view('potensi.wisata');
});

Route::get('/pertanian', function (){
    return view('potensi.pertanian');
});

Route::get('/perikanan', function (){
    return view('potensi.perikanan');
});

Route::get('/sejarah', function (){
    return view('template.sejarah');
});

Route::get('/profil', function (){
    return view('profil.profil');
});

Route::get('/geografis', function (){
    return view('profil.geografis');
});

Route::get('/demografis', function (){
    return view('profil.demografis');
});

Route::get('/kajian', function (){
    return view('pembangunan.kajian');
});

Route::get('/masterplan', function (){
    return view('pembangunan.masterplan');
});

Route::get('/detail', function (){
    return view('pembangunan.detail');
});


