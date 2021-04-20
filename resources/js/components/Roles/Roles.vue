<template>
  <div>
    <h1 class="text-center">Gestionar Roles</h1>
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
              <label for="numero">Número Rol</label>
              <input v-model="roles.numero" type="text" class="form-control" id="numero" placeholder="Número del Rol">
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
          <th scope="col">Número</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="rol in roles" :key="rol.id">
          <th scope="row">{{ rol.id }}</th>
          <td>{{ rol.nombre }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(rol);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(rol.id)" class="btn btn-danger">
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
      roles:{
        numero:'yy',
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      roless: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/roless');
      this.roless = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/roless/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/roless/'+this.id, this.roles);
        // console.log(this.id);

      }else{
        const res = await axios.post('/roless/', this.roles);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar Roles";
        this.roles.nombre=data.nombre;
      }else{
        this.id=0;
        this.tituloModal="Crear Roles";
        this.roles.nombre='';
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