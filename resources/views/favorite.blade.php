<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zetune</title>
    <link rel="stylesheet" href="{{ asset('css/favorite.css') }}">

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
                            <span class="nav-item ">Explore</span>
            
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
                        <a href="#">
                            <span class="nav-item sidebar-item-active">Favorite</span>
            
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

            <div class="playlist-container">
        <div class="playlist-header">
            <img src="https://via.placeholder.com/60x60.png?text=❤️" alt="Playlist Cover">
            <div class="details">
                <h1>Favorite Songs</h1>
                <p>user playlist · 00 songs</p>
            </div>
        </div>
        <div class="controls">
            <button>
            <i class='bx bx-play bx-md' ></i>
            </button>
            <div class="right-btn">
            <i class='bx bx-shuffle bx-sm'></i>
            <i class='bx bx-download bx-sm' ></i>
            </div>
           
        </div>
        <div class="song-list">
            <div class="song-item">
                <img src="https://via.placeholder.com/50x50.png" alt="Album Cover">
                <div class="song-details">
                    <h3>MY EYES</h3>
                    <p>Travis Scott · UTOPIA</p>
                </div>
                <div class="song-duration">4:11</div>
                <i class='bx bx-heart' ></i>
            </div>
            <!-- You can repeat the above song-item block for more songs -->
            <div class="song-item">
                <img src="https://via.placeholder.com/50x50.png" alt="Album Cover">
                <div class="song-details">
                    <h3>MY EYES</h3>
                    <p>Travis Scott · UTOPIA</p>
                </div>
                
                <div class="song-duration">4:11</div>
                <i class='bx bx-heart' ></i>
            </div>
           
        </div>
    </div>
           
            </div>


    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>