<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <title>The Art Gallery</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!--links-->
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
            padding: 10px 10px 10px 10px;
            text-align: left;
        }

        .title {
            font-size: 75px;
            font-family: "Segoe UI Semibold";
        }

        .subtitle{
            font-size: 20px;
            font-family: "Calibri Light";
            color: grey;
        }

        .paragraph{
            font-size: 25px;
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
        strong{
            background-color: darkgrey;
            color: black;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            About the website.
        </div>
        <div class="subtitle">
            Thank you so much for visiting our application which was made using the help of Laravel.
        </div>
        <div class="paragraph">
            There are two properties in the webpage: Gallery and Picture.
            <br><br>
            The Gallery holds the information regarding the artist and a very short information about them.
            <strong> In Gallery </strong>, you can either <strong> Edit, Delete and Retrieve </strong> the records.
            <br><br>
            The Picture holds the data regarding the different type of painting made by artist mentioned in the gallery database.
            <strong> In Pictures </strong>, you can <strong> Create </strong> number of information about your painting and connect it with the gallery
            and select the type of drawing from the list. Lastly you can also add images in context to your information provided.
        </div>
        <br><br>
        <div class="paragraph">
            This application was made by two Web Developer using the help of Laravel.
            <br>
            Manveet Kaur (w0782002)
            <br>
            Simranjit Kaur (w0781503)
        </div>
        <br><br>
    </div>
</div>
</body>
</html>
