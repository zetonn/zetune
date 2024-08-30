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
               
                    <form>
                        <div class="searchbar">
                            <i class='bx bx-search bx-sm' ></i>
                            <input type="search" class="search-input" placeholder="Type here to search">
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
                        <div class="display-music">
                            <img src="{{asset('img/display.jpg')}}" alt="">
                            <h4>Not Like Us </h4>
                            <p>Kendrick Lamar</p>
                            <div class="time-music">
                                <p>4:34</p>
                                <div class="bar-time">
                                    <div class="bullet"></div>
                                    <div class="bar-time2"></div>
                                </div>
                                <p>2:34</p>
                            </div>
                        </div>
                        <div class="controls-music">
                            <div class="controls-1">
                                <i class='bx bx-repeat'></i>
                                <i class='bx bx-skip-next'></i>
                                <i class='bx bx-play bx-md' ></i>
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


    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>