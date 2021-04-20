<template>
  <div>
    <h1 class="text-center">Gestionar Tipo de Cursos</h1>
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
              <input v-model="tipocurso.nombre" type="text" class="form-control" id="nombre" placeholder="Nombre del Tipocurso">
            </div>

            <div class="my-4">
              <label for="descripcion">descripcion</label>
              <input v-model="tipocurso.descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion del Tipocurso">
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
        <tr v-for="tpcur in tipocursos" :key="tpcur.id">
          <th scope="row">{{ tpcur.id }}</th>
          <td>{{ tpcur.nombre }}</td>
          <td>{{ tpcur.descripcion }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(tpcur);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(tpcur.id)" class="btn btn-danger">
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
      tipocurso:{
        nombre:'yy',
        descripcion:'yuu',
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      tipocursos: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/tipocursos');
      this.tipocursos = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/tipocursos/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/tipocursos/'+this.id, this.tipocurso);
        // console.log(this.id);

      }else{
        const res = await axios.post('/tipocursos/', this.tipocurso);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar Tipo Curso";
        this.tipocurso.nombre=data.nombre;
        this.tipocurso.descripcion=data.descripcion;
      }else{
        this.id=0;
        this.tituloModal="Crear Tipo Curso";
        this.tipocurso.nombre='';
        this.tipocurso.descripcion='';
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