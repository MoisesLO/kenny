<?php include "../layouts/header.php"; ?>

  <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
    <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
    >
      <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
          <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="/assets/img/create-account-office.jpeg"
              alt="Office"
          />
          <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="/assets/img/create-account-office-dark.jpeg"
              alt="Office"
          />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
          <div class="w-full">
            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
              Crear Cuenta
            </h1>

            <!-- Nombres -->
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Nombres</span>
              <input
                  type="text"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
            </label>

            <!-- Apellidos -->
            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Apellidos</span>
              <input
                  type="text"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
            </label>

            <!-- Correo -->
            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Correo</span>
              <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
              />
            </label>

            <!-- Contrasena -->
            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Contrasena</span>
              <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************"
                  type="password"
              />
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Confirmar Contrasena
                </span>
              <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************"
                  type="password"
              />
            </label>

            <div class="flex mt-6 text-sm">
              <label class="flex items-center dark:text-gray-400">
                <input
                    type="checkbox"
                    class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                />
                <span class="ml-2">
                    Acepto las politicas
                    <span class="underline">de privacidad</span>
                  </span>
              </label>
            </div>

            <!-- You should use a button here, as the anchor is only used for the example  -->
            <a class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
               href="./login.html">
              Crear cuenta
            </a>

            <div class="mt-4">
              <span class="text-gray-700 dark:text-gray-400 text-sm">Entrar <a href="/views/login/">al sistema</a></span>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

<?php include "../layouts/footer.php"; ?>