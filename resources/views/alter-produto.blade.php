        @extends('layout')

        @section('title', 'Autor')
        @section('content')
        <div class="row">  
            <br>
            <h4 id="center"><b>ALTERAÇÃO DOS DADOS DO PRODUTO</b></h4>
            <br> 
            <form method="post" 
                    action="{{route('gravar', $product->id)}}" 
                    enctype="multipart/form-data">
                {!! method_field('put') !!}
                {{ csrf_field() }}
                <div class="col-md-6">              
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" 
                                class="form-control" 
                                value="{{$product->name or old('name')}}"
                                required>
                    </div>
                </div>
                <div class="col-md-12">                   
                    <button type="reset" class="btn btn-default">
                        Limpar
                    </button>
                    <button type="submit" 
                            class="btn btn-warning" id="black">
                        Alterar
                    </button>
                </div>
            </form>             
        </div>
        @endsection