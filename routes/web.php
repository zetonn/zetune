<?php

use App\Http\Controllers\DataMusicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\spotifyController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotifyAuthController;
use App\Models\dataMusic;

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

Route::group(['prefix' => 'user', 'middleware' => ['auth'], 'as' => 'user.'], function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    Route::get('/profile',[HomeController::class, 'showUserProfile'])->name('user.index');
    Route::get('/home/albums',[HomeController::class, 'showAlbum'])->name('home.albums');
    Route::get('/home/artists?ids={id}',[spotifyController::class, 'getArtist'])->name('home.artist');
    //Route::get('/home/artist',[HomeController::class, 'showArtist'])->name('home.artist');
    Route::get('/home/genres',[HomeController::class, 'showGenres'])->name('home.genres');
    Route::get('/home/favorite',[HomeController::class, 'showFavorite'])->name('home.favorite');
    Route::get('/profile/playlist',[HomeController::class, 'showPlaylist'])->name('user.playlist');
    Route::get('/profile/settings',[HomeController::class, 'showSettings'])->name('user.settings');

    Route::get('/dashboard-admin', [DataMusicController::class, 'index'])->name('index.admin');
    Route::get('/dashboard-admin/create', [DataMusicController::class, 'create'])->name('create.data');
    Route::post('/dashboard-admin/create', [DataMusicController::class, 'store'])->name('store.data');

    Route::get('/dashboard-admin/edit/{id}', [DataMusicController::class, 'edit'])->name('edit.data');
    Route::put('/dashboard-admin/update/{id}', [DataMusicController::class, 'update'])->name('update.data');
    Route::delete('/dashboard-admin/delete/{id}', [DataMusicController::class, 'destroy'])->name('delete.data');
});


Route::get('/',[Logincontroller::class,'Login'])->name('login');
Route::post('/login',[Logincontroller::class,'loginPost'])->name('login-proses');
Route::get('/logout',[Logincontroller::class,'logout'])->name('logout');


Route::view('/register',[Registercontroller::class,'Register'])->name('register');
Route::post('/register',[Registercontroller::class,'registerPost'])->name('register-proses');

Route::get('/search', [spotifyController::class, 'search']);
Route::get('/home/{albumId}', [spotifyController::class, 'getAlbum'])->name('album');
Route::get('/track/{trackId}', [spotifyController::class, 'getTrack']);
// Route::get('/play/{trackId}', [SpotifyController::class, 'gatTrack']);
// Route::get('/callback', [SpotifyController::class, 'callback'])->name('callback');
// Route::get('/play', [SpotifyController::class, 'play'])->name('play');
