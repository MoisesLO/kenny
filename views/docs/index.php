<?php include "../layouts/header.php"; ?>

  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
    <!-- Desktop sidebar -->
    <?php include "../layouts/sidebar.php"; ?>

    <div class="flex flex-col flex-1 w-full">
        <?php include "../layouts/subheader.php"; ?>
      <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Lista de Documentos
          </h2>
          <a href="/views/docs/new.php" class="flex items-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple mb-4" style="width: 13%">
            Nuevo
          </a>

          <!-- With avatar -->
          <!-- <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Documentos
          </h4> -->

          <!-- <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Table with actions
          </h4> -->
          <div class="w-full rounded-lg shadow-xs">
            <div class="w-full">
              <table class="w-full whitespace-no-wrap">
                <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                  <th class="px-4 py-3">Numero</th>
                  <th class="px-4 py-3">Documento</th>
                  <th class="px-4 py-3">Fecha</th>
                  <th class="px-4 py-3">Estado</th>
                  <th class="px-4 py-3">Monto</th>
                  <th class="px-4 py-3">Actions</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <tr class="text-gray-700 dark:text-gray-400">
                  <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                      <!-- Avatar with inset shadow -->
                      <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                        <img class="object-cover w-full h-full rounded-full"
                             src="../../assets/img/factura.svg"
                             alt="" loading="lazy"/>
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                      </div>
                      <div>
                        <p class="font-semibold">F001-54358</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">
                          ABRAHAM MOISES LINARES
                        </p>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-sm">
                    10425162530
                  </td>
                  <td class="px-4 py-3 text-xs">
                    6/10/2020
                  </td>
                  <td class="px-4 py-3 text-sm">
                    <span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                      Enviado
                    </span>
                  </td>
                  <td>S/. 1876.98</td>
                  <td class="px-4 py-3">
                    <div class="flex items-center space-x-4 text-sm">
                      <!-- Option -->
                      <div class="relative inline-block text-left">
                        <div>
                          <button @click="open = !open" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white dark:bg-gray-100 dark:text-gray-400 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="options-menu" aria-haspopup="true" aria-expanded="true">
                            Options
                            <!-- Heroicon name: chevron-down -->
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                          </button>
                        </div>
                        <div x-show="open" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                          <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Account settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Support</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">License</a>
                          </div>
                        </div>
                      </div>
                      <!-- End Option -->
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <span class="flex items-center col-span-3">
              Showing 21-30 of 100
            </span>
              <span class="col-span-2"></span>
              <!-- Pagination -->
              <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
              <nav aria-label="Table navigation">
                <ul class="inline-flex items-center">
                  <li>
                    <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                            aria-label="Previous">
                      <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                        <path
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                      </svg>
                    </button>
                  </li>
                  <li>
                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                      1
                    </button>
                  </li>
                  <li>
                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                      2
                    </button>
                  </li>
                  <li>
                    <button
                        class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                      3
                    </button>
                  </li>
                  <li>
                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                      4
                    </button>
                  </li>
                  <li>
                    <span class="px-3 py-1">...</span>
                  </li>
                  <li>
                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                      8
                    </button>
                  </li>
                  <li>
                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                      9
                    </button>
                  </li>
                  <li>
                    <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                            aria-label="Next">
                      <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                        <path
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                      </svg>
                    </button>
                  </li>
                </ul>
              </nav>
            </span>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Configuracion Alpine -->
  <script src="/assets/js/init-alpine.js"></script>

<?php include "../layouts/footer.php"; ?>