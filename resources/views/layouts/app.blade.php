<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body @if(Auth::guard('teacher')->check())style="background: #7154bf;"@endif>
    <div class="header">

        @if(!Auth::guard('student')->check() && !Auth::guard('teacher')->check())
            <div class="dropdown" style="float: right; width: 80px;">
                <button class="dropbtn">Login</button>
                <div class="dropdown-content">
                    @if(!Auth::guard('student')->check())<a href="{{ route('student_get_login') }}">Student</a>@endif
                    @if(!Auth::guard('teacher')->check())<a href="{{ route('teacher_get_login') }}">Admin</a>@endif
                </div>
            </div>
        @endif

        @if(Auth::guard('student')->check() || Auth::guard('teacher')->check())
            <div class="dropdown" style="float: right; width: 80px;">
                <button class="dropbtn">Logout</button>
                <div class="dropdown-content">
                    @if(Auth::guard('student')->check())<a href="{{ route('student_get_logout') }}">Student</a>@endif
                    @if(Auth::guard('teacher')->check())<a href="{{ route('teacher_get_logout') }}">Admin</a>@endif
                </div>
            </div>
        @endif

            <div class="dropdown">
                <button class="dropbtn">Student</button>
                <div class="dropdown-content">
                    <a href="#">List Student</a>
                    <a href="#">Add Student</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Subject</button>
                <div class="dropdown-content">
                    <a href="#">List Subject</a>
                    <a href="#">Add Subject</a>
                </div>
            </div>
    </div>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
