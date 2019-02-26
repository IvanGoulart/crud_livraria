<script>    
    export default {
        mounted() {
            let app = this;
            var url = window.location.href;
            var partes = url.split('/');
            var url_id = partes[4]

                    
            app.livroId = url_id;
            axios.get('/localizalivro/' + url_id)
                .then(function (resp) {
                    app.livro = resp.data;
                })
                .catch(function () {
                    alert("Não foi possivel localizar este livro")
                });
        },
        data: function () {
            return {
                livroId: null,
                livro: {
                    name: '',
                    autor: '',
                    editora: ''
                }
            }
        },

        methods: {
            salvar:function(e) {
                var app = this;
                var novoLivro = app.livro;
                alert(livroId);
                axios.patch('/alterarlivro')
                    .then(function (resp) {
                        app.$router.replace('/');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Não foi possivel gravar o livro");
                    });

            }
        }
    }
</script>
<template>
    <div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <input  name="id_livro" type="hidden" v-model="livro.id" class="form-control">
                <input  name="id_autor" type="text" v-model="livro.autor.id" class="form-control">
                <input  name="id_editora" type="text" v-model="livro.editora.id" class="form-control">

                <label class="control-label">Nome</label>
                <input name="nome_livro" type="text" v-model="livro.name" class="form-control">
                <label class="control-label">Autor</label>
                <input name="nome_autor" type="text" v-model="livro.autor.name" class="form-control">
                <label class="control-label">Editora</label>
                <input name="nome_editora" type="text" v-model="livro.editora.name" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <button class="btn btn-success">Alterar</button>
            </div>
        </div>
    </div>
</template>