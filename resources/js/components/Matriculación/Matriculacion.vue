<template>
  <div>
    <h1 class="text-center">Gestionar Matriculación</h1>
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
              <label for="dni">DNI</label>
              <input v-model="matricula.dni" type="text" class="form-control" id="dni" placeholder="DNI">
            </div>           
            <div class="my-4">
              <label for="docente">Docente</label>
              <input v-model="matricula.docente" type="text" class="form-control" id="docente" placeholder="Docente">
            </div> 

            <div class="my-4">
              <label for="curso">Curso</label>
              <input v-model="matricula.curso" type="text" class="form-control" id="curso" placeholder="Curso">
            </div>
            
            <div class="my-4">
              <label for="materia">Materia</label>
              <input v-model="matricula.materia" type="text" class="form-control" id="materia" placeholder="Materia">
            </div>
            
            <div class="my-4">
              <label for="seccion">Seccion</label>
              <input v-model="matricula.seccion" type="number" class="form-control" id="seccion" placeholder="Seccion">
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
          <th scope="col">Docente</th>
          <th scope="col">Curso</th>
          <th scope="col">Materia</th>
          <th scope="col">Sección</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="matr in matriculas" :key="matr.id">
          <th scope="row">{{ matr.id }}</th>
          <td>{{ matr.dni }}</td>
          <td>{{ matr.docente }}</td>
          <td>{{ matr.curso }}</td>
          <td>{{ matr.materia }}</td>
          <td>{{ matr.seccion }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(matr);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(matr.id)" class="btn btn-danger">
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
      matricula:{
        dni:'yy',
        docente:'yy',
        curso:'yy',
        materia:'yuu',
        seccion:'yuu',
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      matriculas: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/matriculas');
      this.matriculas = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/matriculas/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/matriculas/'+this.id, this.matricula);
        // console.log(this.id);

      }else{
        const res = await axios.post('/matriculas/', this.matricula);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar matricula";
        this.matricula.dni=data.dni;
        this.matricula.docente=data.docente;
        this.matricula.curso=data.curso;
        this.matricula.materia=data.materia;
        this.matricula.seccion=data.seccion;
      }else{
        this.id=0;
        this.tituloModal="Crear matricula";
        this.matricula.dni='';
        this.matricula.docente='';
        this.matricula.curso='';
        this.matricula.materia='';
        this.matricula.seccion='';
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