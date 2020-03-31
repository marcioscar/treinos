<template>
<div>


        <!-- <div class="col-4 col">
            <input type="text" class="form-control" placeholder="Buscar Aula" v-model = "buscar">
        </div> -->
<div class="form-group has-search">
    <span class="fa fa-search form-control-feedback"></span>
    <input type="search"  class="form-control col-8" placeholder="aula / hora" v-model = "buscar">
  </div>


    <table class="table  table-striped table-hover table-bordered">
            <thead class="bg-success"  >
                <tr >
                    <th  v-for="titulo in titulos"  > {{titulo}}</th>
                </tr>
            </thead>
            <tbody >
                <tr  v-for="item in lista ">
                    <td v-for="i in item" >{{i | formataHora}}</td>
                </tr>
            </tbody>
        </table>
</div>
</template>

<script>
    export default {

   data: function(){
                return {
                    buscar: '',
                    dia: ''
                }
            },

        props:['titulos', 'itens'],

  filters:{
            formataHora: function(valor){
                if(!valor) return '';
                valor = valor.toString();
                if(valor.split(':').length == 3){
                    valor = valor.split(':');
                    return valor[0] + ':' + valor[1];
                }
                return valor ;
            }
        },

        computed:{
            lista:function(){
                if(this.buscar){
                return this.itens.filter(res => {
                res = Object.values(res);
                for(let k = 0;k < res.length; k++){
                    if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                      return true;
                    }
                }
                 return false;
                });
            }

            return this.itens;
            }



        }
    }
</script>

<style>
.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
</style>



