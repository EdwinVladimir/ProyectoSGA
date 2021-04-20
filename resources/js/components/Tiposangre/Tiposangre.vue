<template>
  <div>
    <h1 class="text-center">Gestionar Tipo de Sangre</h1>
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
              <label for="nombre">Nombre</label>
              <input v-model="tiposangre.nombre" type="text" class="form-control" id="nombre" placeholder="Nombre del Tipo Sangre">
            </div>

            <div class="my-4">
              <label for="descripcion">descripcion</label>
              <input v-model="tiposangre.descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion del Tipo Sangre">
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
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="tpsan in tiposangres" :key="tpsan.id">
          <th scope="row">{{ tpsan.id }}</th>
          <td>{{ tpsan.nombre }}</td>
          <td>{{ tpsan.descripcion }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(tpsan);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(tpsan.id)" class="btn btn-danger">
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
      tiposangre:{
        nombre:'yy',
        descripcion:'yuu',
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      tiposangres: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/tiposangres');
      this.tiposangres = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/tiposangres/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/tiposangres/'+this.id, this.tiposangre);
        // console.log(this.id);

      }else{
        const res = await axios.post('/tiposangres/', this.tiposangre);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar Tipo Sangre";
        this.tiposangre.nombre=data.nombre;
        this.tiposangre.descripcion=data.descripcion;
      }else{
        this.id=0;
        this.tituloModal="Crear Tipo Sangre";
        this.tiposangre.nombre='';
        this.tiposangre.descripcion='';
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