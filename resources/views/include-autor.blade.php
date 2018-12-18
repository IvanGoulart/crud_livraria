                @extends('layout')

                @section('title', 'Autor')
                @section('content')
                <div class="row">  
                    <br>
                    <h4 id="center"><b>CADASTRO DOS DADOS DE AUTORES</b></h4>
                    <br> 
                    <form method="post" 
                          action="{{route('autor.store')}}" 
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>
                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Cadastrar
                            </button>
                        </div>
                    </form>             
                </div>
                @endsection