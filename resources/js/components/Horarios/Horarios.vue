<template>
  <div>
    <h1 class="text-center">Gestionar Horarios</h1>
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
              <input v-model="horario.dni" type="text" class="form-control" id="dni" placeholder="Horario del Estudiante">
            </div>

            <div class="my-4">
              <label for="periodo">Periodo</label>
              <input v-model="horario.periodo" type="text" class="form-control" id="periodo" placeholder="Periodo del Estudiante">
            </div>

           <div class="my-4">
                <label for="curso">Curso</label>
                <input v-model="horario.curso" type="text" class="form-control" id="curso" placeholder="Curso del Estudiante">
              </div>
            </div>

            <div class="my-4">
                <label for="docente">Docente</label>
                <input v-model="horario.docente" type="text" class="form-control" id="docente" placeholder="Docente">
              </div>
            </div>

            <div class="my-4">
                <label for="seccion">Sección</label>
                <input v-model="horario.seccion" type="text" class="form-control" id="seccion" placeholder="Sección del Estudiante">
              </div>
            </div>
            
            <div class="my-4">
                <label for="modulo">Modulo</label>
                <input v-model="horario.modulo" type="text" class="form-control" id="modulo" placeholder="Modulo del Estudiante">
              </div>
            </div>
            
            <div class="my-4">
                <label for="materia">Materia</label>
                <input v-model="horario.materia" type="text" class="form-control" id="materia" placeholder="Materia del Estudiante">
              </div>
            </div>

            <div class="my-4">
                <label for="dia">Dia</label>
                <input v-model="horario.dia" type="text" class="form-control" id="dia" placeholder="Día de Clases">
              </div>
            </div>

          <div class="my-4">
              <label for="hinicio">Horario de Inicio</label>
              <input v-model="horario.hinicio" type="text" class="form-control" id="hinicio" placeholder="Horario de Inicion">
            </div>
          </div>

          <div class="my-4">
              <label for="hfinal">Hora de Finalizar</label>
              <input v-model="horario.hfinal" type="text" class="form-control" id="hfinal" placeholder="Hora de Finalizar">
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
          <th scope="col">Periodo</th>
          <th scope="col">Curso</th>
          <th scope="col">Docente</th>
          <th scope="col">Sección</th>
          <th scope="col">Modulo</th>          
          <th scope="col">Materia</th>
          <th scope="col">Día</th>
          <th scope="col">Hora de Inicio</th>
          <th scope="col">Hora de Finalizar</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="hor in horario" :key="hor.id">
          <th scope="row">{{ hor.id }}</th>
          <td>{{ hor.dni }}</td>
          <td>{{ hor.periodo }}</td>
          <td>{{ hor.curso }}</td>
          <td>{{ hor.docente }}</td>
          <td>{{ hor.seccion }}</td>
          <td>{{ hor.modulo }}</td>
          <td>{{ hor.materia }}</td>
          <td>{{ hor.dia }}</td>
          <td>{{ hor.hinicio }}</td>
          <td>{{ hor.hfinal }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(hor);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(hor.id)" class="btn btn-danger">
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
        dni:'yy',
        periodo:'yuu',
        curso: 'yuu',
        docente:'yy',
        seccion:'yuu',
        modulo: 'yuu',
        materia: 'yuu',
        dia:'yy',
        hinicio:'yuu',
        hfinal: 'yuu',

      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      horario: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/horario');
      this.horario = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/horario/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/horario/'+this.id, this.horario);
        // console.log(this.id);

      }else{
        const res = await axios.post('/horario/', this.horario);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar Horario";
        this.horario.dni=data.dni;
        this.horario.periodo=data.periodo;
        this.horario.curso=data.curso;
        this.horario.docente=data.docente;
        this.horario.seccion=data.seccion;
        this.horario.materia=data.materia;
        this.horario.modulo=data.modulo;
        this.horario.dia=data.dia;
        this.horario.hinicio=data.hinicio;
        this.horario.hfinal=data.hfinal;
      }else{
        this.id=0;
        this.tituloModal="Crear Horario";
        this.horario.dni='';
        this.horario.periodo='';
        this.horario.curso='';
        this.horario.modulo='';
        this.horario.docente='';
        this.horario.seccion='';
        this.horario.materia='';
        this.horario.dia='';
        this.horario.hinicio='';
        this.horario.hfinal='';


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