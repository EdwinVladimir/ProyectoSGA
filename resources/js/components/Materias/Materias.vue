<template>
  <div>
    <h1 class="text-center">Gestionar Materias</h1>
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
              <label for="codigo">Código</label>
              <input v-model="materia.codigo" type="text" class="form-control" id="codigo" placeholder="Codigo de la Matería">
            </div>

            <div class="my-4">
              <label for="nombre">Nombre</label>
              <input v-model="materia.nombre" type="text" class="form-control" id="nombre" placeholder="Nombre del Matería">
            </div>

            <div class="my-4">
              <label for="ejecurso">Eje del Curso</label>
              <input v-model="materia.ejecurso" type="text" class="form-control" id="ejecurso" placeholder="Eje Curso">
            </div>
            
            <div class="my-4">
              <label for="nhora">Número de Horas</label>
              <input v-model="materia.nhora" type="number" class="form-control" id="nhora" placeholder="Número de Horas">
            </div>
          </div>
          
          <div class="my-4">
              <label for="finic">Fecha de Inicio</label>
              <input v-model="materia.finic" type="number" class="form-control" id="finic" placeholder="Fecha de Inicio">
            </div>
          </div>
          
          <div class="my-4">
              <label for="fifin">Fecha de Finalizado</label>
              <input v-model="materia.fifin" type="number" class="form-control" id="fifin" placeholder="Fecha de Finalizado">
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
          <th scope="col">Código</th>
          <th scope="col">Nombre</th>
          <th scope="col">Eje del Curso</th>
          <th scope="col">Número de Horas</th>
          <th scope="col">Fecha de Inicio</th>
          <th scope="col">Fecha de Finalizar</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="mat in materias" :key="mat.id">
          <th scope="row">{{ mat.id }}</th>
          <td>{{ mat.codigo }}</td>
          <td>{{ mat.nombre }}</td>
          <td>{{ mat.ejecurso }}</td>
          <td>{{ mat.nhora }}</td>
          <td>{{ mat.finic }}</td>
          <td>{{ mat.fifin }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(mat);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(mat.id)" class="btn btn-danger">
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
      materia:{
        codigo:'yy',
        nombre:'yy',
        ejecurso:'yuu',
        nhoras:1,
        finic:'yy',
        fifin:'yuu',
      },
      id:0,
      modificar:true,

      modal:0,
      tituloModal:'',
      materias: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/materias');
      this.materias = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/materias/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/materias/'+this.id, this.materia);
        // console.log(this.id);

      }else{
        const res = await axios.post('/materias/', this.materia);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar Materia";
        this.materia.codigo=data.codigo;
        this.materia.nombre=data.nombre;
        this.materia.ejecurso=data.ejecurso;
        this.materia.nhoras=data.nhoras;
        this.materia.finic=data.finic;
        this.materia.fifin=data.fifin;
      }else{
        this.id=0;
        this.tituloModal="Crear materia";
        this.materia.codigo='';
        this.materia.nombre='';
        this.materia.ejecurso='';
        this.materia.nhoras=1;
        this.materia.finic='';
        this.materia.fifin='';
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