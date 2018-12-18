                @extends('layout')

                @section('title', 'Editoras')
                @section('content')
                <div class="row">
                    <div class="col-md-12">   
                        <br />
                        <h4 id="center"><b>EDITORAS CADASTRADAS ({{$total}})</b></h4>
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
                                        <th id="center">Ações</th>                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($editoras as $editora)
                                    <tr>
                                        <td id="center">{{$editora->id}}</td>
                                        <td title="Nome">{{$editora->name}}</td>
                                        <td id="center">
                                            <a href="{{route('editora.edit', $editora->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('editora.destroy', $editora->id)}}"                                                        
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