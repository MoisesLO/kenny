<?php include "../layouts/header_.php" ?>

<body class="bg-gray-200">
  <div class="h-screen w-full flex overflow-hidden">

    <!-- Navbar -->
    <nav class="flex flex-col bg-gray-200 dark:bg-gray-900 w-64 px-12 pt-4 pb-6">

      <!-- SideNavBar -->

      <div class="flex flex-row border-b items-center justify-between pb-2">
        <!-- Hearder -->
        <span class="text-lg font-semibold capitalize dark:text-gray-300">
          my admin
        </span>

        <span class="relative ">
          <a class="hover:text-green-500 dark-hover:text-green-300
					text-gray-600 dark:text-gray-300" href="inbox/">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
              <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
            </svg>
          </a>
          <div class="absolute w-2 h-2 rounded-full bg-green-500
					dark-hover:bg-green-300 right-0 mb-5 bottom-0"></div>
        </span>

      </div>

      <div class="mt-8">
        <!-- User info -->
        <img class="h-12 w-12 rounded-full object-cover" src="https://appzzang.me/data/editor/1608/f9c387cb6bd7a0b004f975cd92cbe2d9_1471626325_6802.png" alt="enoshima profile" />
        <h2 class="mt-4 text-xl dark:text-gray-300 font-extrabold capitalize">
          Hello Enoshima
        </h2>
        <span class="text-sm dark:text-gray-300">
          <span class="font-semibold text-green-600 dark:text-green-300">
            Admin
          </span>
          id789038
        </span>
      </div>

      <button class="mt-8 flex items-center justify-between py-3 px-2 text-white dark:text-gray-200 bg-green-400 dark:bg-green-500 rounded-lg shadow">
        <!-- Action -->
        <span>Add user</span>
        <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
          <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
        </svg>
      </button>

      <ul class="mt-2 text-gray-600">
        <!-- Links -->
        <li class="mt-8">
          <a href="#home" class="flex ">
            <svg class="fill-current h-5 w-5 dark:text-gray-300" viewBox="0 0 24 24">
              <path d="M16 20h4v-4h-4m0-2h4v-4h-4m-6-2h4V4h-4m6
							4h4V4h-4m-6 10h4v-4h-4m-6 4h4v-4H4m0 10h4v-4H4m6
							4h4v-4h-4M4 8h4V4H4v4z"></path>
            </svg>
            <span class="ml-2 capitalize font-medium text-black
						dark:text-gray-300">
              dashboard
            </span>
          </a>
        </li>

        <li class="mt-8">
          <a href="#home" class="flex">
            <svg class="fill-current h-5 w-5 dark:text-gray-300" viewBox="0 0 24 24">
              <path d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2
							2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0
							00-2-2h-1V1m-1 11h-5v5h5v-5z"></path>
            </svg>
            <span class="ml-2 capitalize font-medium text-black
						dark:text-gray-300">
              calendar
            </span>
          </a>
        </li>

        <li class="mt-8 shadow py-2 bg-white dark:bg-gray-200 rounded-lg
				-ml-4">
          <a href="#home" class="flex pl-4">
            <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
              <path d="M12 4a4 4 0 014 4 4 4 0 01-4 4 4 4 0 01-4-4 4 4 0
							014-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4
							8-4z"></path>
            </svg>
            <span class="ml-2 capitalize font-medium">users</span>
          </a>
        </li>

        <li class="mt-8">
          <a href="#home" class="flex">
            <svg class="fill-current h-5 w-5 dark:text-gray-300" viewBox="0 0 24 24">
              <path d="M12 13H7v5h5v2H5V10h2v1h5v2M8
							4v2H4V4h4m2-2H2v6h8V2m10 9v2h-4v-2h4m2-2h-8v6h8V9m-2
							9v2h-4v-2h4m2-2h-8v6h8v-6z"></path>
            </svg>
            <span class="ml-2 capitalize font-medium text-black
						dark:text-gray-300">
              tasks
            </span>
          </a>
        </li>

      </ul>

      <div class="mt-auto flex items-center text-red-700 dark:text-red-400">
        <!-- important action -->
        <a href="#home" class="flex items-center">
          <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
            <path d="M16 17v-3H9v-4h7V7l5 5-5 5M14 2a2 2 0 012
						2v2h-2V4H5v16h9v-2h2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2
						0 012-2h9z"></path>
          </svg>
          <span class="ml-2 capitalize font-medium">log out</span>
        </a>

      </div>
    </nav>

    <main class="flex-1 flex flex-col bg-gray-100 dark:bg-gray-700 transition duration-500 ease-in-out overflow-y-auto">
      <div class="mx-10 my-2">

        <nav class="flex flex-row justify-between border-b dark:border-gray-600 dark:text-gray-400 transition duration-500 ease-in-out">
          <div class="flex">
            <!-- Top NavBar -->

            <a href="users-dashboard/" class="py-2 block text-green-500 border-green-500
						dark:text-green-200 dark:border-green-200
						focus:outline-none border-b-2 font-medium capitalize
						transition duration-500 ease-in-out">
              users
            </a>
            <button class="ml-6 py-2 block border-b-2 border-transparent
						focus:outline-none font-medium capitalize text-center
						focus:text-green-500 focus:border-green-500
						dark-focus:text-green-200 dark-focus:border-green-200
						transition duration-500 ease-in-out">
              role
            </button>
            <button class="ml-6 py-2 block border-b-2 border-transparent
						focus:outline-none font-medium capitalize text-center
						focus:text-green-500 focus:border-green-500
						dark-focus:text-green-200 dark-focus:border-green-200
						transition duration-500 ease-in-out">
              access rights
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
        <h2 class="my-4 text-4xl font-semibold dark:text-gray-400">
          Lista Documentos
        </h2>

        <!-- Tabla de Documentos -->
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-100">
              <th class="px-4 py-3">Numero</th>
              <th class="px-4 py-3">Documento</th>
              <th class="px-4 py-3">Fecha</th>
              <th class="px-4 py-3">Estado</th>
              <th class="px-4 py-3">Opciones</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="../../assets/img/f.png" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">F001-54987</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                      SURMOTRIZ SOCIEDAD ANONIMA
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">
                $ 863.45
              </td>
              <td class="px-4 py-3 text-xs">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                  Approved
                </span>
              </td>
              <td class="px-4 py-3 text-sm">
                6/10/2020
              </td>
            </tr>

            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="../../assets/img/b.png" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">Jolina Angelie</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                      Unemployed
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">
                $ 369.95
              </td>
              <td class="px-4 py-3 text-xs">
                <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                  Pending
                </span>
              </td>
              <td class="px-4 py-3 text-sm">
                6/10/2020
              </td>
            </tr>

            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">Sarah Curry</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                      Designer
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">
                $ 86.00
              </td>
              <td class="px-4 py-3 text-xs">
                <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                  Denied
                </span>
              </td>
              <td class="px-4 py-3 text-sm">
                6/10/2020
              </td>
            </tr>

            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">Rulia Joberts</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                      Actress
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">
                $ 1276.45
              </td>
              <td class="px-4 py-3 text-xs">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                  Approved
                </span>
              </td>
              <td class="px-4 py-3 text-sm">
                6/10/2020
              </td>
            </tr>

            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1546456073-6712f79251bb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">Wenzel Dashington</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                      Actor
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">
                $ 863.45
              </td>
              <td class="px-4 py-3 text-xs">
                <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                  Expired
                </span>
              </td>
              <td class="px-4 py-3 text-sm">
                6/10/2020
              </td>
            </tr>

            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=b8377ca9f985d80264279f277f3a67f5" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">Dave Li</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                      Influencer
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">
                $ 863.45
              </td>
              <td class="px-4 py-3 text-xs">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                  Approved
                </span>
              </td>
              <td class="px-4 py-3 text-sm">
                6/10/2020
              </td>
            </tr>

            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">Maria Ramovic</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                      Runner
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">
                $ 863.45
              </td>
              <td class="px-4 py-3 text-xs">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                  Approved
                </span>
              </td>
              <td class="px-4 py-3 text-sm">
                6/10/2020
              </td>
            </tr>

            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">Hitney Wouston</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                      Singer
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">
                $ 863.45
              </td>
              <td class="px-4 py-3 text-xs">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                  Approved
                </span>
              </td>
              <td class="px-4 py-3 text-sm">
                6/10/2020
              </td>
            </tr>

            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">Hans Burger</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                      10x Developer
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">
                $ 863.45
              </td>
              <td class="px-4 py-3 text-xs">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                  Approved
                </span>
              </td>
              <td class="px-4 py-3 text-sm">
                6/10/2020
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>

  </div>
</body>
<?php include "../layouts/footer_.php" ?>