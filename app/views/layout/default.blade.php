<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="uk-height-1-1">
    <head>
        <title>My Phone Book</title>
        <link rel="stylesheet" href="{{URL::asset('css/uikit.min.css')}}" />
        <script src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('js/uikit.min.js')}}"></script>
    </head>
    <body>
    <div class="uk-margin">
    <nav class="uk-navbar">
        <a href="#" class="uk-navbar-brand">My Phone Book App</a>
        <ul class="uk-navbar-nav">
            <li data-uk-dropdown="" class="uk-parent uk-active">
                <a href=""><i class="uk-icon-home"></i> Sample menu</a>
                <div class="uk-dropdown uk-dropdown-navbar" style="">
                    <ul class="uk-nav uk-nav-navbar">
                        <li><a href="#">Menu 1</a></li>
                        <li><a href="#">Menu 2</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="uk-navbar-content uk-navbar-flip  uk-hidden-small">
            @if(Auth::check())
            <div class="uk-button-group">
                <a href="#" class="uk-button uk-button-danger">{{Auth::user()->email}}</a>
                <a href="{{URL::to('/logout')}}" class="uk-button uk-button-success">Logout</a>
            </div
            @else
            <div class="uk-button-group">
                <a href="#" class="uk-button uk-button-danger">Guest</a>
                <a href="login" class="uk-button uk-button-success">Login Here</a>
            </div
            @endif>
        </div>
    </nav>
</div>
        <div class="uk-margin-left">
        @yield('content')
        </div>
    </body>
</html>
