<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="{{asset('css/settings.css')}}">

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
            <div class="sidebar-item ">
            <a href="{{route('user.playlist')}}" style="text-decoration:none;color:#ffff;">
                    <i class="sidebar-item-icon fas fa-list"></i>
                    <span class="sidebar-item-text"><i class='bx bxs-playlist' ></i>Playlists</span>
                </a>   
            </div>
            <div class="sidebar-item sidebar-item-active">
            <a href="{{route('user.index')}}" style="text-decoration:none;color:#ffff;">
                <i class="sidebar-item-icon fas fa-cog"></i>
                <span class="sidebar-item-text"><i class='bx bx-cog' ></i>Settings</span>
            </a>
              
            </div>
        </div>

        <div class="settings-container">
        <h1>Setting</h1>
        <div class="setting-item">
            <div class="desk">
                <label for="language">Language</label>
                <span class="description">select language, be restarted this application</span>
            </div>
           
            <select id="language">
                <option>English(US)</option>
            </select>
        </div>

        <div class="setting-item">
            <div class="desk">
            <label for="autoplay">Autoplay</label>
            <span class="description">listen non-stop</span>
            </div>
            
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider"></span>
            </label>
        </div>

        <div class="setting-item">
            <label>Audio Quality</label>
            <div class="audio-options">
                <div class="op-1">
                    <div class="title-1">
                    <span>Streaming Quality</span>
                    </div>
                   <select>
                        <option>High</option>
                    </select>
                </div>
                <div class="op-2">
                    <div class="title-2">
                    <span>Download</span>
                    </div>
                    
                    <select>
                        <option>Low</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="setting-item">
            <label>Social</label>
            <div class="social-options">
                <div>
                    <span>publish new playlist on my profile</span>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>
                <div>
                    <span>start private session</span>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
      
        
        
    </div>
    </div>
</body>
</html>