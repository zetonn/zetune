<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
     <!-- icon -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="{{ asset('img/orangmusic.jpg') }}" alt="">
        </div>
        <div class="right">
            <div class="header">
                <h1>Register</h1>
                <p>Explore And Find Your Favorite Music</p>
            </div>
            <form action="{{route('register-proses')}}" method="post">
                @csrf 
                    <input type="text" placeholder="Enter your name" name="name">
                    <input type="text" placeholder="Enter your email" name="email">
                    <input type="password" placeholder="Enter your password" name="password">
                    <input type="password" placeholder="Confirm your password" name="password">
                    <button type="submit">Sign up</button>
                <div class="opsi">
                    <span>already have an account?<a href="{{route('login')}}">Sign in</a></span>
                </div>
                   
               
            </form>
        </div>
    </div>
</body>
</html>