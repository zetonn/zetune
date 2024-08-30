<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zetune</title>
    <link rel="stylesheet" href="{{ asset('css/genres.css') }}">

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
                        <a href="#">
                            <span class="nav-item sidebar-item-active">Genres</span>
            
                        </a>
                    </li>
                    <li>
                        <a href="{{route('home.artist')}}">
                            <span class="nav-item ">Artist</span>
            
                        </a>
                    </li>
                </div>
                <div class="menu-2">
                    <h2>LIBRARY</h2>
                    <li>
                        <a href="{{route('home.albums')}}">
                            <span class="nav-item ">Albums</span>
            
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

            <div class="container-genres">
                <h1>Jelajahi Genremu</h1>
               
                    <a href="#" class="button">
                     <span class="button__text">Rock and Roll</span>
                     <i class='bx bxs-music bx-md btn_icon1'></i> 
                     <i class='bx bx-music  bx-md btn_icon2' ></i>
                     <i class='bx bxs-music bx-md btn_icon3'></i> 
                    <i class='bx bx-music  bx-md btn_icon4' ></i>
                    </a>
                    <a href="#" class="button">
                     <span class="button__text">J-Pop</span>
                     <i class='bx bxs-music bx-md btn_icon1'></i> 
                    <i class='bx bx-music  bx-md btn_icon2' ></i>
                     <i class='bx bxs-music bx-md btn_icon3'></i> 
                    <i class='bx bx-music  bx-md btn_icon4' ></i>
                    </a>
                    <a href="#" class="button">
                     <span class="button__text">Hip-Hop</span>
                     <i class='bx bxs-music bx-md btn_icon1'></i> 
                    <i class='bx bx-music  bx-md btn_icon2' ></i>
                     <i class='bx bxs-music bx-md btn_icon3'></i> 
                    <i class='bx bx-music  bx-md btn_icon4' ></i>
                    </a>
                    <a href="#" class="button">
                     <span class="button__text">Country</span>
                     <i class='bx bxs-music bx-md btn_icon1'></i> 
                    <i class='bx bx-music  bx-md btn_icon2' ></i>
                     <i class='bx bxs-music bx-md btn_icon3'></i> 
                    <i class='bx bx-music  bx-md btn_icon4' ></i>
                    </a>
                    <a href="#" class="button">
                     <span class="button__text">Jazz</span>
                     <i class='bx bxs-music bx-md btn_icon1'></i> 
                    <i class='bx bx-music  bx-md btn_icon2' ></i>
                     <i class='bx bxs-music bx-md btn_icon3'></i> 
                    <i class='bx bx-music  bx-md btn_icon4' ></i>
                    </a>
                    <a href="#" class="button">
                     <span class="button__text">Punk</span>
                     <i class='bx bxs-music bx-md btn_icon1'></i> 
                    <i class='bx bx-music  bx-md btn_icon2' ></i>
                     <i class='bx bxs-music bx-md btn_icon3'></i> 
                    <i class='bx bx-music  bx-md btn_icon4' ></i>
                    </a>
                    <a href="#" class="button">
                     <span class="button__text">Blues</span>
                     <i class='bx bxs-music bx-md btn_icon1'></i> 
                    <i class='bx bx-music  bx-md btn_icon2' ></i>
                     <i class='bx bxs-music bx-md btn_icon3'></i> 
                    <i class='bx bx-music  bx-md btn_icon4' ></i>
                    </a>
                    <a href="#" class="button">
                     <span class="button__text">Indie</span>
                     <i class='bx bxs-music bx-md btn_icon1'></i> 
                    <i class='bx bx-music  bx-md btn_icon2' ></i>
                     <i class='bx bxs-music bx-md btn_icon3'></i> 
                    <i class='bx bx-music  bx-md btn_icon4' ></i>
                    </a>
                    <a href="#" class="button">
                     <span class="button__text">Classical</span>
                     <i class='bx bxs-music bx-md btn_icon1'></i> 
                    <i class='bx bx-music  bx-md btn_icon2' ></i>
                     <i class='bx bxs-music bx-md btn_icon3'></i> 
                    <i class='bx bx-music  bx-md btn_icon4' ></i>
                    </a>
                    <a href="#" class="button">
                     <span class="button__text">K-Pop</span>
                     <i class='bx bxs-music bx-md btn_icon1'></i> 
                    <i class='bx bx-music  bx-md btn_icon2' ></i>
                     <i class='bx bxs-music bx-md btn_icon3'></i> 
                    <i class='bx bx-music  bx-md btn_icon4' ></i>
                    </a>
                    <a href="#" class="button">
                     <span class="button__text">Reggae</span>
                     <i class='bx bxs-music bx-md btn_icon1'></i> 
                    <i class='bx bx-music  bx-md btn_icon2' ></i>
                     <i class='bx bxs-music bx-md btn_icon3'></i> 
                    <i class='bx bx-music  bx-md btn_icon4' ></i>
                    </a>
                    <a href="#" class="button">
                     <span class="button__text">Metal</span>
                     <i class='bx bxs-music bx-md btn_icon1'></i> 
                    <i class='bx bx-music  bx-md btn_icon2' ></i>
                     <i class='bx bxs-music bx-md btn_icon3'></i> 
                    <i class='bx bx-music  bx-md btn_icon4' ></i>
                    </a>

            </div>
  
    </div>

           


    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>