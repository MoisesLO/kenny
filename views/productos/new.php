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
        <div class="pt-9">
          <h2 class="my-4 pb-4 text-4xl font-semibold text-gray-500">
            <i class="fas fa-plus"></i> Nuevo Producto1
          </h2>
        </div>

        <!-- Contenido -->
        <div class="sm:w-full px-4 py-10 rounded-lg shadow mb-16" x-data="data()">

          <form x-on:submit.prevent="addProducto()">

            <!-- Fila uno Headers -->
            <div class="flex">

              <!-- Nombre -->
              <div class="w-6/12">
                <div class="w-full mb-5 pr-4">
                  <label for="" class="text-sm font-semibold text-gray-500 px-1">
                    Nombre del Producto
                  </label>
                  <div class="flex mt-1">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                      <i class="fas fa-file-alt text-gray-400 text-lg"></i>
                    </div>
                    <input type="text" x-model="producto.nombre" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg 
                      text-gray-600 border-2 border-gray-200 outline-none 
                      focus:border-gray-400" placeholder="Abraham Moises Linares">
                  </div>
                </div>
              </div>

              <!-- Stock -->
              <div class="w-3/12">
                <div class="w-full mb-5 pr-4">
                  <label for="" class="text-sm font-semibold text-gray-500 px-1">
                    Stock (min Und)
                  </label>
                  <div class="flex mt-1">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                      <i class="fas fa-file-alt text-gray-400 text-lg"></i>
                    </div>
                    <input type="text" x-model="producto.stock" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg 
                      text-gray-600 border-2 border-gray-200 outline-none text-right
                      focus:border-gray-400" placeholder="1000">
                  </div>
                </div>
              </div>

              <!-- Activo -->
              <div class="w-2/12">
                <div class="flex pr-4">
                  <div class="w-full mb-10">
                    <label for="" class="text-sm font-semibold text-gray-500 px-1">Activo</label>
                    <div class="flex mt-1">
                      <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                        <i class="fas fa-check-circle text-gray-400 text-lg"></i>
                      </div>
                      <select x-model="producto.estado" class="w-full py-2 -ml-10 pl-10 rounded-lg pl-2 text-gray-600 border-2 border-gray-200 outline-none focus:border-gray-500">
                        <option value="activo" :selected="{}">Activo</option>
                        <option value="desactivado" :selected="{}">Desactivado</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Agregar -->
              <div class="w-1/12">
                <div class="flex">
                  <div class="w-full mb-10">
                    <label for="" class="text-sm font-semibold text-gray-500 px-1">Agregar</label>
                    <div class="flex mt-1">
                      <a href="#" @click="addProductoItems()" class="items-center text-center bg-gray-200 block w-full rounded-lg py-2 hover:bg-gray-300">
                        <i class="fas fa-plus"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Cabezeras Items -->
            <div class="flex">
              <div class="w-3/12">
                <label class="text-sm font-semibold text-gray-500 px-1">
                  Detalle
                </label>
              </div>
              <div class="w-2/12 text-right">
                <label class="text-sm font-semibold text-gray-500 px-5">
                  Descuento
                </label>
              </div>
              <div class="w-1/12">
                <label class="text-sm font-semibold text-gray-500 px-1">
                  Opciones
                </label>
              </div>
              <div class="w-2/12 text-right">
                <label class="text-sm font-semibold text-gray-500 pr-5">
                  Subtotal
                </label>
              </div>
              <div class="w-2/12 text-right">
                <label class="text-sm font-semibold text-gray-500 pr-4">
                  IGV
                </label>
              </div>
              <div class="w-2/12 text-right">
                <label class="text-sm font-semibold text-gray-500 pr-2">
                  Total
                </label>
              </div>
            </div>

            <!-- Fila dos productos -->
            <template x-for="(item, index) in producto.items" :key="index">
              <div class="flex mb-4">
              
                <!-- Descripcion -->
                <div class="w-3/12">
                  <div class="w-full pr-4">
                    <div class="flex mt-1">
                      <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                        <i class="fas fa-file-alt text-gray-300 text-sm"></i>
                      </div>
                      <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-md 
                        text-gray-500 border-2 border-gray-100 outline-none 
                        focus:border-gray-400"
                        x-model="item.descripcion"
                        placeholder="Cajas">
                    </div>
                  </div>
                </div>

                <!-- Descuento -->
                <div class="w-2/12">
                  <div class="w-full pr-4">                    
                    <div class="flex mt-1">
                      <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                        <i class="fas fa-sort-numeric-up-alt text-gray-300 text-md"></i>
                      </div>
                      <input type="text" class="w-full -ml-10 pl-10 pl-2 pr-2 py-2 rounded-lg 
                        text-gray-500 border-2 border-gray-200 outline-none text-right
                        focus:border-gray-400"
                        x-model="item.descuento"
                        placeholder="100">
                    </div>
                  </div>
                </div>

                <!-- Opciones -->
                <div class="w-1/12">
                  <div class="flex">
                    <div class="w-full pr-3">                      
                      <div class="flex mt-1">
                        <!-- Opciones -->
                        <div class="relative w-full">
                          <div class="flex items-center">
                            <a href="#" @click="item.open = !item.open" 
                            class="items-center bg-gray-200 block w-full rounded-lg py-2 hover:bg-gray-300 text-center">
                              <i class="fas fa-user-cog text-gray-400 text-lg"></i>
                            </a>
                          </div>
                          <!-- Detalle de Opciones -->
                          <div x-show="item.open" class="origin-top-right absolute right-0 mt-2 w-52 bg-white shadow rounded-md z-20">
                            <div class="py-1 px-4 pt-3">                                                            
                              <!-- Estado -->
                              <div class="flex">
                                <div class="w-full mb-2">
                                  <label for="" class="text-sm font-semibold text-gray-500 px-1">Estado</label>
                                  <div class="flex mt-1">                      
                                    <select class="w-full py-2 rounded-lg text-gray-600 border-2 border-gray-200 outline-none focus:border-gray-500"
                                    x-model="item.estado">
                                      <option value="activo" :selected="{}">Activo</option>
                                      <option value="desactivado" :selected="{}">Desactivado</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <!-- Unidad -->
                              <div class="flex">
                                <div class="w-full mb-2">
                                  <label for="" class="text-sm font-semibold text-gray-500 px-1">Unidad</label>
                                  <div class="flex mt-1">                      
                                    <select  class="w-full py-2 rounded-lg text-gray-600 border-2 border-gray-200 outline-none focus:border-gray-500"
                                    x-model="item.unidad">
                                      <option value="unidad" :selected="{}">Unidad (Und)</option>
                                      <option value="kilogramos" :selected="{}">Kilogramos (Kg)</option>
                                      <option value="gramos" :selected="{}">Gramos (Gr)</option>                                      
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <!-- Editar -->
                              <a href="#" class="block py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-green-900">
                                <i class="fas fa-trash"></i> Eliminar
                              </a>
                            </div>
                          </div>
                          <!-- End Detalle de Opciones -->                          
                        </div>
                        <!-- End Opciones -->
                        
                      </div>
                    </div>
                  </div>

                </div>

                <!-- Sub Total -->
                <div class="w-2/12">
                  <div class="w-full pr-3 text-right">                    
                    <div class="flex mt-1">
                      <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                        <i class="fas fa-money-bill-wave text-gray-300 text-md"></i>
                      </div>
                      <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg 
                        text-gray-500 border-2 border-gray-200 outline-none text-right
                        focus:border-gray-400" 
                        x-model="item.precio_unitario_sin_igv"
                        placeholder="0.00">
                    </div>
                  </div>
                </div>

                <!-- IGV -->
                <div class="w-2/12">
                  <div class="w-full pr-3 text-right pr-2">                    
                    <div class="flex mt-1">  
                      <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                        <i class="fas fa-money-bill-wave text-gray-300 text-md"></i>
                      </div>                  
                      <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg 
                        text-gray-500 border-2 border-gray-200 px-1 outline-none text-right
                        focus:border-gray-400" 
                        x-model="item.precio_unitario_igv"
                        placeholder="0.00">
                    </div>
                  </div>
                </div>

                <!-- Total -->
                <div class="w-2/12">
                  <div class="w-full text-right">                    
                    <div class="flex mt-1">
                      <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                        <i class="fas fa-money-bill-wave text-gray-300 text-sm"></i>
                      </div>
                      <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg 
                        text-gray-600 border-2 border-gray-200 outline-none text-right
                        focus:border-gray-400" 
                        x-model="item.precio_unitario_con_igv"
                        placeholder="0.00">
                    </div>
                  </div>
                </div>

              </div>              
            </template>            
          

            <!-- Boton Guardar -->
            <div class="">
              <div class="text-right pt-2">
                <button type="submit" class="px-5 rounded-lg py-2 bg-gray-400 text-white hover:bg-gray-500">
                  <i class="fas fa-save text-gray-50"></i>  Guardar Cambios
                </button>
              </div>
            </div>
          </form>
        </div>


      </div>
    </main>
  </div>

  <script>
    function data() {
      return {
        producto: {
          id: '',
          nombre: 'Hojas Boom blanco A4',
          stock: '10000',
          estado: 'activo',
          items: [
            {
              id: '',
              descripcion: 'Ciento',
              unidad: 'unidad',
              descuento: '100',
              estado: 'activado',
              open: false,
              precio_unitario_sin_igv: '82.00',
              precio_unitario_con_igv: '100.00',              
              precio_unitario_igv: '18.00',
              total: ''
            }                     
          ]
        },
        addProducto() {
          axios.post('../../api/productos/new.php', { producto: this.producto})
          .then(res => {
            console.log(res.data);           
          });
        },
        addProductoItems(){
          this.producto.items.push({
            id: '',
            descripcion: '',
            unidad: '',
            descuento: '',
            estado: '',
            open: false,
            precio_unitario_sin_igv: '',
            precio_unitario_con_igv: '',              
            precio_unitario_igv: '',
            total: ''
          });
        }
      }
    }
  </script>
</body>

<!-- Footer -->
<?php include "../layouts/footer_.php" ?>