<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
                <h1>Welcome</h1>
                <p>Explore And Find Your Favorite Music</p>
            </div>
            <form action="{{route('login-proses')}}" method="post">
                @csrf 
                    <input type="text" placeholder="Username or email" name="email">
                    @error('email')
                        <small style="color: red;">{{$message}}</small>
                    @enderror
                    <input type="text" placeholder="password" name="password">
                    @error('password')
                        <small style="color: red;">{{$message}}</small>
                    @enderror
                    <span>forgot password?</span>
                    <button type="submit">Sign in</button>
                    <span>or</span>
                <div class="opsi">
                    <div class="opsi-logo">
                        <img src="{{ asset('img/logo-google.png') }}" alt="">
                        <img src="{{ asset('img/logo-facebook.png') }}" alt="">
                    </div>
                    <span>Don't have account?<a href="{{route('register')}}">Sign up</a></span>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if($message = Session::get('failed'))

        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "{{$message}}"
            });
        </script>

    @endif
</body>
</html>