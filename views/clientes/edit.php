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

              <i class="fas fa-search"></i>
            </span>

            <input class="w-12 bg-transparent focus:outline-none" placeholder="Search" />

          </div>

        </nav>
      </div>
    </main>
  </div>
</body>