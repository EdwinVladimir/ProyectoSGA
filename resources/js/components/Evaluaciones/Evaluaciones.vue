<template>
  <div>
    <h1 class="text-center">Gestionar Calificaciones</h1>
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
              <input v-model="evaluacion.dni" type="text" class="form-control" id="dbi" placeholder="DNI del Estudiante">
            </div>

            <div class="my-4">
              <label for="tipoevalua">Evaluaciòn</label>
              <input v-model="evaluacion.tipoevalua" type="text" class="form-control" id="tipoevalua" placeholder="Evaluación del Estudiante">
            </div>

            <div class="my-4">
              <label for="nota">Nota</label>
              <input v-model="evaluacion.nota" type="number" class="form-control" id="nota" placeholder="Nota del Estudiante">
            </div>
          </div>

          <div class="my-4">
              <label for="peso">Peso</label>
              <input v-model="evaluacion.peso" type="number" class="form-control" id="peso" placeholder="Peso del Estudiante">
            </div>
          </div>

          
            <div class="my-4">
              <label for="notaponde">Nota  Ponderada</label>
              <input v-model="evaluacion.nota" type="number" class="form-control" id="notaponde" placeholder="Nota Poderada del Estudiante">
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
          <th scope="col">Tipo de Evaluaión</th>
          <th scope="col">Nota</th>
          <th scope="col">Peso</th>
          <th scope="col">Nota Ponderada</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="evalua in evaluaciones" :key="evalua.id">
          <th scope="row">{{ evalua.id }}</th>
          <td>{{ evalua.dni }}</td>
          <td>{{ evalua.tipoevalua }}</td>
          <td>{{ evalua.nota }}</td>
          <td>{{ evalua.peso }}</td>
          <td>{{ evalua.notaponde }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(evalua);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(evalua.id)" class="btn btn-danger">
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
      evaluacion:{
        dni:'yy',
        tipoevalua:'yuu',
        nota:1,
        peso:1,
        notaponde:1,
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      evaluaciones: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/evaluaciones');
      this.evaluaciones = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/evaluaciones/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/evaluaciones/'+this.id, this.evaluacion);
        // console.log(this.id);

      }else{
        const res = await axios.post('/evaluaciones/', this.evaluacion);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar Evaluación";
        this.evaluacion.dni=data.dni;
        this.evaluacion.tipoevalua=data.tipoevalua;
        this.evaluacion.nota=data.nota;
        this.evaluacion.nota=data.peso;
        this.evaluacion.nota=data.notaponde;
      }else{
        this.id=0;
        this.tituloModal="Crear Evaluacion";
        this.evaluacion.dni='';
        this.evaluacion.descripcion='';
        this.evaluacion.nota=1;
        this.evaluacion.peso=1;
        this.evaluacion.notaponde=1;
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