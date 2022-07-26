<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <title>The Art Gallery</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Links -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light"><a class="navbar-brand" href="/">SCWEB</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="{{ url('galleries') }}">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('pictures') }}">Picture</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ 'about' }}">About Us</a></li>
        </ul>

    </nav>

    <!-- Styles -->
    <style>
        html, body {
            background-color: black;
            color: whitesmoke;
            font-family: "Times New Roman";
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            font-family: "Segoe UI Semibold";
        }

        .subtitle{
            font-size: 35px;
            font-family: "Calibri Light";
            color: grey;
        }

        .links > a {
            color: lightyellow;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            The Art Gallery
        </div>
        <div class="subtitle">
            Explore your inner artist
        </div><br><br>

        <div class="links">
            Project Made By:
            <a href="https://manveetkaur0007.wixsite.com/index">Manveet Kaur</a>
            <a href="http://file:///F:/DevFolio/index.html">Simranjit Kaur</a>
</a>
        </div>
    </div>
</div>
</body>
</html>
