                @extends('layout')

                @section('title', 'Livro')
                @section('content')
                <div class="row">  
                    <br>
                    <h4 id="center"><b>CADASTRO DOS DADOS DO LIVRO</b></h4>
                    <br> 
                    <form method="post" 
                          action="{{route('product.store')}}" 
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-12">              
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">              
                            <div class="form-group">
                                <label for="name">Editora</label>
                                <select id="editora_id" name="editora_id" class="form-control">
                                   @foreach ($editoras as $editora) 
                                       <option value="{{ $editora->id}}">{{ $editora->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">              
                            <div class="form-group">
                                <label for="name">Autor</label>
                                <select id="autor_id" name="autor_id" class="form-control">
                                   @foreach ($autores as $autor) 
                                       <option value="{{ $autor->id}}">{{ $autor->name}}</option>
                                    @endforeach
                                </select>
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