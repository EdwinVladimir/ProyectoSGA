<template>
  <div>
    <h1 class="text-center">Gestionar Aula</h1>
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
              <label for="nombre">Codigo: </label>
              <input v-model="aula.codigo" type="text" class="form-control" id="codigo" placeholder="Codigo del Aula">
            </div>
            <div class="my-4">
              <label for="descripcion">Número del Aula: </label>
              <input v-model="aula.num" type="text" class="form-control" id="numeroa" placeholder="Número del Aula">
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
          <th scope="col">Codigo</th>
          <th scope="col">Numero</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="aul in aula" :key="aul.id">
          <th scope="row">{{ art.id }}</th>
          <td>{{ art.nombre }}</td>
          <td>{{ art.descripcion }}</td>
          <td>{{ art.stock }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(art);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(art.id)" class="btn btn-danger">
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
      articulo:{
        nombre:'yy',
        descripcion:'yuu',
        stock:1,
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      articulos: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/articulos');
      this.articulos = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/articulos/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/articulos/'+this.id, this.articulo);
        // console.log(this.id);

      }else{
        const res = await axios.post('/articulos/', this.articulo);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar Articulo";
        this.articulo.nombre=data.nombre;
        this.articulo.descripcion=data.descripcion;
        this.articulo.stock=data.stock;
      }else{
        this.id=0;
        this.tituloModal="Crear Articulo";
        this.articulo.nombre='';
        this.articulo.descripcion='';
        this.articulo.stock=1;
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