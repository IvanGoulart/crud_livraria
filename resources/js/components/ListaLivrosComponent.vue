<script>
    export default {
        props: ['livros'],

        data () {
            return {
                list: [],
                fisrtName: '',
            }
        },
 
           computed: {
               fullName() {
                   return this.list = JSON.parse(this.livros).filter((livro)=>{
                        return livro.name.match(this.fisrtName)
                   })
               }
           },
        methods: {
            sortArrays(list) {
                    return _.orderBy(list, 'name', 'desc');
                },

            deleteEntry(id, index) {
                if (confirm("Tem certeza que deseja deletar o registro?")) {
                    var app = this;
                    axios.delete('/deletarautor/'+ id )
                    .then(function (resp) {
                        app.list.splice(index, 1);
                        location.reload(true);
                    })
                    .catch(function (resp) {
                        alert("Não pode ser deletado");
                    });
                }
            }
        },

        mounted () {
            this.list = JSON.parse(this.livros)
        },
    };

</script>
<template>
    <div>
        <a :href="/criarautor/" class="btn btn-primary pull-right"><i class="fas fa-plus"></i> Autor</a>
        <br><br><br>
        <div class="container">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Pesquisar nome do livro" v-model="fisrtName">
                </div>
                <div class="alert alert-info">
                {{ fisrtName }}
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Editora</th>
                        <th>Autor</th>
                        <th>Ações</th>                
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(livro, index) in fullName" v-bind:key="index" >
                        <td>{{ livro.id }}</td>
                        <td>{{ livro.name }}</td>
                        <td>{{ livro.editora.name }}</td>
                        <td>{{ livro.autor.name }}</td>
                        <td id="center">
                            <a :href="'/editarlivro/' + livro.id" class="btn btn-primary">Editar</a>
                            <a href="#"
                                class="btn btn-danger"
                                v-on:click="deleteEntry(livro.id, index)">
                                    Delete
                            </a>
                        </td>               
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

 