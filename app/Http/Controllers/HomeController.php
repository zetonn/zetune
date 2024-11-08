<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\dataMusic;


class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function showAlbum() {
        return view('albums');
    }

    public function showUserProfile() {
        return view('userprofile');
    }

    public function showArtist(Request $request) {
        return view('artist');
    }

    public function showGenres() {
        return view('genres');
    }

    public function showFavorite() {
        return view('favorite');
    }

    public function showPlaylist() {
        return view('playlist');
    }

    public function showSettings() {
        return view('settings');
    }
}
