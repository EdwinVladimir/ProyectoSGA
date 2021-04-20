<template>
  <div>
    <h1 class="text-center">Gestionar Modulos</h1>
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
              <label for="materia">Codigo</label>
              <input v-model="modulo.codigo" type="text" class="form-control" id="codigo" placeholder="Codigo del Modulo">
            </div>

            <div class="my-4">
              <label for="nombre">Nombre</label>
              <input v-model="modulo.nombre" type="text" class="form-control" id="nombre" placeholder="Nombre del Modulo">
            </div>

            <div class="my-4">
              <label for="numat">Número de Materias</label>
              <input v-model="modulo.numat" type="text" class="form-control" id="numat" placeholder="Número de Materias">
            </div>

            <div class="my-4">
              <label for="materia">Materia</label>
              <input v-model="modulo.materia" type="text" class="form-control" id="materia" placeholder="Materia">
            </div>

            <div class="my-4">
              <label for="finic">Fecha de Inicio</label>
              <input v-model="modulo.finic" type="number" class="form-control" id="finic" placeholder="Fecha de Inicio del modulo">
            </div>

 
          <div class="my-4">
              <label for="ffin">Fecha de Finalizar</label>
              <input v-model="modulo.ffin" type="number" class="form-control" id="ffin" placeholder="Fecha de Finalizar del modulo">
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
          <th scope="col">Número de Materias</th>
          <th scope="col">Materia</th>
          <th scope="col">Fecha de Inicio</th>
          <th scope="col">Fecha de Finalizar</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="mod in modulos" :key="mod.id">
          <th scope="row">{{ mod.id }}</th>
          <td>{{ mod.codigo }}</td>
          <td>{{ mod.nombre }}</td>
          <td>{{ mod.numat }}</td>
          <td>{{ mod.materia }}</td>
          <td>{{ mod.finic }}</td>
          <td>{{ mod.ffin }}</td>
          <td>
            <button  @click="modificar=true; abrirModal(mod);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(mod.id)" class="btn btn-danger">
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
      modulo:{
        codigo:'yy',
        nombre:'yuu',
        numat:1,
        materia:'yy',
        finic:'yuu',
        fifin:'yuu',       
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      modulos: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/modulos');
      this.modulos = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/modulos/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/modulos/'+this.id, this.modulo);
        // console.log(this.id);

      }else{
        const res = await axios.post('/modulos/', this.modulo);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar modulo";
        this.modulo.codigo=data.codigo;
        this.modulo.nombre=data.nombre;
        this.modulo.numat=data.numat;
        this.modulo.materia=data.materia;
        this.modulo.finic=data.finic;
        this.modulo.ffin=data.ffin;

      }else{
        this.id=0;
        this.tituloModal="Crear modulo";
        this.modulo.codigo='';
        this.modulo.nombre='';
        this.modulo.numat='';
        this.modulo.materia='';
        this.modulo.finic='';
        this.modulo.ffin='';
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