
@extends('layout.layout')
@section('content')

        
<div class="row">
    <div class="col-md-12">   
        <br />
        <h4 id="center"><b>CRIAR AUTOR</b></h4>
        <br>
        @if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
            data-dismiss="alert"
            aria-label="close">&times;</a>
            {{ session('message') }}
        </div>
        @endif
      
        <div class="content">
            <div id="app">
            <form id="app" action="/criarautor" method="post">
       
            {{ csrf_field() }}
                <criarautor></criarautor>
            </form>    
            </div>
    
        </div>
        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>

    </div>
</div>

@endsection