<template>
  <div>
    <h1 class="text-center">Gestionar Actividades - ULTIMO</h1>
    <hr />

    <!-- Button to Open the Modal -->
    <button @click="modificar=false; abrirModal();" type="button" class="btn btn-primary my-4">Nuevo</button>

    <!-- The Modal -->
    <div class="modal" :class="{mostrar: modal}">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">{{tituloModal}}</h4>
            <button @click="cerrarModal();"  type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">

            <div class="my-4">
              <label for="dni">DNI</label>
              <input v-model="actividadeva.dni" type="text" class="form-control" id="dni" placeholder="DNI">
            </div>

            <div class="my-4">
              <label for="tipoeva">Tipo de Evaluación</label>
              <input v-model="actividadeva.tipoeva" type="text" class="form-control" id="tipoeva" placeholder="Tipo de Evaluación">
            </div>

            <div class="my-4">
              <label for="nota">Nota</label>
              <input v-model="actividadeva.nota" type="text" class="form-control" id="nota" placeholder="Nota">
            </div>

            <div class="my-4">
              <label for="peso">Peso</label>
              <input v-model="actividadeva.peso" type="number" class="form-control" id="peso" placeholder="Peso">
            </div>

            <div class="my-4">
              <label for="notapond">Nota Ponderada</label>
              <input v-model="actividadeva.notapond" type="number" class="form-control" id="notapond" placeholder="Nota Ponderada">
            </div>

          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button @click="cerrarModal();" type="button" class="btn btn-secondary" data-dismiss="modal">
              Cancelar
            </button>
            <button  @click="guardar();" type="button" class="btn btn-success" data-dismiss="modal">
              Guardar
            </button>

          </div>
        </div>
      </div>
    </div>

    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">DNI</th>
          <th scope="col">Tipo de Evaluación</th>
          <th scope="col">Nota</th>
          <th scope="col">Peso</th>
          <th scope="col">Nota Ponderada</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="aceva in actividadevas" :key="aceva.id">
          <th scope="row">{{ aceva.id }}</th>
          <td>{{ aceva.dni }}</td>
          <td>{{ aceva.tipoeva }}</td>
          <td>{{ aceva.nota }}</td>
          <td>{{ aceva.peso }}</td>
          <td>{{ aceva.notapond }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(aceva);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(aceva.id)" class="btn btn-danger">
              Eliminar
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      actividadeva:{
        dni:'yy',
        tipoeva:'yuu',
        nota:1,
        peso:1,
        notapond:1,
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      actividadevas: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/actividadevas');
      this.actividadevas = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/actividadevas/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/actividadevas/'+this.id, this.actividadeva);
        // console.log(this.id);

      }else{
        const res = await axios.post('/actividadevas/', this.actividadeva);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar Actividades";
        this.actividadeva.dni=data.dni;
        this.actividadeva.tipoeva=data.tipoeva;
        this.actividadeva.nota=data.nota;
        this.actividadeva.nota=data.peso;
        this.actividadeva.nota=data.notapond;
      }else{
        this.id=0;
        this.tituloModal="Crear actividadeva";
        this.actividadeva.dni='';
        this.actividadeva.tipoeva='';
        this.actividadeva.nota=1;
        this.actividadeva.peso=1;
        this.actividadeva.notapond=1;
      }
    },
    cerrarModal(){
      this.modal=0;
    },
  },
  created() {
    this.listar();
  },
};
</script>

<style>
  .mostrar{
    display: list-item;
    opacity: 1;
    background: rgba(75, 56, 143, 0.705);
  }
</style>