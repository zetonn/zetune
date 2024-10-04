<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\spotifyServices;
use Illuminate\Support\Facades\Http;

class spotifyController extends Controller
{
    protected $spotifyService;

    public function __construct(spotifyServices $spotifyService)
    {
        $this->spotifyService = $spotifyService;
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        if (empty($query)) {
            return redirect('/')->with('error', 'Search query cannot be empty');
        }

        $results = $this->spotifyService->searchTrack($query);

        return view('home', ['results' => $results]);
    }

    public function getTrack($trackId){
        $track = $this->spotifyService->getTrack($trackId);

        $trackUri = 'spotify:track:' . $track;

        return view('spotify', ['trackUri' => $trackUri]);
    }

    public function getAlbum($albumId)
    {
        $album = $this->spotifyService->getAlbum($albumId);

        return view('home', ['album' => $album]);
    }

}
