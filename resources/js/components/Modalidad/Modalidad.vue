<template>
  <div>
    <h1 class="text-center">Gestionar Modalidad</h1>
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
              <input v-model="modalidad.nombre" type="text" class="form-control" id="nombre" placeholder="Nombre de la Modalidad">
            </div>
            <div class="my-4">
              <label for="descripcion">descripcion</label>
              <input v-model="modalidad.descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion de la Modalidad">
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
        <tr v-for="moda in modalidads" :key="moda.id">
          <th scope="row">{{ moda.id }}</th>
          <td>{{ moda.nombre }}</td>
          <td>{{ moda.descripcion }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(moda);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(moda.id)" class="btn btn-danger">
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
      modalidad:{
        nombre:'yy',
        descripcion:'yuu',
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      modalidads: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/modalidades');
      this.modalidads = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/modalidades/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/modalidades/'+this.id, this.modalidad);
        // console.log(this.id);

      }else{
        const res = await axios.post('/modalidades/', this.modalidad);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar modalidad";
        this.modalidad.nombre=data.nombre;
        this.modalidad.descripcion=data.descripcion;
      }else{
        this.id=0;
        this.tituloModal="Crear modalidad";
        this.modalidad.nombre='';
        this.modalidad.descripcion='';
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