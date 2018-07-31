<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-info navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('Settings') }}</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('acasessions.index')}}">Session/Year</a>
                              <a class="dropdown-item" href="{{route('terms.index')}}">Terms</a>
                              <a class="dropdown-item" href="{{route('acaclasses.index')}}">Class</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{route('subjects.index')}}">Subjects</a>
                            </div>
                          </li>


                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('Admin') }}</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('students.index')}}">Students</a>
                              <a class="dropdown-item" href="{{route('teachers.index')}}">Teachers</a>
                              <a class="dropdown-item" href="{{route('students.index')}}">Search</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{route('home')}}">Overview</a>
                            </div>
                          </li>

                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('Results') }}</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="{{route('students.index')}}">Input Results</a>
                                  <a class="dropdown-item" href="{{route('teachers.index')}}">View Results</a>
                                  <a class="dropdown-item" href="{{route('students.index')}}">Edit Reults</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="{{route('home')}}">Activate Result</a>
                                </div>
                              </li>

                 <li><a class="nav-link" href="{{ url('/home') }}">{{ __('Info') }}</a></li>  
                  <li><a class="nav-link" href="{{ url('/home') }}">{{ __('Help') }}</a></li> 

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>



<style>
    .navbar-light .navbar-brand, .navbar-light .navbar-nav .nav-link  {
       
        color: #fff;
       
        
    }

    .card-header {

        color: #fff;
       
        background-color: #f5f8fa;
    }

</style>