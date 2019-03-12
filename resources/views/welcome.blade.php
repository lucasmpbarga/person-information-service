<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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
                align-self: 'center';
                background-color: 'red';
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .routes {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .title {
                font-size: 84px;
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
                margin-bottom: 30px;
            }
            
            .container {
                margin-top: 100;
                float: none;
                margin: 0 auto;
            }

            .vertical-center {
                min-height: 100%;
                min-height: 100vh;
                display: flex;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron vertical-center">
            <div class="container">
                <div class="content">
                    <div class="title m-b-md">
                        Person Information Service
                    </div>
                    <div class="title m-b-md">
                        API Rest
                    </div>
                </div>
                <div class="routes">
                    <ul class="list-group">
                        <li class="list-group-item">Route::get('person/', 'PersonController@index');</li>
                        <li class="list-group-item">Route::post('person/', 'PersonController@create');</li>
                        <li class="list-group-item">Route::get('person/{name}', 'PersonController@show');</li>
                        <li class="list-group-item">Route::put('person/{id}', 'PersonController@update');</li>
                        <li class="list-group-item">Route::delete('person/{id}', 'PersonController@destroy');</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
