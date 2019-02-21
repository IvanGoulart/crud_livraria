<template>
    <div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <input  name="id_autor" type="hidden" v-model="autor.id" class="form-control">
                    <label class="control-label">Nome</label>
                    <input name="nome_autor" type="text" v-model="autor.name" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <button class="btn btn-success">Update</button>
                </div>
            </div>
       
    </div>
</template>
<script>


    export default {
        mounted() {
            let app = this;
            var url = window.location.href;
            var partes = url.split('/');
            var url_id = partes[4]

                    
            app.autorId = url_id;
            axios.get('/localizaautor/' + url_id)
                .then(function (resp) {
                    app.autor = resp.data;
                })
                .catch(function () {
                    alert("Não foi possivel localizar este autor")
                });
        },
        data: function () {
            return {
                autorId: null,
                autor: {
                    name: '',
                   
                }
            }
        },

        methods: {
            salvar:function(e) {
                var app = this;
                var novoAutor = app.autor;
                alert(autorId);
                axios.patch('http://localhost:8000/alterator')
                    .then(function (resp) {
                        app.$router.replace('/');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Não foi possivel gravar o autor");
                    });

            }
        }
    }
</script>
