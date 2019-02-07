<!doctype html>
<html>
    <head>
        <title>Meus contatos</title>
        
        <meta name="csrf-token" content="{{  csrf_token() }}">
        
        <link rel= "stylesheet" href="{{ asset('css/app.css')}}">
        <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div class="content">
            <div id="app">
            <delete></delete>
            
            </div>
        </div>
    </body>
</html>
