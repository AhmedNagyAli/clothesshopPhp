<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MYWebsite @yield('title')</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <div class="relative py-4 px-6">
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            
            <a href="/contact">Contact</a>
        </nav>
    </div>
    <div>
        @yield('content')
    </div>
    
</body>
</html>