<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RPSHAH96.me ') . ' - ' }} @yield('title') </title>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @section('stylesheets')
      <!-- Latest compiled and minified CSS -->
      <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
      <link rel="stylesheet" type="text/css" href="/css/app.css">

      <link rel="stylesheet" type="text/css" href="/css/style.css">
      
    @show

    @section('scripts')
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->

      <script src="/js/app.js"></script>
    @show

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" style="color: #fff;">
                        {{ config('app.name', 'RPSHAH96.me') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::is('post/2') ? "active" : "" }}"><a href="#" style="color: #fff;">Read </a></li>
                        @if (Auth::check())
                            <li class="{{ Request::is('post') ? "active" : "" }}" >
                                <a href="{{ route('post.index') }}" style="color: #fff;">My Blogs</a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff;">New <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="{{ route('post.create') }}">Post</a></li>
                                <li><a href="#">Short News</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Idiom / Shayari</a></li>
                              </ul>
                            </li>
                        @endif
                    </ul>  <!--  End of .navbar-nav   -->

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ Request::is('about') ? "active" : "" }}">
                            <a href="{{ url('/about') }}" style="color: #fff;">About </a>
                        </li>
                        <li class="{{ Request::is('contact') ? "active" : "" }}">
                            <a href="{{ url('/contact') }}" style="color: #fff;">Contact </a>
                        </li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="{{ Request::is('login') ? "active" : "" }}">
                                <a href="{{ url('/login') }}" style="color: #fff;">Login</a>
                            </li>
                            <li class="{{ Request::is('register') ? "active" : "" }}">
                                <a href="{{ url('/register') }}" style="color: #fff;">Register</a>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: #fff;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul> <!-- End of .navbar-right -->
                </div>
            </div>
        </nav>

        @section('flashMessages')
            @include('layouts.flashMessages')
        @show

        @yield('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="well well-sm text-center">
                        CopyRights @ {{ date('Y') }} . All Right Reserved by <a href="http://rpshah96.me"> rpshah96.me</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
