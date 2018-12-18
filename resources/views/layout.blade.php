<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
       
        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />       

        <link href="{{URL::asset('css/app.css')}}" rel="stylesheet" type="text/css" />       
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="{{URL::asset('js/jquery.min.js')}}">  </script>  
        <script src="{{URL::asset('js/bootstrap.min.js')}}">  </script>  
       
    </head>
    <body>
        @component('menu')
        @endcomponent
        <div id="line-one">
            <div class="container">
            @component('panel')
            @endcomponent
                @yield('content')

            </div>
        </div>
    </body>
</html>