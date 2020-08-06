<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!--Css -->

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--JS -->
    <script src="https://kit.fontawesome.com/7829bd51fc.js" crossorigin="anonymous"></script>

    <title>Site</title>
</head>
<body>
<header>
    <div class="wrap">
        <a href="#">Subscribe</a>
        <h1>Site</h1>
        <div class="searchAndSign">
            <div class="search"><a href="#"><i class="fas fa-search"></i></a></div>
            <div class="login"><a href="#">Sign Up</a></div>
        </div>
    </div>
</header>

<x-topmenu></x-topmenu>

<main>
    <div class="content">
        @yield('content')
    </div>
    <div class="aside">
        <x-aside></x-aside>
    </div>
</main>

<footer>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad adipisci aliquid consectetur delectus exercitationem expedita illum inventore iure non officia optio quibusdam repudiandae, sed!
</footer>
</body>
</html>
