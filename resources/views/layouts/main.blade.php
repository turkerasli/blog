<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>@yield('title', 'Aslı Türker Blog')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        @yield('styles')
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#main-menu" aria-expanded="false" aria-controls="navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand"><img src="{{ asset('images/logo/logo.png') }}" height="400%" style="margin-top: -30px"></a>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li id="menu-about-me"><a href="{{ url('/') }}">About Me</a></li>
                        <li id="menu-notes" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Note1</a></li>
                                <li><a href="#">Note2</a></li>
                                <li><a href="#">Note3</a></li>
                            </ul>
                        </li>
                        <li id="menu-contact"><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer>
            <div class="container">
                <div class="row">
                    <div class="pull-right">
                        <a href="//linkedin.com/in/aslı-türker-556248103"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="mailto:turker.asli@hotmail.com"><i class="fa fa-envelope" aria-hidden="true" style="margin-left: 10px"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        @yield('script')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>