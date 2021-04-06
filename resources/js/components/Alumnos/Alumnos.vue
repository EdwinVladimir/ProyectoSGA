<template>

  <div>
    <h1 class="text-center">Gestionar Alumnos</h1>
   <!-- Button to Open the Modal -->
    <v-btn color="warning" dark>Nuevo</v-btn>
    <!-- The Modal -->
    <div class="modal" :class="{mostrar: modal}">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <!-- <h4 class="modal-title">{{tituloModal}}</h4>
            <v-btn tile color="success"><v-icon left>mdi-pencil</v-icon>Cerrar</v-btn> -->
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="my-4">
              <label for="dni">DNI: </label>
              <input v-model="alumno.dni_al" type="text" class="form-control" id="dni" placeholder="Dni del alumno">
            </div>            
            <div class="my-4">
              <label for="nombre">Nombre: </label>
              <input v-model="alumno.nom_al" type="text" class="form-control" id="nombre" placeholder="Nombre del Alumno">
            </div>
            <div class="my-4">
              <label for="descripcion">Apellido: </label>
              <input v-model="alumno.ape_al" type="text" class="form-control" id="apellido" placeholder="Apellido del Alumno">
            </div>
            <div class="my-4">
              <label for="stock">Reparto: </label>
              <input v-model="alumno.rep_al" type="text" class="form-control" id="reparto" placeholder="Reparto del Alumno">
            </div>
            <div class="my-4">
              <label for="stock">Especialidad: </label>
              <input v-model="alumno.esp_al" type="text" class="form-control" id="especialidad" placeholder="Especialidad del Alumno">
            </div>
            <div class="my-4">
              <label for="stock">Lugar de Nacimiento: </label>
              <input v-model="alumno.lnac_al" type="text" class="form-control" id="lnacimiento" placeholder="Lugar de Nacimiento del Alumno">
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <v-btn color="warning" dark>Cancelar</v-btn>
            <v-btn color="warning" dark>Guardar</v-btn>
          </div>
        </div>
    </div>
</div>
<v-simple-table fixed-header height="500px">
    <template v-slot:default>
        <thead>
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
            <tr v-for="alm in alumno.data" :key="alm.id">
            <th scope="row">{{ alm.id }}</th>
            <td>{{ alm.dni_al }}</td>
            <td>{{ alm.nom_al }}</td>
            <td>{{ alm.ape_al }}</td>
            <td>{{ alm.rep_al }}</td>
            <td>{{ alm.esp_al }}</td>
            <td>{{ alm.lnac_al }}</td>
            <td>
                <v-btn color="warning" dark>Editar</v-btn>
            </td>
            <td>
                <v-btn color="warning" dark>Eliminar</v-btn>
            </td>
            </tr>
        </tbody>
     </template>
  </v-simple-table>
  
<!--  <pagination :data="alumno" @pagination-change-page="getResults"></pagination> -->
  
  </div>
</template>

<script>
export default {
  data(){
    return{
      alumno: {}
    }
  },

  mounted(){
    this.getResults();
    //axios.get('./api/alumnos').then(response => {
    //    this.alumno = response.data.data;
    //});    
  },
  	methods: {
		// Our method to GET results from a Laravel endpoint
		getResults(page = 1) {
			axios.get('./api/alumnos?page=' + page)
				.then(response => {
					this.alumno = response.data;
				});
		}
    
	}
}
</script>

<style>
  .mostrar{
    display: list-item;
    opacity: 1;
    background: rgba(75, 56, 143, 0.705);
  }
</style>



