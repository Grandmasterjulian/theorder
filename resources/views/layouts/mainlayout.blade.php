<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Ultra&display=swap" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>


<div class="page">
    <div class="topnav">
        <h1>
            {{ $title }}
        </h1>
        <div class="menuitems">
            <a class="@if($title === 'HOME') active @endif" href="/">Home</a>
            <a class="@if($title === 'MAPS') active @endif" href="/maps">Maps</a>
            <a class="@if($title === 'CONTACT') active @endif" href="/contact">Contact</a>
        </div>

    </div>

        @yield('content')

</div>
</body>
</html>
