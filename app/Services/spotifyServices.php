<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class spotifyServices
{
    protected $client;
    protected $token;

    public function __construct()
    {
        $this->client = new Client();
        $this->token = $this->authenticate();
    }

    public function authenticate()
    {
        $response = $this->client->post('https://accounts.spotify.com/api/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
            ],
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode(env('SPOTIFY_CLIENT_ID') . ':' . env('SPOTIFY_CLIENT_SECRET')),
            ],
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        return $data['access_token'];

    }

    public function searchTrack($query)
    {
        $response = $this->client->get('https://api.spotify.com/v1/search', [
            'query' => [
                'q' => $query,
                'type' => 'track',
            ],
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function getTrack($trackId){
        $response = $this->client->get("https://api.spotify.com/v1/tracks/{$trackId}", [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function getAlbum($albumId) {
       
            $response = $this->client->get("https://api.spotify.com/v1/albums/{$albumId}", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                ],
            ]);
       
        return json_decode($response->getBody()->getContents(), true);
    }

   public function playBackMusic($deviceID) {
    $response = $this->client->put("https://api.spotify.com/v1/me/player/play/{$deviceID}", [
        'headers' => [
            'Authorization' => 'Bearer ' . $this->token,
        ],
        'uris' => ['spotify:track:{$albumId}'],
    ]);
    return json_decode($response->getBody()->getContents(), true);
   }

}