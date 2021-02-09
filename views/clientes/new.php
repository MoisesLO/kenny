<!-- Header -->
<?php include "../layouts/header_.php" ?>

<body class="bg-gray-100">
  <div class="h-screen w-full flex overflow-hidden">

    <!-- Sidebar -->
    <?php include "../layouts/sidebar_.php" ?>

    <main class="flex-1 flex flex-col bg-gray-50 dark:bg-gray-700 transition duration-500 ease-in-out overflow-y-auto">
      <div class="mx-10 my-2">
        <nav class="flex flex-row justify-between border-b dark:border-gray-600 dark:text-gray-400 transition duration-500 ease-in-out">
          <div class="flex">
            <!-- Top NavBar -->

            <a href="users-dashboard/" class="py-2 block text-green-500 border-green-500 dark:text-green-200 dark:border-green-200 focus:outline-none border-b-2 font-medium capitalize transition duration-500 ease-in-out">
              Lista
            </a>
            <button class="ml-6 py-2 block border-b-2 border-transparent focus:outline-none font-medium capitalize text-center focus:text-green-500 focus:border-green-500 dark-focus:text-green-200 dark-focus:border-green-200 transition duration-500 ease-in-out">
              Nuevo
            </button>
            <button class="ml-6 py-2 block border-b-2 border-transparent focus:outline-none font-medium capitalize text-center focus:text-green-500 focus:border-green-500 dark-focus:text-green-200 dark-focus:border-green-200 transition duration-500 ease-in-out">
              Inicio
            </button>
          </div>

          <div class="flex items-center select-none">
            <span class="hover:text-green-500 dark-hover:text-green-300
						cursor-pointer mr-3 transition duration-500 ease-in-out">

              <svg viewBox="0 0 512 512" class="h-5 w-5 fill-current">
                <path d="M505 442.7L405.3
								343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7
								44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1
								208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4
								2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9
								0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7
								0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0
								128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
              </svg>
            </span>

            <input class="w-12 bg-transparent focus:outline-none" placeholder="Search" />

          </div>

        </nav>

        <!-- Titulo -->
        <div class="flex justify-between items-center pt-9">
          <h2 class="my-4 pb-4 text-3xl font-semibold text-gray-600">
            <i class="fas fa-plus"></i> Nuevo Cliente
          </h2>
        </div>

        <!-- Contenido -->
        <div class="sm:w-1/2 px-16 py-10 rounded-lg shadow mb-16" x-data="data()">

          <form x-on:submit.prevent="addCliente()">

            <!-- Razon Social -->
            <div class="flex">
              <div class="w-full mb-5">
                <label for="" class="text-sm font-semibold text-gray-500 px-1">
                  Razon Social o Nombre
                </label>
                <div class="flex mt-1">
                  <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                    <i class="fas fa-file-alt text-gray-400 text-lg"></i>
                  </div>
                  <input type="text" x-model="cliente.razon" 
                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg 
                    text-gray-600 border-2 border-gray-200 outline-none 
                    focus:border-gray-400" 
                    placeholder="Abraham Moises Linares">
                </div>
              </div>
            </div>

            <!-- Documento -->
            <div class="flex">
              <div class="w-full mb-5">
                <label for="" class="text-sm font-semibold text-gray-500 px-1">
                  Documento
                </label>
                <div class="flex mt-1">
                  <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                    <i class="fas fa-file-alt text-gray-400 text-lg"></i>
                  </div>
                  <input type="text" x-model="cliente.documento" 
                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg 
                    text-gray-600 border-2 border-gray-200 outline-none 
                    focus:border-gray-400" 
                    placeholder="10477567680">
                </div>
              </div>
            </div>

            <!-- Direccion -->
            <div class="flex">
              <div class="w-full mb-5">
                <label for="" class="text-sm font-semibold text-gray-500 px-1">
                  Direccion
                </label>
                <div class="flex mt-1">
                  <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                    <i class="fas fa-file-alt text-gray-400 text-lg"></i>
                  </div>
                  <input type="text" x-model="cliente.direccion" 
                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg 
                    text-gray-600 border-2 border-gray-200 outline-none 
                    focus:border-gray-400" 
                    placeholder="Cm 40 Lt 15 Mz 213 Ciudad Nueva">
                </div>
              </div>
            </div>

            <!-- Correo -->
            <div class="flex">
              <div class="w-full mb-5">
                <label for="" class="text-sm font-semibold text-gray-500 px-1">
                  Correo
                </label>
                <div class="flex mt-1">
                  <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                    <i class="fas fa-file-alt text-gray-400 text-lg"></i>
                  </div>
                  <input type="text" x-model="cliente.correo" 
                    class="w-full -ml-10 pl-10 pr-3 py-2 
                    rounded-lg text-gray-600 border-2 border-gray-200 
                    outline-none focus:border-gray-400" 
                    placeholder="elnaufrago2009@gmail.com">
                </div>
              </div>
            </div>

            <!-- Telefono -->
            <div class="flex">
              <div class="w-full mb-5">
                <label for="" class="text-sm font-semibold text-gray-500 px-1">
                  Telefono
                </label>
                <div class="flex mt-1">
                  <div class="w-10 z-10 pl-1 text-center 
                  flex items-center justify-center">
                    <i class="fas fa-file-alt text-gray-400 text-lg"></i>
                  </div>
                  <input type="text" x-model="cliente.telefono" 
                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg 
                    text-gray-600 border-2 border-gray-200 outline-none 
                    focus:border-gray-400" 
                    placeholder="95263565">
                </div>
              </div>
            </div>

            <!-- Button Nuevo -->
            <div class="">
              <button class="px-4 py-2 block bg-gray-400 
                rounded text-white w-full hover:bg-gray-500">
                <i class="fas fa-save text-lg"></i> Guardar Cliente
              </button>
            </div>


            

          </form>
        </div>
      </div>
    </main>
  </div>

  <script>
    function data() {
      return {
        cliente: {
          razon: '',
          documento: '',
          direccion: '',
          correo: '',
          telefono: ''
        },
        addCliente() {
          axios.post('../../api/clientes/new.php', { cliente: this.cliente})
          .then(res => {
            if(res.data == true){
              window.location.href = '../../views/clientes/';
              console.log(this.cliente.razon);
            }
          })
        }
      }
    }
  </script>
</body>