<template>
  <div>
    <h1 class="text-center">Gestionar Usuarios</h1>
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
              <input v-model="usuario.nombre" type="text" class="form-control" id="nombre" placeholder="Nombre del Usuario">
            </div>
            <div class="my-4">
              <label for="email">Email</label>
              <input v-model="usuario.email" type="text" class="form-control" id="email" placeholder="Email del Usuario">
            </div>
            <div class="my-4">
              <label for="password">Password</label>
              <input v-model="usuario.password" type="number" class="form-control" id="password" placeholder="Password del Usuario">
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
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="use in usuarios" :key="use.id">
          <th scope="row">{{ use.id }}</th>
          <td>{{ use.nombre }}</td>
          <td>{{ use.email }}</td>
          <td>{{ use.pasword }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(use);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(use.id)" class="btn btn-danger">
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
      usuario:{
        nombre:'yy',
        email:'yuu',
        password:1,
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      usuarios: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/usuarios');
      this.usuarios = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/usuarios/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/usuarios/'+this.id, this.usuario);
        // console.log(this.id);

      }else{
        const res = await axios.post('/usuarios/', this.usuario);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar usuario";
        this.usuario.nombre=data.nombre;
        this.usuario.password=data.password;
        this.usuario.email=data.email;
      }else{
        this.id=0;
        this.tituloModal="Crear usuario";
        this.usuario.nombre='';
        this.usuario.password=1;
        this.usuario.email='';
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