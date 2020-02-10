<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
            body{
                background-color: #f4f1f1;
                font-family: 'Lato', sans-serif;
                font-weight: bold;
                font-size = 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                -webkit-text-size-adjust: 100%;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            }
            h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
                color: midnightblue;       
                margin-top: 0;
                margin-bottom: 0.5rem;
                font-weight: 500;
                line-height: 1.2;
            }

            h1, .h1 {
                font-size: 2.5rem;
            }

            h2, .h2 {
                font-size: 2rem;
            }

            h3, .h3 {
                font-size: 1.75rem;
            }

            h4, .h4 {
                font-size: 1.5rem;
            }

            h5, .h5 {
                font-size: 1.25rem;
            }

            h6, .h6 {
                font-size: 1rem;
            }

            p{
                color: #1d1616;
                font-family: 'Lato', sans-serif;
                font-weight: normal;
            }
            b{
                font-size:120%;
            }
            .navbar-brand{
                font-size:20pt;
                border-right: 2pt solid #F7F2F1;
                padding-left: 10pt;
                padding-right: 10pt;

            }
            .mycontainer{
                display:flex;
                position: absolute;
                left:40%;
                
            }
            .mycontainer2{
                display:flex;
                position: absolute;
                left:15%;
                
            }
            .img-border{
                border:2pt solid black;
            }
            .product-display{
                display:flex;
                position: relative;
                flex-direction: column;
                left:15%;
                padding-top:40pt;
                max-height:50%;
                max-width:50%;
            }
            .divider-line{
                border-right: 2pt solid #F7F2F1;
                padding-left: 10pt;
                padding-right: 10pt;
            }
            .row {
                display: flex;
                flex-wrap: wrap;
                margin-bottom: 15pt;
            }

            .row > div[class*='col-'] {
                display: flex;
            }
            #wrapper {
                display: flex;
            }

            #left {
                flex:  65%;
            }

            #right {
                padding-left: 15pt;
                flex: 35%;
            }

        </style>
        <title>{{config('app.name','Supplycart Products Test')}}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>  
        @include('navbar')
        <main class="py-4">     
            <div>
                @include('messages')
                @yield('content')
            </div>
        </main>
</body>
</html>
