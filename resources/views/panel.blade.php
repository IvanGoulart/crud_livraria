<div class="row">
        <div class="col-md-12" id="center">              
            <h1><b>@yield('title')</b></h1>
            <br>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="">Panel/</a></li>                  
                <li><a href="{{route('autor.index')}}">Autor/</a></li>                  
                <li class="active">Alteração/</li>
            </ol>              
            <br>
            <a href="{{route('criarautor')}}" 
                class="btn btn-primary pull-right">
                <i class="fas fa-plus"></i> Autor</a>
        </div>           
    </div>
