
        <nav class="navbar navbar-inverse navbar-fixed-top">       
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" id="link-white">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" 
                           href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <span id="underline">Cadastros</span> 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">                           
                            <li><a href="product/create">Livros</a></li>                                               
                            <li><a href="{{route('product.index')}}">Autor</a></li>                                               
                            <li><a href="autor/create">Autores</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <ul class="nav navbar-nav" id="link-white">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" 
                           href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-th-list"></span>
                            <span id="underline">Listas</span> 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">                           
                            <li><a href="/product">Livros</a></li>                                               
                            <li><a href="/editora">Editora</a></li>                                               
                            <li><a href="/autor">Autores</a></li>
                        </ul>
                    </li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right" id="link-white">
                    <li><a href="\" 
                           style="text-decoration: none">
                            <span class="glyphicon glyphicon-log-in"></span> 
                            <span id="underline">Sair</span></a></li>  
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
            </div>       
        </nav>    
     