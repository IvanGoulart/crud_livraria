<template>
    <div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <input  name="id_editora" type="hidden" v-model="editora.id" class="form-control">
                    <label class="control-label">Nome</label>
                    <input name="nome_editora" type="text" v-model="editora.name" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <button class="btn btn-success">Alterar</button>
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

                    
            app.editoraId = url_id;
            axios.get('/localizaeditora/' + url_id)
                .then(function (resp) {
                    app.editora = resp.data;
                })
                .catch(function () {
                    alert("Não foi possivel localizar esta editora")
                });
        },
        data: function () {
            return {
                editoraId: null,
                editora: {
                    name: '',
                   
                }
            }
        },

        methods: {
            salvar:function(e) {
                var app = this;
                var novoEditora = app.editora;
                alert(autorId);
                axios.patch('/alterareditora')
                    .then(function (resp) {
                        app.$router.replace('/');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Não foi possivel gravar a editora");
                    });

            }
        }
    }
</script>
