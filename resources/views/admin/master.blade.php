<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/all.min.css">
{{--    <link rel="stylesheet" href="{{asset('/')}}assets/css/all.min.css">--}}
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{route('dashboard')}}" class="nav-link">Dashboard</a></li>
            <li><a href="{{route('add-student')}}" class="nav-link">Add Student</a></li>
            <li><a href="" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a></li>
            <form action="{{route('logout')}}" method="post" id="logoutForm">
                @csrf
            </form>
        </ul>
    </div>
</nav>

@yield('body')

<script src="{{asset('/')}}assets/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}assets/js/bootstrap.bundle.js"></script>
</body>
</html>
