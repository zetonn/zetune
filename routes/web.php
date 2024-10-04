<?php

use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\spotifyController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotifyAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','home')->name('home.index');

Route::view('/profile','userprofile')->name('user.index');

Route::view('/home/albums','albums')->name('home.albums');

Route::view('/home/artist','artist')->name('home.artist');

Route::view('/home/genres','genres')->name('home.genres');

Route::view('/home/favorite','favorite')->name('home.favorite');

Route::view('/profile/playlist','playlist')->name('user.playlist');

Route::view('/profile/settings','settings')->name('user.settings');

Route::view('/login',[Logincontroller::class,'Login'])->name('login');
Route::post('/login',[Logincontroller::class,'loginPost'])->name('login-proses');


Route::view('/register',[Registercontroller::class,'Register'])->name('register');
Route::post('/register',[Registercontroller::class,'registerPost'])->name('register-proses');

Route::get('/search', [spotifyController::class, 'search']);
Route::get('/home/{albumId}', [spotifyController::class, 'getAlbum'])->name('album');
Route::get('/track/{trackId}', [spotifyController::class, 'getTrack']);
// Route::get('/play/{trackId}', [SpotifyController::class, 'gatTrack']);
// Route::get('/callback', [SpotifyController::class, 'callback'])->name('callback');
// Route::get('/play', [SpotifyController::class, 'play'])->name('play');
