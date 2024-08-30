<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">

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
            <div class="sidebar-item sidebar-item-active">
                <i class="sidebar-item-icon fas fa-user"></i>
                <span class="sidebar-item-text"><i class='bx bx-user'></i>User profile</span>
            </div>
            <div class="sidebar-item">
                <a href="{{route('user.playlist')}}" style="text-decoration:none;color:#ffff;">
                    <i class="sidebar-item-icon fas fa-list"></i>
                    <span class="sidebar-item-text"><i class='bx bxs-playlist' ></i>Playlists</span>
                </a>             
            </div>
            <div class="sidebar-item">
            <a href="{{route('user.settings')}}" style="text-decoration:none;color:#ffff;">
                <i class="sidebar-item-icon fas fa-cog"></i>
                <span class="sidebar-item-text"><i class='bx bx-cog' ></i>Settings</span>
            </a>
            </div>
        </div>
        <div class="profile">
            <div class="profile-header">
                <div class="profile-info">
                    <img src="https://via.placeholder.com/60" alt="profile image" class="profile-image">
                    <div class="profile-name">Nabiel<i class='bx bx-edit-alt '></i></div>
                </div>
                <div class="right-profile-header">
                    <div class="profile-stats">
                        <span>40 Following</span>
                        <span>100 Followers</span>
                    </div>
                    <div class="button-options">
                        <button class="profile-button">Edit profile</button>
                        <button class="profile-button">Share profile</button>
                    </div>
                </div>
            </div>
            <div class="profile-section">
                <div class="profile-section-title">Top artists this month</div>
                <div class="profile-section-title">only visible to you</div>
                <div class="profile-section-content">
                    <div class="profile-artist">
                        <img src="https://via.placeholder.com/100" alt="artist image" class="profile-artist-image">
                        <div class="profile-artist-name">Kendrick Lamar</div>
                        <div class="profile-artist-role">Artist</div>
                    </div>
                    <div class="profile-artist">
                        <img src="https://via.placeholder.com/100" alt="artist image" class="profile-artist-image">
                        <div class="profile-artist-name">J.Cole</div>
                        <div class="profile-artist-role">Artist</div>
                    </div>
                    <div class="profile-artist">
                        <img src="https://via.placeholder.com/100" alt="artist image" class="profile-artist-image">
                        <div class="profile-artist-name">The Weeknd</div>
                        <div class="profile-artist-role">Artist</div>
                    </div>
                    <div class="profile-artist">
                        <img src="https://via.placeholder.com/100" alt="artist image" class="profile-artist-image">
                        <div class="profile-artist-name">SZA</div>
                        <div class="profile-artist-role">Artist</div>
                    </div>
                    <div class="profile-artist">
                        <img src="https://via.placeholder.com/100" alt="artist image" class="profile-artist-image">
                        <div class="profile-artist-name">Travis Scott</div>
                        <div class="profile-artist-role">Artist</div>
                    </div>
                    <div class="profile-artist">
                        <img src="https://via.placeholder.com/100" alt="artist image" class="profile-artist-image">
                        <div class="profile-artist-name">Travis Scott</div>
                        <div class="profile-artist-role">Artist</div>
                    </div>
                    <div class="profile-artist">
                        <img src="https://via.placeholder.com/100" alt="artist image" class="profile-artist-image">
                        <div class="profile-artist-name">Travis Scott</div>
                        <div class="profile-artist-role">Artist</div>
                    </div>
                    <div class="profile-artist">
                        <img src="https://via.placeholder.com/100" alt="artist image" class="profile-artist-image">
                        <div class="profile-artist-name">Travis Scott</div>
                        <div class="profile-artist-role">Artist</div>
                    </div>
                    <div class="profile-artist">
                        <img src="https://via.placeholder.com/100" alt="artist image" class="profile-artist-image">
                        <div class="profile-artist-name">Travis Scott</div>
                        <div class="profile-artist-role">Artist</div>
                    </div>
                </div>
            </div>
            <div class="profile-section">
                <div class="profile-section-title">Top tracks this month</div>
                <div class="profile-section-title">only visible to you</div>
                <div class="profile-track-list">
                    <div class="profile-track">
                   
                        <div class="center-profile-track">
                        <div class="profile-track-number">1</div>
                            <div class="profile-track-info">
                                <img src="https://via.placeholder.com/40" alt="track image" class="profile-track-image">
                                <div class="desc-profile-track">
                                    <div class="profile-track-name">MY EYES</div>
                                    <div class="profile-track-artist">Travis Scott</div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="profile-track-duration">4:11</div>
                    </div>
                    <div class="profile-track">
                    
                        <div class="center-profile-track">
                        <div class="profile-track-number">2</div>
                            <div class="profile-track-info">
                                <img src="https://via.placeholder.com/40" alt="track image" class="profile-track-image">
                                <div class="desc-profile-track">
                                    <div class="profile-track-name">No Role Modelz</div>
                                    <div class="profile-track-artist">J.Cole</div>
                                </div>
                             
                            </div>
                           
                        </div>   
                        <div class="profile-track-duration">4:52</div>
                    </div>
                    <div class="profile-track">
                  
                        <div class="center-profile-track">
                        <div class="profile-track-number">3</div>
                            <div class="profile-track-info">
                                <img src="https://via.placeholder.com/40" alt="track image" class="profile-track-image">
                                <div class="desc-profile-track">
                                    <div class="profile-track-name">euphoria</div>
                                    <div class="profile-track-artist">Kendrick lamar</div>
                                </div>
                            </div>                         
                        </div>          
                        <div class="profile-track-duration">6:23</div>       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>