<template>
  <div>
    <h1 class="text-center">Gestionar Cursos</h1>
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
              <label for="codigo">Codigo</label>
              <input v-model="curso.codigo" type="text" class="form-control" id="codigo" placeholder="Codigo del Curso">
            </div>
             <div class="my-4">
              <label for="nombre">Nombre</label>
              <input v-model="curso.nombre" type="text" class="form-control" id="nombre" placeholder="Nombre del Curso">
            </div>
            <div class="my-4">
              <label for="ejecurso">Eje Curso</label>
              <input v-model="curso.ejecurso" type="text" class="form-control" id="ejecurso" placeholder="Eje del Curso">
            </div>
            <div class="my-4">
              <label for="stock">Tipo de Curso</label>
              <input v-model="curso.tipocurso" type="number" class="form-control" id="tipocurso" placeholder="Tipo Curso">
            </div>
          </div>
            <div class="my-4">
              <label for="ejecurso">Area del Curso</label>
              <input v-model="curso.areacurso" type="text" class="form-control" id="areacurso" placeholder="Area del Curso">
            </div>
            <div class="my-4">
              <label for="stock">Inicio del Curso</label>
              <input v-model="curso.iniciocurso" type="number" class="form-control" id="iniciocurso" placeholder="Inicio del Curso">
            </div>
            <div class="my-4">
              <label for="stock">Fin del Curso</label>
              <input v-model="curso.fincurso" type="number" class="form-control" id="fincurso" placeholder="Fin del Curso">
            </div>
            <div class="my-4">
              <label for="ejecurso">Horas del Curso</label>
              <input v-model="curso.horacurso" type="text" class="form-control" id="horacurso" placeholder="Hora del Curso">
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
          <th scope="col">Codigo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Eje Curso</th>
          <th scope="col">Tipo de Curso</th>
          <th scope="col">Inicio del Curso</th>
          <th scope="col">Fin del Curso</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="curs in cursos" :key="curs.id">
          <th scope="row">{{ curs.id }}</th>
          <td>{{ curs.codigo }}</td>
          <td>{{ curs.nombre }}</td>
          <td>{{ curs.ejecurso }}</td>
          <td>{{ curs.tipocurso }}</td>
          <td>{{ curs.finiccurso }}</td>
          <td>{{ curs.ffincurso }}</td>
          <td>{{ curs.nhorccurso }}</td>                             
          <td>
            <button  @click="modificar=true; abrirModal(curs);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(curs.id)" class="btn btn-danger">
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
      cursos:{
        codigo:'yy',
        nombre:'yuu',
        ejecurso,
        tipocurso,
        finiccurso,
        ffincurso,
        nhorccurso, 
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      curso: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/cursos');
      this.cursos = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/cursos/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/cursos/'+this.id, this.cursos);
        // console.log(this.id);

      }else{
        const res = await axios.post('/articulos/', this.cursos);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar Curso";
        this.cursos.nombre=data.nombre;
        this.cursos.descripcion=data.descripcion;
        this.cursos.ejecurso=data.ejecurso;
        this.cursos.tipocurso=data.tipocurso;
        this.cursos.areacurso=data.areacurso;
        this.cursos.finiccurso=data.finiccurso;
        this.cursos.ffincurso=data.ffinccurso;
        this.cursos.nhorcurso=data.nhorcurso;
      }else{
        this.id=0;
        this.tituloModal="Crear Curso";
        this.cursos.nombre=' ';
        this.cursos.descripcion=' ';
        this.cursos.ejecurso= ' ';
        this.cursos.tipocurso=' ';
        this.cursos.areacurso=' ';
        this.cursos.finiccurso= ' ';
        this.cursos.ffincurso= ' ';
        this.cursos.nhorcurso= ' ';
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