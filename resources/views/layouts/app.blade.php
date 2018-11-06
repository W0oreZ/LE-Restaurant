<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LE-Restaurant</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <nav class="navbar has-shadow"  role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="https://bulma.io">
                    <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                    </a>
                
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarcollaps">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    </a>
                </div>
                
                <div id='navbarcollaps' class="navbar-menu m-l-20">
                    <div class="navbar-start">
                        <a class="navbar-item is-tab">
                            Home
                        </a>
                    
                        <a class="navbar-item is-tab">
                            Documentation
                        </a>
                    
                        <div class="navbar-item is-tab is-hoverable">
                            <a class="navbar-link">
                            More
                            </a>
                    
                            <div class="navbar-dropdown">
                            <a class="navbar-item">
                                About
                            </a>
                            <a class="navbar-item">
                                Jobs
                            </a>
                            <a class="navbar-item">
                                Contact
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                Report an issue
                            </a>
                            </div>
                        </div>
                    </div>
                
                    <div class="navbar-end">
                        @if(Auth::guest())
                            <div class="navbar-item">
                            <a href="{{route('register')}}" class="button is-primary">
                                    <strong>Sign up</strong>
                                </a>
                            </div>
                            <div class="navbar-item m-r-10">
                                <a href="{{route('login')}}" class="button is-light">
                                    Log in
                                </a>
                            </div>
                        @else
                            <div class="navbar-item is-tab is-hoverable">
                                <a class="navbar-link">
                                    Account
                                </a>
                        
                                <div class="navbar-dropdown">
                                <a class="navbar-item">
                                    <span class="icon m-r-10"><i class="fa fa-fw fa-user-circle-o"></i></span>
                                    Profile
                                </a>
                                <a href="{{route('manage')}}" class="navbar-item">
                                    <span class="icon m-r-10"><i class="fa fa-fw fa-note"></i></span>
                                    Mannage
                                </a>
                                <a class="navbar-item">
                                    <span class="icon m-r-10"><i class="fa fa-fw fa-bell"></i></span>
                                    Notifications
                                </a>
                                <a class="navbar-item">
                                    <span class="icon m-r-10"><i class="fa fa-fw fa-cog"></i></span>
                                    Settings
                                </a>
                                <hr class="navbar-divider m-t-10">
                                <a href="{{route('logout')}}" class="navbar-item">
                                    <span class="icon m-r-10"><i class="fa fa-fw fa-sign-out"></i></span>
                                    Logout
                                </a>
                                </div>
                            </div>
                        @endif
        
                    </div>
                </div>
            </nav>
    <div id="app">
        @yield('content')
    </div>
    


</body>
</html>
