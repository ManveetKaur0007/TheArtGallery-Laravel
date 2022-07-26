<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Art Gallery</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        html, body {
            background-color: black;
            color: whitesmoke;
            font-family: "Times New Roman";
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: center;
            font-size: 18px;
            font-family: "Segoe UI";
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

    </style>
</head>

<<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light"><a class="navbar-brand" href="/">SCWEB</a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="{{ url('galleries') }}">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('pictures') }}">Picture</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ 'about' }}">About Us</a></li>
    </ul>

</nav>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-10 text-left">
            @yield('content')
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    @yield('footer')
</footer>
</body>

</html>
