                @extends('layout')

                @section('title', 'Livros')
                @section('content')
                <div class="row">
                    <div class="col-md-12">   
                        <br />
                        <h4 id="center"><b>LIVROS CADASTRADOS ({{$total}})</b></h4>
                        <br>
                        @if (session('message'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" 
                            data-dismiss="alert"
                            aria-label="close">&times;</a>
                            {{ session('message') }}
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th id="center">Código</th>
                                        <th>Nome</th>
                                        <th>Editora</th>
                                        <th>Autor</th>
                                        <th id="center">Ações</th>                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($produtos as $produto)
                                    <tr>
                                        <td id="center">{{$produto->id}}</td>
                                        <td title="Nome">{{$produto->name}}</td>
                                        <td title="EditoraNome">{{$produto->editora->name}}</td>
                                        <td title="EditoraNome">{{$produto->autor->name}}</td>
                                        <td id="center">
                                            <a href="{{route('product.edit', $produto->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('product.destroy', $produto->id)}}"                                                        
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Excluir" 
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button type="submit" style="background-color: #fff">
                                                    <a><i class="fa fa-trash-o"></i></a>                                                    
                                                </button></form></td>               
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endsection