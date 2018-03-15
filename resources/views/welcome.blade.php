<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
         @include ('layouts.nav')
        <div class="flex-center position-ref full-height">
            

            <div class="title m-b-md" style="position: relative; display: flex; justify-content: center; align-items: center; height: 100vh; width: 100vw;" id="particles-js">
                     <div class="content" style="position: absolute; background-color: #FFFFFF; color:#F51414; height: 100%; width:75%; flex; justify-content: center; align-items: center;">
                        <p>Dream</p> 
                        <p style="font-size: 14px; color: black;">
                            @foreach ($games as $game)
                            {{$game->title}}
                            @endforeach
                        </p> 
                    </div>

                </div>
                          
           
            </div>
        </div>
         <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> 
         <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
         <!-- stats.js lib --> 
         <!-- <script src="http://threejs.org/examples/js/libs/stats.min.js"></script> -->
         <script src="{{ asset('js/sidebar.js') }}"></script>
    </body>
</html>
