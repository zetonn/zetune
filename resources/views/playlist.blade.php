<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="{{asset('css/playlist.css')}}">

     <!-- icon -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <a href="{{route('home.index')}}"><i class='bx bx-chevron-left bx-sm' style="color: #ffff;"></i></a>
            <div class="sidebar-item ">
                <a href="{{route('user.index')}}" style="text-decoration:none;color:#ffff;">
                    <i class="sidebar-item-icon fas fa-user"></i>
                    <span class="sidebar-item-text"><i class='bx bx-user'></i>User profile</span>
                </a>
            </div>
            <div class="sidebar-item sidebar-item-active">
                <i class="sidebar-item-icon fas fa-list"></i>
                <span class="sidebar-item-text"><i class='bx bxs-playlist' ></i>Playlists</span>
            </div>
            <div class="sidebar-item">
            <a href="{{route('user.settings')}}" style="text-decoration:none;color:#ffff;">
                <i class="sidebar-item-icon fas fa-cog"></i>
                <span class="sidebar-item-text"><i class='bx bx-cog' ></i>Settings</span>
            </a>
              
            </div>
        </div>

        <div class="container-2">
        <h1>Your Collection</h1>
        <div class="tabs">
            <div class="tab active">Playlists</div>
            <div class="tab">From You</div>
        </div>
      
        <div class="collection-contain">

        <div class="collection-header">
            <div>Title Playlist</div>
            <div>Added Date</div>
            <div>Play</div>
        </div>

        <div class="collection-item">
            <div class="playlist-info">
                <img src="https://via.placeholder.com/50x50.png?text=1" alt="Song Animals">
                <div>
                    <div class="playlist-title">Song Animals</div>
                    <div class="playlist-artist">Bobi Justin</div>
                </div>
            </div>
            <div>10 Februari 2024</div>
            <div>4 Hours Ago</div>
        </div>
        <div class="collection-item">
            <div class="playlist-info">
                <img src="https://via.placeholder.com/50x50.png?text=2" alt="Why me?">
                <div>
                    <div class="playlist-title">Why me?</div>
                    <div class="playlist-artist">k0s</div>
                </div>
            </div>
            <div>9 Februari 2024</div>
            <div>2 Hours Ago</div>
        </div>
        <div class="collection-item">
            <div class="playlist-info">
                <img src="https://via.placeholder.com/50x50.png?text=3" alt="s has gone">
                <div>
                    <div class="playlist-title">s has gone</div>
                    <div class="playlist-artist">Julian Opel</div>
                </div>
            </div>
            <div>1 Februari 2024</div>
            <div>5 Days Ago</div>
        </div>
        <div class="collection-item">
            <div class="playlist-info">
                <img src="https://via.placeholder.com/50x50.png?text=4" alt="only u">
                <div>
                    <div class="playlist-title">only u</div>
                    <div class="playlist-artist">jope</div>
                </div>
            </div>
            <div>9 April 2024</div>
            <div>6 Days Ago</div>
        </div>
        <div class="collection-item">
            <div class="playlist-info">
                <img src="https://via.placeholder.com/50x50.png?text=5" alt="only u">
                <div>
                    <div class="playlist-title">reckless</div>
                    <div class="playlist-artist">madison</div>
                </div>
            </div>
            <div>6 April 2024</div>
            <div>8 Days Ago</div>
        </div>
        <div class="collection-item">
            <div class="playlist-info">
                <img src="https://via.placeholder.com/50x50.png?text=6" alt="only u">
                <div>
                    <div class="playlist-title">first love</div>
                    <div class="playlist-artist">willy anggawinata</div>
                </div>
            </div>
            <div>3 April 2024</div>
            <div>10 Days Ago</div>
        </div>
        <div class="collection-item">
            <div class="playlist-info">
                <img src="https://via.placeholder.com/50x50.png?text=7" alt="only u">
                <div>
                    <div class="playlist-title">snowman</div>
                    <div class="playlist-artist">sia</div>
                </div>
            </div>
            <div>1 April 2024</div>
            <div>1 Week Ago</div>
        </div>
        </div>
        
    </div>
    </div>
</body>
</html>