<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NOW That's What I Call Animals!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f6993f;
                color: white;
                font-family: 'Bowlby One SC', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .sidebar {
              position: absolute;
              left: 10px;
              top: 18px;
            }

            .content {
                text-align: center;
            }

            .top-title {
                font-size: 84px;
                line-height: 50px;
            }

            .mid-title {
              font-size: 25px;
              line-height: 10px;
            }

            .bottom-title {
              font-size: 52px;
              line-height: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 300px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ route('secret') }}">Secret Page!</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="top-title">NOW</div><br>
                  <div class="mid-title">That's What I Call</div> <br>
                  <div class="bottom-title">Animals!</div>
                <div class="links sidebar flex-center position-ref">
                    <a href="https://en.wikipedia.org/wiki/Lion">Lions</a><br>
                    <a href="https://en.wikipedia.org/wiki/Tiger">Tigers</a><br>
                    <a href="https://en.wikipedia.org/wiki/Bear">Bears</a><br>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Oh My!</a><br>
                </div>
            </div>
        </div>
    </body>
</html>
