<template>
<div>


        <!-- <div class="col-4 col">
            <input type="text" class="form-control" placeholder="Buscar Aula" v-model = "buscar">
        </div> -->


  <!-- <div class="form-group">
    <input type="text"  class="form-control col-8" placeholder="dia" v-model= "dia">
  </div> -->




        <form class="form-inline">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Selecione o dia</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" v-model= "dia">
                <option value="segunda-feira">Segunda</option>
                <option value="terça-feira">Terça</option>
                <option value="quarta-feira">Quarta</option>
                <option value="quinta-feira">Quinta</option>
                <option value="sexta-feira">Sexta</option>
                <option value="sábado">Sábado</option>
            </select>

                <label class="my-1 mr-2" for="buscaAula">Ou selecione aula</label>
                <select class="custom-select my-1 mr-sm-2" id="buscaAula" v-model= "aula">
                    <option selected="true" value="">Nenhuma</option>
                     <option v-for='item in itens' v-bind:value="item.aula">{{item.aula}}</option>
                </select>

        </form>



    <table class="table  table-striped table-hover table-bordered">
            <thead class="bg-warning" >
                <tr >
                    <th  v-for="titulo in titulos"  > {{titulo}}</th>
                </tr>
            </thead>
            <tbody >
                <tr  v-for="item in diaSemana">
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
                    dia: '',
                    aula: ''
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

            diaSemana:function(){

                if (this.aula != ''){
                    return this.itens.filter(res => {
                        res = Object.values(res);
                    for(let k = 0;k < res.length; k++){
                    if((res[k] + "").toLowerCase().indexOf(this.aula.toLowerCase()) >= 0){
                      return true;
                    }
                }
                    return false;
                });
                    return this.itens;
                }

                if (this.dia){
                    return this.itens.filter((item)=>{
                        return item.dia.match(this.dia);
                    })
                }


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



