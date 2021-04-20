<template>
  <div>
    <h1 class="text-center">Gestionar Docentes</h1>
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
              <input v-model="docentes.dni" type="text" class="form-control" id="dni" placeholder="DNI del Docente">
            </div>

            <div class="my-4">
              <label for="nombre">Nombre</label>
              <input v-model="docentes.nombre" type="text" class="form-control" id="nombre" placeholder="Nombre del Docente">
            </div>

            <div class="my-4">
              <label for="apellidos">Apellidos</label>
              <input v-model="docentes.apellido" type="text" class="form-control" id="apellido" placeholder="Apellido del Docente">
            </div>
           
            <div class="my-4">
              <label for="apellidos">Promoción</label>
              <input v-model="docentes.promocion" type="text" class="form-control" id="promocion" placeholder="Promoción del Docente">
            </div>

             <div class="my-4">
              <label for="especialidad">Especialidad</label>
              <input v-model="docentes.especialidad" type="text" class="form-control" id="especialidad" placeholder="Especialidad del Docente">
            </div>

            <div class="my-4">
              <label for="lnacimiento">Lugar de Nacimiento</label>
              <input v-model="docentes.lnacimiento" type="text" class="form-control" id="lnacimiento" placeholder="Lugar de Nacimiento del Docente">
            </div>         
            
            <div class="my-4">
              <label for="grado">Grado</label>
              <input v-model="docentes.grado" type="text" class="form-control" id="grado" placeholder="Grado del Docente">
            </div>

            <div class="my-4">
              <label for="instituto">Instituciòn Educativa</label>
              <input v-model="docentes.instituto" type="text" class="form-control" id="instituto" placeholder="Instituto Educativo">
            </div>

            <div class="my-4">
              <label for="gradoob">Grado Obtenido</label>
              <input v-model="docentes.gradoob" type="text" class="form-control" id="gradoob" placeholder="Grado Obtenido">
            </div>

            <div class="my-4">
              <label for="certificado">Certificación Obtenida</label>
              <input v-model="docentes.certificado" type="text" class="form-control" id="certificado" placeholder="Certificación Obtenida">
            </div>

            <div class="my-4">
              <label for="cargodesem">Cargo Desempeñado</label>
              <input v-model="docentes.cargodesem" type="text" class="form-control" id="cargodesem" placeholder="Cargo Desempeñado">
            </div>

            <div class="my-4">
              <label for="unidad">Unidad</label>
              <input v-model="docentes.unidad" type="text" class="form-control" id="unidad" placeholder="Unidad">
            </div>

            <div class="my-4">
              <label for="cargoddoc">Cargo Docente</label>
              <input v-model="docentes.cargodoc" type="text" class="form-control" id="cargodoc" placeholder="Cargo Docente">
            </div>

            <div class="my-4">
              <label for="cursodic">Curso Dictado</label>
              <input v-model="docentes.cursodic" type="text" class="form-control" id="cursodic" placeholder="Curso Dictado">
            </div>

            <div class="my-4">
              <label for="cursorea">Curso Realizado</label>
              <input v-model="docentes.cursorea" type="text" class="form-control" id="cursoreaº" placeholder="Curso Realizado">
            </div>

          <div class="my-4">
              <label for="lugarcur">Lugar de Participación</label>
              <input v-model="docentes.lugarcur" type="text" class="form-control" id="lugarcur" placeholder="Lugar de Participación">
            </div>

           <div class="my-4">
              <label for="anocuc">Año de Participación</label>
              <input v-model="docentes.anocur" type="text" class="form-control" id="anocur" placeholder="Año de Participación">
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
          <th scope="col">Apellidos</th>
          <th scope="col">Especialidad</th>
          <th scope="col">Lugar de Nacimiento</th>
          <th scope="col">Grado</th>
          <th scope="col">Instituciòn Educativa</th>
          <th scope="col">Grado Obtenido</th>
          <th scope="col">Certificación Obtenida</th>
          <th scope="col">Cargo Desempeñado</th>
          <th scope="col">Unidad</th>
          <th scope="col">Cargo Docente</th>
          <th scope="col">Curso Dictado</th>
          <th scope="col">Curso Realizado</th>
          <th scope="col">Lugar de Participación</th>
          <th scope="col" colspan="2" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="doc in docentes" :key="dor.id">
          <th scope="row">{{ doc.id }}</th>
          <td>{{ doc.dni }}</td>
          <td>{{ doc.nombre }}</td>
          <td>{{ doc.apellidos }}</td>
          <td>{{ doc.especialidad }}</td>
          <td>{{ doc.lnacimiento }}</td>
          <td>{{ doc.grado }}</td>
          <td>{{ doc.instituto }}</td>
          <td>{{ doc.gradoob }}</td>
          <td>{{ doc.certificado }}</td>
          <td>{{ doc.cargodesem }}</td>
          <td>{{ doc.unidad }}</td>
          <td>{{ doc.cargoddoc }}</td>
          <td>{{ doc.cursodic }}</td>
          <td>{{ doc.cursorea }}</td>
          <td>{{ doc.lugarcur }}</td>
          <td>{{ doc.anocuc }}</td>          
          <td>
            <button  @click="modificar=true; abrirModal(doc);" class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button @click="eliminar(doc.id)" class="btn btn-danger">
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
      docentes:{
          dni:' ',
          nombre:' ',
          apellidos:' ',
          especialidad:' ',
          lnacimiento:' ',
          grado:' ',
          instituto:' ',
          gradoob:' ',
          certificado:' ',
          cargodesem:' ',
          unidad:' ',
          cargoddoc:' ',
          cursodic:' ',
          cursorea:' ',
          lugarcur:' ',
          anocuc:' '
      },
      id:0,
      modificar:true,
      modal:0,
      tituloModal:'',
      docentes: [],
    };
  },
  methods: {
    async listar() {
      const res = await axios.get('/docentes');
      this.docentes = res.data;
    },
    async eliminar(id) {
      const res = await axios.delete('/docentes/' + id);
      this.listar();
    },
    async guardar() {
      if(this.modificar){
        const res = await axios.put('/docentes/'+this.id, this.docentes);
        // console.log(this.id);

      }else{
        const res = await axios.post('/docentes/', this.docentes);
      }
      this.cerrarModal();
      this.listar();
    },
    abrirModal(data={}){
      this.modal=1;
      if(this.modificar){
        this.id=data.id;
        this.tituloModal="Modificar Docentes";
        this.docentes.nombre=data.nombre;
        this.docentes.descripcion=data.descripcion;
        this.docentes.stock=data.stock;
        this.docentes.dni=data.dni;
        this.docentes.nombre=data.nombre;
        this.docentes.apellidos=data.apellidos;
        this.docentes.especialidad=data.especialidad;
        this.docentes.lnacimiento=data.lnacimiento;
        this.docentes.grado=data.grado;
        this.docentes.instituto=data.instituto;
        this.docentes.gradoob=data.gradoob;
        this.docentes.certificado=data.certificado;
        this.docentes.cargodesem=data.cargodesem;
        this.docentes.unidad=data.unida;
        this.docentes.cargoddoc=data.cargoddoc;
        this.docentes.cursodic=data.cursodic;
        this.docentes.cursorea=data.cursorea;
        this.docentes.lugarcur=data.lugarcur;
        this.docentes.anocuc=data.anocuc;
      }else{
        this.id=0;
        this.tituloModal="Crear Docentes";
        this.docentes.dni:' ';
        this.docentes.nombre:' ';
        this.docentes.apellidos:' ';
        this.docentes.especialidad:' ';
        this.docentes.lnacimiento:' ';
        this.docentes.grado:' ';
        this.docentes.instituto:' ';
        this.docentes.gradoob:' ';
        this.docentes.certificado:' ';
        this.docentes.cargodesem:' ';
        this.docentes.unidad:' ';
        this.docentes.cargoddoc:' ';
        this.docentes.cursodic:' ';
        this.docentes.cursorea:' ';
        this.docentes.lugarcur:' ';
        this.docentes.anocuc:' ';
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