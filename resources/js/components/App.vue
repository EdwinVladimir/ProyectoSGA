<template>
  <div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <router-link active-class="active-menu" exact :to="{ name: 'alumnos' }" class="nav-link">Alumnos</router-link>
                    </li>
                    <li class="nav-item">
                      
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            <router-view></router-view>
        </div>
    </main>
  </div>
</template>

<script>

</script>
