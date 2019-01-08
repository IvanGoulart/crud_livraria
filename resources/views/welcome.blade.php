<!doctype html>
<html>
    <head>
        <title>Meus contatos</title>
        
        <meta name="csrf-token" content="{{  csrf_token() }}">
        
        <link rel= "stylesheet" href="{{ asset('css/app.css')}}">

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div class="content">
            <div id="app">
                <example></example>
            
            </div>
        </div>
        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
