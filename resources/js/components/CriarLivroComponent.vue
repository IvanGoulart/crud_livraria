<template>
    <div>
        <div class="col-md-6">              
            <div class="form-group">
                <label for="name">Titulo</label>
                <input type="text" name="name" 
                    class="form-control" 
                    required>
            </div>
            <div class="form-group">
                <label for="name">Editora</label>
                <input type="text" name="editora" 
                    class="form-control" 
                    required>
            </div>
            <div class="form-group">
                <label for="name">Autor</label>
                <input type="text" name="autor" 
                    class="form-control" 
                    required>
            </div>
        </div>
        <div class="col-md-12">                   
            <button type="reset" class="btn btn-default">
                Limpar
            </button>
            <button type="submit" 
                class="btn btn-success" id="black">
                Cadastrar
            </button>
        </div>       
    </div>
</template>>