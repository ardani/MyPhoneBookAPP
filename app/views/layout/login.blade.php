<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="uk-height-1-1">
    <head>
        <title>Login Now</title>
        <link rel="stylesheet" href="{{URL::asset('css/uikit.min.css')}}" />
        <script src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('js/uikit.min.js')}}"></script>
    </head>
<body class="uk-height-1-1">

        <div class="uk-vertical-align uk-text-center uk-height-1-1">
            <div class="uk-vertical-align-middle" style="width: 250px;">

                <img class="uk-margin-bottom" width="140" height="120" src="{{URL::asset('img/phone.png')}}" alt="">
                <form class="uk-panel uk-panel-box uk-form" method="post" action="{{URL::to('/login')}}">
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" type="text" placeholder="email" name="email">
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" type="text" placeholder="Password" name="password">
                    </div>
                    <div class="uk-form-row">
                        <button type="submit" class="uk-width-1-1 uk-button uk-button-primary uk-button-large">Login Now</button>

                    </div>
                    <div class="uk-form-row">
                        @if(Session::has('message'))
                        <div class="uk-alert uk-alert-danger">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                </form>
            </div>
        </div>

    </body>
  </html>
