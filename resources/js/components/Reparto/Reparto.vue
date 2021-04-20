<template>
  <div>
    <h1 class="text-center">Gestionar Reparto</h1>
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
              <input v-model="reparto.nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>
            <div class="my-4">
              <label for="descripcion">descripcion</label>
              <input v-model="reparto.descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion">
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
        <tr v-for="repart in repartos" :key="repart.id">
          <th scope="row">{{ repart.id }}</th>
          <td>{{ repart.nom_reparto }}</td>
          <td>{{ repart.desc_reparto }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(repart);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(repart.id)" class="btn btn-danger">
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
      reparto:{
        nombre:'yy',
        descripcion:'yuu',
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      repartos: [],
    };
  },
  methods: {
    async listar() {
      const repar = await axios.get('/api/reparto');
      this.repartos = repar.data;
    },
    async eliminar(id) {
      const repar = await axios.delete('/api/reparto/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/api/reparto/'+this.id, this.repartos);
        // console.log(this.id);

      }else{
        const res = await axios.post('/reparto/', this.repartos);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar reparto";
        this.repartos.nombre=data.nombre;
        this.repartos.descripcion=data.decripcion;
      }else{
        this.id=0;
        this.tituloModal="Crear reparto";
        this.repartos.nombre='';
        this.repartos.descripcion='';
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