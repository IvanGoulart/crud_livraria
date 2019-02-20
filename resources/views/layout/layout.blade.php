<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->

        <link href="{{URL::asset('css/app.css')}}" rel="stylesheet" type="text/css" />       
         
        <!-- JavaScript -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>      
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