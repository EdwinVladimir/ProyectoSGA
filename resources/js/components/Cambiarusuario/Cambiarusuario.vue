<template>
  <div>
    <h1 class="text-center">Gestionar Cambio de Clave</h1>
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
              <label for="nombre">Contraseña Actual</label>
              <input v-model="user.password" type="text" class="form-control" id="contraseactu" placeholder="Contraseña Actual">
            </div>
            <div class="my-4">
              <label for="descripcion">Nueva Contraseña</label>
              <input v-model="user.pasword" type="text" class="form-control" id="descripcion" placeholder="Contraseña Nueva">
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
          <th scope="col">E-Mail</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in articulos" :key="user.id">
          <th scope="row">{{ user.id }}</th>
          <td>{{ user.nombre }}</td>
          <td>{{ user.E-Mail }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(user);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(user.id)" class="btn btn-danger">
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
      user:{
        nombre:'yy',
        email:'yuu',
        password:1,
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      user: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/user');
      this.user = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/user/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/user/'+this.id, this.user);
        // console.log(this.id);

      }else{
        const res = await axios.post('/user/', this.user);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar Articulo";
        this.user.nombre=data.nombre;
        this.user.email=data.email;
        this.user.password=data.password;
      }else{
        this.id=0;
        this.tituloModal="Crear Articulo";
        this.user.nombre='';
        this.user.email='';
        this.user.password='';
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