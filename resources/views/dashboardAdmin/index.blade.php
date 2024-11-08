<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('css/adminDash.css')}}">

    <!-- ramix icon -->
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
    />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
  
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>Zet<span>Min</span></h2>
        </div>
        <div class="search-notification-profile">
            <form action="{{route('user.index.admin')}}" method="get">
                <div class="search">
                    <input type="text" placeholder="Search data..." name="search" value="{{$request->get('search')}}">
                    <button><i class="ri-search-2-line"></i></button>
                </div>
            </form>
            <div class="notification-profile">
                <div class="picon lock">
                    <i class="ri-lock-line"></i>
                </div>
                <div class="picon bell">
                    <i class="ri-notification-2-line"></i>
                </div>
                <div class="picon chat">
                    <i class="ri-wechat-2-line"></i>
                </div>
                <div class="picon profile">
                    <img src="{{asset('img/no-photo.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar-items">
                <li>
                    <a href="" id="active-link"> 
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar-item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon icon-2"><i class="ri-folder-music-line"></i></span>
                        <span class="sidebar-item">Music Data</span>
                    </a>
                </li>
                <ul class="sidebar-bottom-items">
                    <li>
                        <a href="">
                            <span class="icon icon-3"><i class="ri-settings-2-line"></i></span>
                            <span class="sidebar-item">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon icon-4"><i class="ri-logout-box-r-line"></i></span>
                            <span class="sidebar-item">Logout</span>
                        </a>
                    </li>
                </ul>
            </ul>
        </div>
        <div class="main-content">
            <div class="overview">
                <div class="title">
                    <h2 class="section-title">Overview</h2>
                    <form action="{{route('user.index.admin')}}" method="get">
                        <select name="date_filter" id="date" class="dropdown">
                            <option value="today">Today</option>
                            <option value="yesterday">Yesterday</option>
                            <option value="lastweek">Last Week</option>
                            <option value="lastmonth">Last Month</option>
                            <option value="lastyear">Last year</option>
                            <option value="alltime">All Time</option>
                        </select>
                    </form>
                </div>
                <div class="cards">
                    <a href="{{route('user.create.data')}}"><button class="add"><i class="ri-add-line">Add Data</i></button></a>
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Artist</th>
                                    <th>Genre</th>
                                    <th>Music Name</th>
                                    <th>File Music</th>
                                    <th>Date in</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                    <tr>
                                        <td><img src="{{asset('storage/image-music/'.$d->image)}}" alt=""></td>
                                        <td>{{$d->artist}}</td>
                                        <td>{{$d->genre}}</td>
                                        <td>{{$d->music_name}}</td>
                                        <td>{{$d->music_file}}</td>
                                        <td>{{$d->tgl_rilis}}</td>
                                        <td>
                                            <span>
                                                <a href="{{route('user.edit.data',['id' => $d->id])}}"><i class="ri-edit-line edit"></i></a>
                                                <form action="{{route('user.delete.data',['id' => $d->id])}}" method="post">
                                                @csrf
                                                @method('DELETE')     
                                                <button type="submit"><i class="ri-delete-bin-line delete"></i></button>
                                                </form>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    <script>
        let menu = document.querySelector('.menu')
        let sideBar = document.querySelector('.sidebar')
        let mainContent = document.querySelector('.main-content')

        menu.onclick = function(){
            sideBar.classList.toggle('active')
            mainContent.classList.toggle('active')
        }
    </script>
</body>
</html>