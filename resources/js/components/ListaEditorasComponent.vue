<script>

    export default {
        props: ['editoras'],

        data () {
            return {
                list: [],
                fisrtName: '',
               
            }
        },
 
           computed: {
               fullName() {
                   return this.list = JSON.parse(this.editoras).filter((editora)=>{
                       
                        return editora.name.match(this.fisrtName)
                   })
               }
           },
        methods: {
            sortArrays(list) {
                    return _.orderBy(list, 'name', 'desc');
                },

            deleteEditora(id, index) {
                
                if (confirm("Tem certeza que deseja deletar o registro?")) {
                    var app = this;
                    axios.delete('/deletareditora/'+ id )

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
            this.list = JSON.parse(this.editoras)

        },

        
    };

</script>
<template>

    <div>
        <a :href="/criareditora/" class="btn btn-primary pull-right"><i class="fas fa-plus"></i> Editora</a>
        <br><br><br>
        <div class="container">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Pesquisar" v-model="fisrtName">
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
                        <th>Ações</th>                
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(editora, index) in fullName" v-bind:key="index" >
                        <td>{{ editora.id }}</td>
                        <td>{{ editora.name }}</td>
                        
                          <td id="center">
                               <a :href="'/editareditora/' + editora.id" class="btn btn-primary">Editar</a>

                               <a href="#"
                                    class="btn btn-danger"
                                    v-on:click="deleteEditora(editora.id, index)">
                                        Delete
                                </a>
                            </td>               
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

 