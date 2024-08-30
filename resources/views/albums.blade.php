<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zetune</title>
    <link rel="stylesheet" href="{{ asset('css/albums.css') }}">

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
                        <a href="{{route('home.index')}}">
                            <span class="nav-item">Explore</span>
            
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
                        <a href="#">
                            <span class="nav-item sidebar-item-active">Albums</span>
            
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

            <h1>Popular Album</h1>
    <div class="container">
        <div class="album">
            <img src="{{asset('img/like-that.jpeg')}}" alt="Like That">
            <div class="title">Lagu kece🕶️</div>
            <div class="artist">Album</div>
        </div>
        <div class="album">
            <img src="{{asset('img/beatiful-in-white.jpeg')}}" alt="Beatiful In White">
            <div class="title">Playlist nikahan</div>
            <div class="artist">Album</div>
        </div>
        <div class="album">
            <img src="{{asset('img/manusia.jpeg')}}" alt="Manusia">
            <div class="title">Lagu enak</div>
            <div class="artist">Album</div>
        </div>
        <div class="album">
            <img src="{{asset('img/juicy-luicy.jpeg')}}" alt="Juicy Luicy">
            <div class="title">Gokill</div>
            <div class="artist">Album</div>
        </div>
        <div class="album">
            <img src="{{asset('img/sos.jpeg')}}" alt="SOS">
            <div class="title">SOS</div>
            <div class="artist">Album</div>
        </div>
        <div class="album">
            <img src="{{asset('img/sour.jpeg')}}" alt="Sour">
            <div class="title">Sour</div>
            <div class="artist">Album</div>
        </div>
        <div class="album">
            <img src="{{asset('img/wcbf4.jpeg')}}" alt="We Cant Be Friends">
            <div class="title">We Cant Be Friends</div>
            <div class="artist">Album</div>
        </div>
        <div class="album">
            <img src="{{asset('img/love-on.jpeg')}}" alt="Love On">
            <div class="title">Playlist Romance</div>
            <div class="artist">Album</div>
        </div>
    </div>
    </div>

           


    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>