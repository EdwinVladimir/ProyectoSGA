<template>
  <div>
    <h1 class="text-center">Gestionar Planes de Estudios</h1>
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
              <label for="titulo">Titulo del Plan</label>
              <input v-model="planestudio.titulo" type="text" class="form-control" id="titulo" placeholder="Titulo del Plan">
            </div>
            
            <div class="my-4">
              <label for="descripcion">descripcion</label>
              <input v-model="planestudio.descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion del Plan">
            </div>
            
            <div class="my-4">
              <label for="curso">Curso</label>
              <input v-model="planestudio.curso" type="number" class="form-control" id="curso" placeholder="Curso del Plan">
            </div>
          </div>

          <div class="my-4">
              <label for="materia">Materias</label>
              <input v-model="planestudio.materia" type="number" class="form-control" id="materia" placeholder="Materias del Plan">
            </div>
          </div>

            <div class="my-4">
              <label for="archivo">Archivos del Plan</label>
              <input v-model="planestudio.archivo" type="number" class="form-control" id="archivo" placeholder="Archivo del Plan">
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
          <th scope="col">Titulo</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Curso</th>
          <th scope="col">Materia</th>
          <th scope="col">Archivo</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="pla in planestudios" :key="pla.id">
          <th scope="row">{{ pla.id }}</th>
          <td>{{ pla.titulo }}</td>
          <td>{{ pla.descripcion }}</td>
          <td>{{ pla.curso }}</td>
          <td>{{ pla.materia }}</td>
          <td>{{ pla.archivo }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(pla);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(pla.id)" class="btn btn-danger">
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
      planestudio:{
        titulo:'yy',
        descripcion:'yuu',
        curso:'yuu',
        materia:'yuu',
        archivo:'yuu',
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      planestudios: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/planestudios');
      this.planestudios = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/planestudios/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/planestudios/'+this.id, this.planestudio);
        // console.log(this.id);

      }else{
        const res = await axios.post('/planestudios/', this.planestudio);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar planestudio";
        this.planestudio.titulo=data.titulo;
        this.planestudio.descripcion=data.descripcion;
        this.planestudio.curso=data.curso;
        this.planestudio.curso=data.materia;
        this.planestudio.curso=data.archivo;
      }else{
        this.id=0;
        this.tituloModal="Crear planestudio";
        this.planestudio.titulo='';
        this.planestudio.descripcion='';
        this.planestudio.curso='';
        this.planestudio.materia='';
        this.planestudio.archivo='';
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