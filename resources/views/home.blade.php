<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zetune</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <!-- icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
               <img src="{{ asset('img/zetune-logo.png') }}" alt="">
            </div>
        </div>
        <div class="menu">
            <ul>
                <div class="menu-1">
                    <h2>MENU</h2>
                    <li>
                        <a href="#">
                            <span class="nav-item sidebar-item-active">Explore</span>
            
                        </a>
                    </li>
                    <li>
                        <a href="{{route('home.genres')}}">
                            <span class="nav-item">Genres</span>
            
                        </a>
                    </li>
                    <li>
                        <a href="{{route('home.artist')}}">
                            <span class="nav-item">Artist</span>
            
                        </a>
                    </li>
                </div>
                <div class="menu-2">
                    <h2>LIBRARY</h2>
                    <li>
                        <a href="{{route('home.albums')}}">
                            <span class="nav-item">Albums</span>
            
                        </a>
                    </li>
                    <li>
                        <a href="{{route('home.favorite')}}">
                            <span class="nav-item">Favorite</span>
            
                        </a>
                    </li>
            
                </div>
               </ul>
        </div>
    </div>



    <div class="main-content">
            <div class="navbar">
                    <div class="menu-navbar">
                        <a href="#">ALL</a>
                        <a href="#">MUSIC</a>
                        <a href="#">PODCAST</a>
                    </div>
               
                    <form action="{{ url('/search') }}" method="get">
                        <div class="searchbar">
                            <i class='bx bx-search bx-sm' ></i>
                            <input type="search" name="query" class="search-input" placeholder="Type here to search">
                        </div>
                    </form>
                    
                    <div class="menu-right">
                        <div class="menu-navbar">
                            <i class='bx bx-bell bx-sm' ></i>
                            <i class='bx bx-cog bx-sm' ></i>
                        </div>
    
                        <div class="user" >
                            <i class='bx bx-user' ></i>
                            <a href="{{route('user.index')}}">Briantoro</a>
                        </div>
                    </div>
            </div>

            <div class="container">
                
                @if(isset($results['tracks']['items']))
                <div class="search-result">
                <h1>Search Results</h1>
                    <div class="content-result">
                        @foreach($results['tracks']['items'] as $track)
                            <a href="{{ url('/home/' . $track['album']['id']) }}">
                                <div class="album">
                                    <img src="{{ $track['album']['images'][0]['url'] }}" alt="We Cant Be Friends">
                                    <div class="title"> {{ $track['name'] }}</div>
                                    <div class="artist">{{ $track['artists'][0]['name'] }}</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                   
                @else
                    
                        <div class="hero">
                            <p>Trending New Hits</p>
                            <h1>Stay With Me</h1>
                            <div class="artist-song-name">
                                <h3>Larrick Abel</h3>
                                <p>2M Plays</p>
                            </div>
                            <img src="{{asset('img/musicorang-2.png')}}" alt="">
                            <div class="btn-hero">
                                <button>Listen Now</button>
                                <div class="like">
                                    <i class='bx bxs-heart bx-sm'></i>
                                </div>
                            </div>
                        </div>

                        <div class="scroll-container">
                            <div class="header">
                                <h4>Top artist</h4>
                            </div>
                            <div class="scroll-content">
                            <div class="card">
                                            <img src="{{asset('img/pfp-akon.jpeg')}}" alt="Akon">
                                            <div class="title">Akon</div>
                                        </div>
                                        <div class="card">
                                            <img src="{{asset('img/pfp-akon.jpeg')}}" alt="Katy Perry">
                                            <div class="title">Katy Perry</div>
                                        </div>
                                        <div class="card">
                                            <img src="{{asset('img/pfp-akon.jpeg')}}" alt="Bruno Mars">
                                            <div class="title">Bruno Mars</div>
                                        </div>
                                        <div class="card">
                                            <img src="{{asset('img/pfp-akon.jpeg')}}" alt="Rich Brian">
                                            <div class="title">Rich Brian</div>
                                        </div>
                                        <div class="card">
                                            <img src="{{asset('img/pfp-akon.jpeg')}}" alt="Kendrick Lamar">
                                            <div class="title">Kendrick</div>
                                        </div>
                                        <div class="card">
                                            <img src="{{asset('img/pfp-akon.jpeg')}}" alt="Kendrick Lamar">
                                            <div class="title">Kendrick</div>
                                        </div>
                                        <div class="card">
                                            <img src="{{asset('img/pfp-akon.jpeg')}}" alt="Kendrick Lamar">
                                            <div class="title">Kendrick</div>
                                        </div>
                                        <div class="card">
                                            <img src="{{asset('img/pfp-akon.jpeg')}}" alt="Kendrick Lamar">
                                            <div class="title">Kendrick</div>
                                        </div>
                                        <div class="card">
                                            <img src="{{asset('img/pfp-akon.jpeg')}}" alt="Kendrick Lamar">
                                            <div class="title">Kendrick</div>
                                        </div>
                                        <div class="card">
                                            <img src="{{asset('img/pfp-akon.jpeg')}}" alt="Kendrick Lamar">
                                            <div class="title">Kendrick</div>
                                        </div>
                                </div>
                            </div>

                            <div class="genres">
                                <div class="title">
                                    <h4>Genres</h4>
                                </div>
                                <div class="content-genres">

                                    <div class="card-genre">
                                        <p>Rock and Roll</p>
                                    </div>

                                    <div class="card-genre">
                                        <p>Hip Hop</p>
                                    </div>

                                    <div class="card-genre">
                                        <p>Blues</p>
                                    </div>

                                    <div class="card-genre">
                                        <p>Country</p>
                                    </div>

                                    <div class="card-genre">
                                        <p>Jazz</p>
                                    </div>

                                    <div class="card-genre">
                                        <p>Reggae</p>
                                    </div>

                                </div>
                            </div>

                            <div class="top-charts">

                                <div class="title">
                                    <h4>Top charts</h4>
                                    <a href="">See All</a>
                                </div>

                                <div class="container-charts">
                                
                                    <div class="card-chart">
                                        <p>01</p>
                                        <img src="{{asset('img/pfp-akon.jpeg')}}" alt="">
                                        <div class="desc">
                                            <h4>Akon</h4>
                                            <p>Lonely</p>
                                        </div>
                                        <span>3:44</span>
                                        <div class="plus-icon">
                                            <i class='bx bx-plus bx-xs'></i>
                                        </div>
                                    </div>

                                    <div class="card-chart">
                                        <p>02</p>
                                        <img src="{{asset('img/pfp-akon.jpeg')}}" alt="">
                                        <div class="desc">
                                            <h4>Akon</h4>
                                            <p>Lonely</p>
                                        </div>
                                        <span>3:44</span>
                                        <div class="plus-icon">
                                            <i class='bx bx-plus bx-xs'></i>
                                        </div>
                                    </div>

                                    <div class="card-chart">
                                        <p>03</p>
                                        <img src="{{asset('img/pfp-akon.jpeg')}}" alt="">
                                        <div class="desc">
                                            <h4>Akon</h4>
                                            <p>Lonely</p>
                                        </div>
                                        <span>3:44</span>
                                        <div class="plus-icon">
                                            <i class='bx bx-plus bx-xs'></i>
                                        </div>
                                    </div>

                                    <div class="card-chart">
                                        <p>04</p>
                                        <img src="{{asset('img/pfp-akon.jpeg')}}" alt="">
                                        <div class="desc">
                                            <h4>Akon</h4>
                                            <p>Lonely</p>
                                        </div>
                                        <span>3:44</span>
                                        <div class="plus-icon">
                                            <i class='bx bx-plus bx-xs'></i>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="play-music">
                                <div class="header">
                                    <h4>Player</h4>
                                </div>
                                <div class="content-music">
                                        @if(!isset($results) && !isset($album))

                                        <div class="display-music">
                                            <img src="{{ asset('img/no-photo.jpg') }}" alt="">
                                            <div class="song-info">
                                                <p class="song-title">
                                                    No Song Selected
                                                </p>
                                                <p class="artist-name">
                                                    Unknown Artist
                                                </p>
                                            </div>
                                            <div class="progress-container">
                                                <span> 00:00 </span>
                                                <div class="progress-bar">
                                                <input max="100" min="0" type="range" value="0"/>
                                                </div>
                                                <span> 00:00 </span>
                                            </div>
                                        </div>
                                       
                                        @else

                                        <div class="display-music">
                                            <img src="{{ $album['images'][0]['url'] }}" alt="">
                                            <div class="song-info">
                                                <p class="song-title">
                                                    {{$album['name']}}
                                                </p>
                                                <p class="artist-name">
                                                    @foreach($album['artists'] as $artist)
                                                        {{ $artist['name'] }}@if(!$loop->last), @endif
                                                    @endforeach
                                                </p>
                                            </div>
                                            <div class="progress-container">
                                                <span> 4:34 </span>
                                                <div class="progress-bar">
                                                <input max="100" min="0" type="range" value="50"/>
                                                </div>
                                                <span> 2:14 </span>
                                            </div>
                                        </div>
                                      
                                        
                                        @endif
                                    <div class="controls-music">
                                        <div class="controls-1">
                                            <i class='bx bx-repeat'></i>
                                            <i class='bx bx-skip-next'></i>
                                            <i class='bx bx-play bx-md'></i>
                                            <!-- <button id="togglePlay">Toggle Play</button> -->
                                            <i class='bx bx-skip-next'></i>
                                            <i class='bx bx-shuffle' ></i>
                                        </div>
                                        <div class="controls-2">
                                            <i class='bx bx-chevron-up' ></i>
                                            <span>Lyrics</span>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                @endif
            </div>
            <script src="https://sdk.scdn.co/spotify-player.js"></script>
            <script>

                window.onSpotifyWebPlaybackSDKReady = () => {
                    const token = 'BQBA2r9aqBXJdLWLy9IQSFH1fT0bEIKx7bmnpBikLKRjHcDzmd-5PmVgsqzR6IZ1yaR3bVUT6sHTIwW6Ikj4A59o0BdyudG0ntQygV_6cIF80MyY8VkW_tjPo-3svJPAWf9i9k0Rxby1gbC_TJ3xuSyiLnG8EQ3bBZbcWBG0TcNyN4meOT2BSZSc4hJLphfkmQ7E797WKDCcB7XLHcpPCvM';
                    const player = new Spotify.Player({
                        name: 'Web Playback SDK Quick Start Player',
                        getOAuthToken: cb => { cb(token); },
                        volume: 0.5
                    });

                    player.addListener('ready', ({ device_id }) => {
                        console.log('Ready with Device ID', device_id);

                        const trackUri = getTrackUriFromUrl();

                        // Jika trackUri ditemukan, langsung putar track tersebut
                        if (trackUri) {
                            playTrack(device_id, trackUri);
                        } else {
                            console.log('Track URI not found in URL');
                        }
                    });

                    player.addListener('not_ready', ({ device_id }) => {
                        console.log('Device ID has gone offline', device_id);
                    });

                    player.addListener('initialization_error', ({ message }) => {
                        console.error(message);
                    });

                    player.addListener('authentication_error', ({ message }) => {
                        console.error(message);
                    });

                    player.addListener('account_error', ({ message }) => {
                        console.error(message);
                    });

                    player.connect().then(success => {
                        if (success) {
                            console.log('The Web Playback SDK successfully connected to Spotify!');
                        }
                    });

                    document.getElementById('togglePlay').onclick = function() {
                        player.togglePlay();
                    };

                    // Fungsi untuk mengambil track_uri dari URL
                    function urlToArray() {
                        const params = window.location.pathname;
                        const pathArray = params.split('/').filter(part => part);
                        return pathArray;
                    }

                    function getTrackUriFromUrl() {
                        const url = urlToArray();
                        if (url.length > 1) {
                            return url[1];
                        }
                    }

                    // Fungsi untuk memutar lagu setelah mendapatkan device_id
                    function playTrack(device_id, trackUri) {
                        // Pastikan trackUri dalam format yang benar
                        const uri = `spotify:track:${trackUri}`;

                        // Debugging
                        console.log("Device ID:", device_id);
                        console.log("Track URI:", uri);

                        fetch(`https://api.spotify.com/v1/me/player/play?device_id=${device_id}`, {
                            method: 'PUT',
                            body: JSON.stringify({
                                uris: [uri] // Pastikan trackUri dalam format yang benar
                            }),
                            headers: {
                                'Content-Type': 'application/json',
                                'Authorization': `Bearer ${token}` // Pastikan token valid dan memiliki scope yang tepat
                            },
                        }).then(response => {
                            if (response.ok) {
                                console.log('Track is playing');
                            } else {
                                console.error('Failed to play track:', response.statusText);
                                return response.json(); // Dapatkan detail error
                            }
                        }).catch(error => {
                            console.error('Error playing track:', error);
                        });
                    }

                }

            </script>
            <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>