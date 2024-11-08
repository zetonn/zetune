<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zetune</title>
    <link rel="stylesheet" href="{{ asset('css/artist.css') }}">

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
                        <a href="{{route('user.home.index')}}">
                            <span class="nav-item">Explore</span>
            
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.home.genres')}}">
                            <span class="nav-item">Genres</span>
            
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="nav-item sidebar-item-active">Artist</span>
            
                        </a>
                    </li>
                </div>
                <div class="menu-2">
                    <h2>LIBRARY</h2>
                    <li>
                        <a href="{{route('user.home.albums')}}">
                            <span class="nav-item ">Albums</span>
            
                        </a>
                    </li>
                    <li>
                    <a href="{{route('user.home.favorite')}}">
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
                            <a href="{{route('user.user.index')}}">Briantoro</a>
                        </div>
                    </div>
            </div>

            <h1>Artist</h1>
        <div class="container">
        @if(isset($artist) > 0)
                    @foreach($artist as $ar)
                        @if(isset($ar['album']['images'][0]['url']))
                            <div class="album">
                                <img src="{{ $ar['album']['images'][0]['url'] }}" alt="{{ $ar['name'] }}">
                                <div class="title">{{ $ar['name'] }}</div>
                                <div class="artist">{{ $ar['artists'][0]['name'] }}</div>
                            </div>
                        @else
                            <div class="album">
                                <p>Gambar tidak tersedia</p>
                                <div class="title">{{ $ar['name'] }}</div>
                                <div class="artist">{{ $ar['artists'][0]['name'] }}</div>
                            </div>
                        @endif
                    @endforeach
                @else
            <p>Tidak ada artis yang ditemukan.</p>
        @endif
    </div>

           


    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>