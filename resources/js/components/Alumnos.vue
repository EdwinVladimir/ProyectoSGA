<template>
  <div>
    <h1 class="text-center">Gestionar Articulos</h1>
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
              <label for="dni">DNI: </label>
              <input v-model="alumno.dni" type="text" class="form-control" id="dni" placeholder="Dni del alumno">
            </div>            
            <div class="my-4">
              <label for="nombre">Nombre: </label>
              <input v-model="alumno.nombre" type="text" class="form-control" id="nombre" placeholder="Nombre del Alumno">
            </div>
            <div class="my-4">
              <label for="descripcion">Apellido: </label>
              <input v-model="alumno.apellido" type="text" class="form-control" id="apellido" placeholder="Apellido del Alumno">
            </div>
            <div class="my-4">
              <label for="stock">Reparto: </label>
              <input v-model="alumno.reparto" type="text" class="form-control" id="reparto" placeholder="Reparto del Alumno">
            </div>
            <div class="my-4">
              <label for="stock">Especialidad: </label>
              <input v-model="alumno.especialidad" type="text" class="form-control" id="especialidad" placeholder="Especialidad del Alumno">
            </div>
            <div class="my-4">
              <label for="stock">Lugar de Nacimiento: </label>
              <input v-model="alumno.lnacimiento" type="text" class="form-control" id="lnacimiento" placeholder="Lugar de Nacimiento del Alumno">
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
          <th scope="col">Nombre</th>          
          <th scope="col">Apellido</th>
          <th scope="col">Reparto</th>
          <th scope="col">Especialidad</th>
          <th scope="col">Lugar de Nacimiento</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="alm in alumnos" :key="alm.id">
          <th scope="row">{{ alm.id }}</th>
          <td>{{ alm.dni }}</td>
          <td>{{ alm.nombre }}</td>
          <td>{{ alm.apellido }}</td>
          <td>{{ alm.reparto }}</td>
          <td>{{ alm.especialidad }}</td>
          <td>{{ alm.lnacimiento }}</td>
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
      alumno:{
        dni:'yy',
        nombre:'yy',
        apellido:'yy',
        reparto:'yuu',
        especialidad:'yuu',
        lnacimiento:'yuu',
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
      const res = await axios.get('/alumnos');
      this.articulos = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/alumnos/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/alumnos/'+this.id, this.alumno);
        // console.log(this.id);

      }else{
        const res = await axios.post('/alumnos/', this.alumno);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar Articulo";
        this.alumno.dni=data.dni;
        this.alumno.nombre=data.nombre;
        this.alumno.apellido=data.apellidos;
        this.alumno.reparto=data.reparto;
        this.alumno.especialidad=data.especialidad;
        this.alumno.lnacimiento=data.lnacimiento;
      }else{
        this.id=0;
        this.tituloModal="Crear Articulo";
        this.alumno.dni=data.dni;
        this.alumno.nombre=data.nombre;
        this.alumno.apellido=data.apellidos;
        this.alumno.reparto=data.reparto;
        this.alumno.especialidad=data.especialidad;
        this.alumno.lnacimiento=data.lnacimiento;
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