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
            <a href="{{route('product.create')}}" 
                class="btn btn-primary pull-right">
                <span class="glyphicon glyphicon-plus"></span> Livro</a>
    
        </div>           
    </div>
