

<script>
    export default {
        props: ['autores'],

        data () {
            return {
                list: [],
                fisrtName: '',
               
            }
        },
     
           computed: {
               fullName() {
                   return this.list = JSON.parse(this.autores).filter((autor)=>{
                       
                        return autor.name.match(this.fisrtName)
                   })
               }
           },
        methods: {
            sortArrays(list) {
                    return _.orderBy(list, 'name', 'desc');
                }
        },


        mounted () {
            this.list = JSON.parse(this.autores)

        }
        
    }
</script>
<template>

    <div>
        <div class="container">
            <form>
                <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="First Name" v-model="fisrtName">
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
                    <tr v-for="(autor, index) in fullName" v-bind:key="index" >
                        <td>{{ autor.id }}</td>
                        <td>{{ autor.name }}</td>

                          <td id="center">
                                <a href="" 
                                    data-toggle="tooltip" 
                                    data-placement="top"
                                    title="Alterar"><i class="fa fa-pencil"></i></a>
                                &nbsp;<form style="display: inline-block;" method="POST" 
                                            action=""                                                        
                                            data-toggle="tooltip" data-placement="top"
                                            title="Excluir" 
                                            onsubmit="return confirm('Confirma exclusão?')">
                                                                                 
                                    <button type="submit" style="background-color: #fff">
                                        <a><i class="fa fa-trash-o"></i></a>                                                    
                                    </button></form>
                            </td>               
                                    
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

 