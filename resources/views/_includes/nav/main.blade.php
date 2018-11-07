<nav class="navbar has-shadow"  role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
    <a class="navbar-item" href="{{route('home')}}">
        <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>
    
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarcollaps">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>
    
    <div id='navbarcollaps' class="navbar-menu m-l-20">
        <div class="navbar-start" >
            <a class="navbar-item is-tab" href="{{route('home')}}">
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
                    <a class="button is-primary" href="{{route('register')}}">
                        <strong>Sign up</strong>
                    </a>
                </div>
                <div class="navbar-item m-r-10">
                    <a class="button is-light" href="{{route('login')}}">
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

                    <a class="navbar-item">
                        <span class="icon m-r-10"><i class="fa fa-fw fa-bell"></i></span>
                        Notifications
                    </a>

                    <a class="navbar-item" href="{{route('manage.dashboard')}}">
                        <span class="icon m-r-10"><i class="fa fa-fw fa-cog"></i></span>
                        Mannage
                    </a>
                    <hr class="navbar-divider m-t-10">
                    <a class="navbar-item" href="{{route('logout')}}">
                        <span class="icon m-r-10"><i class="fa fa-fw fa-sign-out"></i></span>
                        Logout
                    </a>
                    </div>
                </div>
            @endif

        </div>
    </div>
</nav>