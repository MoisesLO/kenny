<!-- Header -->
<?php include "../layouts/header_.php" ?>

<body class="bg-gray-50">
<div class="h-screen w-full flex overflow-hidden">

  <!-- Sidebar -->
    <?php include "../layouts/sidebar_.php" ?>

  <main class="flex-1 flex flex-col bg-gray-50 dark:bg-gray-700 transition duration-500 ease-in-out overflow-y-auto">
    <div class="mx-10 my-2">
      <nav
          class="flex flex-row justify-between border-b dark:border-gray-600 dark:text-gray-400 transition duration-500 ease-in-out">
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

          <input class="w-12 bg-transparent focus:outline-none" placeholder="Search"/>

        </div>

      </nav>

      <!-- Titulo -->
      <!-- <h2 class="my-4 text-4xl font-semibold dark:text-gray-400">
                  Crear Documento
              </h2> -->

      <div class="w-full rounded-md shadow-xs">
        <div class="w-full mt-8">
          <!-- Centrall -->
          <div x-data="invoices()" x-init="generateInvoiceNumber(111111, 999999);" x-cloak>
            <div class="block bg-gray-100 rounded-tl-lg rounded-tr-lg px-4 py-1 text-bold uppercase text-gray-500">
              <div class="flex justify-between items-center">
                <h2 class="text-xl text-gray-500 font-semibold">
                  Nueva Factura
                </h2>
                <div>
                  <div class="relative mr-4 inline-block">
                    <div
                        class="text-gray-500 cursor-pointer w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-300 inline-flex items-center justify-center"
                        @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="printInvoice()">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24"
                           height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                           stroke-linecap="round" stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"/>
                        <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"/>
                        <rect x="7" y="13" width="10" height="8" rx="2"/>
                      </svg>
                    </div>
                    <div x-show.transition="showTooltip"
                         class="z-40 shadow-lg text-center w-32 block absolute right-0 top-0 p-2 mt-12 rounded-lg bg-gray-800 text-white text-xs">
                      Print this invoice!
                    </div>
                  </div>
                  <div class="relative inline-block">
                    <div
                        class="text-gray-500 cursor-pointer w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-300 inline-flex items-center justify-center"
                        @mouseenter="showTooltip2 = true" @mouseleave="showTooltip2 = false"
                        @click="window.location.reload()">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh" width="24"
                           height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                           stroke-linecap="round" stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -5v5h5"/>
                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 5v-5h-5"/>
                      </svg>
                    </div>
                    <div x-show.transition="showTooltip2"
                         class="z-40 shadow-lg text-center w-32 block absolute right-0 top-0 p-2 mt-12 rounded-lg bg-gray-800 text-white text-xs">
                      Reload Page
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="px-6 py-3 bg-white antialiased sans-serif min-h-screen" style="min-height: 900px">
              <div class="container mx-auto py-6">
                <div class="flex mb-8 justify-between">

                  <!-- Datos de Numero de Factura -->
                  <div class="w-2/4">

                    <!-- Numero -->
                    <div class="mb-2 md:mb-1 md:flex items-center">
                      <label class="w-32 text-gray-700 block font-semibold text-sm uppercase tracking-wide">
                        Numero
                      </label>
                      <span class="mr-4 inline-block hidden md:block">:</span>
                      <div class="flex-1">
                        <input
                            class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            type="text" placeholder="eg. #INV-100001" x-model="factura.numero">
                      </div>
                    </div>

                    <!-- Serie -->
                    <div class="mb-2 md:mb-1 md:flex items-center">
                      <label class="w-32 text-gray-700 block font-semibold text-sm uppercase tracking-wide">
                        Serie
                      </label>
                      <span class="mr-4 inline-block hidden md:block">:</span>
                      <div class="flex-1">
                        <input
                            class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            type="text" placeholder="F001" x-model="factura.serie">
                      </div>
                    </div>

                    <!-- Fecha Emision -->
                    <div class="mb-2 md:mb-1 md:flex items-center">
                      <label class="w-32 text-gray-700 block font-semibold text-sm uppercase tracking-wide">
                        Fecha Emision
                      </label>
                      <span class="mr-4 inline-block hidden md:block">:</span>
                      <div class="flex-1">
                        <input
                            class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 js-datepicker"
                            id="datepicker" type="text" placeholder="eg. 17 Mar, 2020" x-model="factura.fecha"
                            x-on:change="factura.fecha = document.getElementById('datepicker').value" autocomplete="off"
                            readonly>
                      </div>
                    </div>
                  </div>

                  <!-- Logo Factura -->
                  <div>
                    <div class="w-32 h-32 mb-1 border rounded-lg overflow-hidden relative bg-gray-100">
                      <img id="image" class="object-cover w-full h-32"
                           src="https://placehold.co/300x300/e2e8f0/e2e8f0"/>
                      <div
                          class="absolute top-0 left-0 right-0 bottom-0 w-full block cursor-pointer flex items-center justify-center"
                          onClick="document.getElementById('fileInput').click()">
                        <button type="button" style="background-color: rgba(255, 255, 255, 0.65)"
                                class="hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded-lg shadow-sm">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera" width="24"
                               height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                               stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <path
                                d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2"/>
                            <circle cx="12" cy="13" r="3"/>
                          </svg>
                        </button>
                      </div>
                    </div>
                    <input name="photo" id="fileInput" accept="image/*" class="hidden" type="file" onChange="let file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function (e) {
                      document.getElementById('image').src = e.target.result;
                      document.getElementById('image2').src = e.target.result;
                    };
                    reader.readAsDataURL(file);">
                  </div>
                </div>

                <div class="flex flex-wrap justify-between mb-8">

                  <!-- Datos del Cliente -->
                  <div class="w-full md:w-1/3 mb-2 md:mb-0">
                    <label class="text-gray-700 block mb-1 font-semibold text-sm uppercase tracking-wide">
                      Facturar a :
                    </label>

                    <!-- Cliente Razon -->
                    <input
                        class="mb-1 bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" placeholder="Razon Social" x-model="factura.clienteRazon">

                    <!-- Cliente Documento -->
                    <input
                        class="mb-1 bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" placeholder="RUC" x-model="factura.clienteDocumento">

                    <!-- Cliente Direccion -->
                    <input
                        class="mb-1 bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" placeholder="Direcion" x-model="factura.clienteDireccion">
                  </div>

                  <!-- Datos de tu empresa -->
                  <div class="w-full md:w-1/3">

                    <label class="text-gray-700 block mb-1 font-semibold text-sm uppercase tracking-wide">
                      tu Empresa:
                    </label>

                    <!-- Empresa Razon -->
                    <input
                        class="mb-1 bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" placeholder="Your company name" x-model="factura.empresaRazon">

                    <!-- Empresa Documento -->
                    <input
                        class="mb-1 bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" placeholder="Your company address" x-model="factura.empresaDocumento">

                    <!-- Empresa Direccion -->
                    <input
                        class="mb-1 bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" placeholder="Additional info" x-model="factura.empresaDireccion">
                  </div>
                </div>

                <!-- Header Items -->
                <div class="flex -mx-1 border-b py-2 items-start">

                  <!-- Descriptcion -->
                  <div class="flex-1 px-1">
                    <p class="text-gray-700 uppercase tracking-wide text-sm font-semibold">Descripcion</p>
                  </div>

                  <!-- Eliminar -->
                  <div class="px-1 w-20">
                  </div>

                  <!-- Unidad -->
                  <div class="px-1 w-20 text-center">
                    <p class="text-gray-700 uppercase tracking-wide text-sm font-semibold">
                      Unidad
                    </p>
                  </div>

                  <!-- Cantidad -->
                  <div class="px-1 w-32 text-right">
                    <p class="text-gray-700 uppercase tracking-wide text-sm font-semibold">Cantidad</p>
                  </div>

                  <!--Precio Unitario -->
                  <div class="px-1 w-32 text-right">
                    <p class="leading-none">
                      <span class="block uppercase tracking-wide text-sm font-semibold text-gray-700">P. Unitario</span>
                      <span class="font-medium text-xs text-gray-500">(Incl. IGV)</span>
                    </p>
                  </div>

                  <!-- Total -->
                  <div class="px-1 w-32 text-right">
                    <p class="leading-none">
                      <span class="block uppercase tracking-wide text-sm font-semibold text-gray-700">Total</span>
                    </p>
                  </div>

                </div>

                <!-- Items -->
                <template x-for="invoice in factura.items" :key="invoice.id">
                  <div class="flex -mx-1 py-2 border-b">

                    <!-- Descripcion -->
                    <div class="flex-1 px-1">
                      <p class="text-gray-800" x-text="invoice.name"></p>
                    </div>

                    <!-- Eliminar -->
                    <div class="px-1 w-20">
                      <a href="#" class="text-red-500 hover:text-red-600 text-sm font-semibold"
                         @click.prevent="deleteItem(invoice.id)">Eliminar</a>
                    </div>

                    <!-- Unidad -->
                    <div class="px-1 w-20 text-center">
                      <p class="text-gray-700" x-text="invoice.unidad"></p>
                    </div>

                    <!-- Cantidad -->
                    <div class="px-1 w-32 text-right">
                      <p class="text-gray-700" x-text="invoice.cantidad"></p>
                    </div>

                    <!-- Precio Unitario con IGV -->
                    <div class="px-1 w-32 text-right">
                      <p class="text-gray-800" x-text="numberFormat(invoice.precio_unitario_con_igv)"></p>
                    </div>

                    <!-- Total -->
                    <div class="px-1 w-32 text-right">
                      <p class="text-gray-800" x-text="numberFormat(invoice.total)"></p>
                    </div>

                  </div>
                </template>

                <button
                    class="mt-6 bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded shadow-sm"
                    x-on:click="openModal = !openModal">
                  Agregar Items
                </button>

                <div class="py-2 ml-auto mt-5 w-full sm:w-2/4 lg:w-1/4">
                  <div class="flex justify-between mb-3">
                    <div class="text-gray-800 text-right flex-1">Sub Total</div>
                    <div class="text-right w-40">
                      <div class="text-gray-800 font-medium" x-html="factura.gravadas"></div>
                    </div>
                  </div>
                  <div class="flex justify-between mb-4">
                    <div class="text-sm text-gray-600 text-right flex-1">IGV(18%).</div>
                    <div class="text-right w-40">
                      <div class="text-sm text-gray-600" x-html="factura.igv"></div>
                    </div>
                  </div>

                  <div class="py-2 border-t border-b">
                    <div class="flex justify-between">
                      <div class="text-xl text-gray-600 text-right flex-1">Total</div>
                      <div class="text-right w-40">
                        <div class="text-xl text-gray-800 font-bold" x-html="factura.total"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Boton Enviar -->
                <div class="py-10 text-right">
                  <a
                      class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded shadow-sm"
                      @click="addInvoice()">Enviar Factura</a>
                </div>

                <!--              <div class="py-10 text-center">-->
                <!--                <p class="text-gray-600">Created by-->
                <!--                  <a-->
                <!--                    class="text-blue-600 hover:text-blue-500 border-b-2 border-blue-200 hover:border-blue-300"-->
                <!--                    href="https://twitter.com/mithicher">@mithicher</a>. Built with <a-->
                <!--                    class="text-blue-600 hover:text-blue-500 border-b-2 border-blue-200 hover:border-blue-300"-->
                <!--                    href="https://tailwindcss.com/">tailwindCSS</a> and <a href="https://github.com/alpinejs/alpine"-->
                <!--                                                                           class="text-blue-600 hover:text-blue-500 border-b-2 border-blue-200 hover:border-blue-300">AlpineJS</a>.-->
                <!--                  SVG icons from <a href="https://github.com/tabler/tabler-icons"-->
                <!--                                    class="text-blue-600 hover:text-blue-500 border-b-2 border-blue-200 hover:border-blue-300">Tabler-->
                <!--                    Icons</a>.</p>-->
                <!--              </div>-->

                <!-- Print Template -->
                <div id="js-print-template" x-ref="printTemplate" class="hidden">
                  <div class="mb-8 flex justify-between">
                    <div>
                      <h2 class="text-3xl font-bold mb-6 pb-2 tracking-wider uppercase">Invoice</h2>

                      <div class="mb-1 flex items-center">
                        <label class="w-32 text-gray-600 block font-bold text-xs uppercase tracking-wide">Invoicee
                          No.</label>
                        <span class="mr-4 inline-block">:</span>
                        <div x-text="invoiceNumber"></div>
                      </div>

                      <div class="mb-1 flex items-center">
                        <label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Invoice
                          Date</label>
                        <span class="mr-4 inline-block">:</span>
                        <div x-text="invoiceDate"></div>
                      </div>

                      <div class="mb-1 flex items-center">
                        <label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Due
                          date</label>
                        <span class="mr-4 inline-block">:</span>
                        <div x-text="invoiceDueDate"></div>
                      </div>
                    </div>
                    <div class="pr-5">
                      <div class="w-32 h-32 mb-1 overflow-hidden">
                        <img id="image2" class="object-cover w-20 h-20"/>
                      </div>
                    </div>
                  </div>

                  <div class="flex justify-between mb-10">
                    <div class="w-1/2">
                      <label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">Bill/Ship
                        To:</label>
                      <div>
                        <div x-text="billing.name"></div>
                        <div x-text="billing.address"></div>
                        <div x-text="billing.extra"></div>
                      </div>
                    </div>
                    <div class="w-1/2">
                      <label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">From:</label>
                      <div>
                        <div x-text="from.name"></div>
                        <div x-text="from.address"></div>
                        <div x-text="from.extra"></div>
                      </div>
                    </div>
                  </div>

                  <div class="flex flex-wrap -mx-1 border-b py-2 items-start">
                    <div class="flex-1 px-1">
                      <p class="text-gray-600 uppercase tracking-wide text-xs font-semibold">Description</p>
                    </div>

                    <div class="px-1 w-32 text-right">
                      <p class="text-gray-600 uppercase tracking-wide text-xs font-bold">Units</p>
                    </div>

                    <div class="px-1 w-32 text-right">
                      <p class="leading-none">
                        <span class="block uppercase tracking-wide text-xs font-bold text-gray-600">Unit Price</span>
                        <span class="font-medium text-xs text-gray-500">(Incl. GST)</span>
                      </p>
                    </div>

                    <div class="px-1 w-32 text-right">
                      <p class="leading-none">
                        <span class="block uppercase tracking-wide text-xs font-bold text-gray-600">Amount</span>
                        <span class="font-medium text-xs text-gray-500">(Incl. GST)</span>
                      </p>
                    </div>
                  </div>

                  <!-- Items -->
                  <template x-for="invoice in items" :key="invoice.id">
                    <div class="flex flex-wrap -mx-1 py-2 border-b">
                      <div class="flex-1 px-1">
                        <p class="text-gray-800" x-text="invoice.name"></p>
                      </div>

                      <div class="px-1 w-32 text-right">
                        <p class="text-gray-700" x-text="invoice.cantidad"></p>
                      </div>

                      <div class="px-1 w-32 text-right">
                        <p class="text-gray-800" x-text="numberFormat(invoice.precio_unitario_con_igv)"></p>
                      </div>

                      <div class="px-1 w-32 text-right">
                        <p class="text-gray-800" x-text="numberFormat(invoice.total)"></p>
                      </div>
                    </div>
                  </template>

                  <div class="py-2 ml-auto mt-20" style="width: 320px">
                    <div class="flex justify-between mb-3">
                      <div class="text-gray-800 text-right flex-1">Total incl. GST</div>
                      <div class="text-right w-40">
                        <div class="text-gray-800 font-medium" x-html="netTotal"></div>
                      </div>
                    </div>
                    <div class="flex justify-between mb-4">
                      <div class="text-sm text-gray-600 text-right flex-1">GST(18%) incl. in Total</div>
                      <div class="text-right w-40">
                        <div class="text-sm text-gray-600" x-html="totalGST"></div>
                      </div>
                    </div>

                    <div class="py-2 border-t border-b">
                      <div class="flex justify-between">
                        <div class="text-xl text-gray-600 text-right flex-1">Amount due</div>
                        <div class="text-right w-40">
                          <div class="text-xl text-gray-800 font-bold" x-html="netTotal"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Print Template -->

                <!-- Modal -->
                <div style=" background-color: rgba(0, 0, 0, 0.8)"
                     class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full"
                     x-show.transition.opacity="openModal">
                  <div class="p-4 max-w-xl mx-auto relative absolute left-0 right-0 overflow-hidden mt-24">

                    <!-- Boton Close -->
                    <div
                        class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
                        x-on:click="openModal = !openModal">
                      <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z"/>
                      </svg>
                    </div>

                    <div class="shadow w-full rounded-lg bg-white overflow-hidden w-full block p-8">

                      <!-- Titulo -->
                      <h2 class="font-semibold text-2xl mb-6 text-gray-700 border-b pb-2">
                        Agregar Productos
                      </h2>

                      <!-- Descripcion -->
                      <div class="mb-4">
                        <label
                            class="text-gray-700 block mb-1 font-semibold text-sm tracking-wide">
                          Descripcion
                        </label>
                        <input
                            class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            type="text" x-model="item.name">
                      </div>

                      <div class="flex">

                        <!-- Cantidad -->
                        <div class="mb-4 w-1/3 mr-2">
                          <label class="text-gray-700 block mb-1 font-semibold text-sm tracking-wide">
                            Cantidad
                          </label>
                          <input
                              class="text-right mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                              placeholder="0" type="text" x-model="item.cantidad">
                        </div>

                        <!-- Precio Unitario  con IGV -->
                        <div class="mb-4 w-1/3 mr-2">
                          <p class="leading-none text-right">
                          <span class="text-gray-700 block mb-1 font-semibold text-sm tracking-wide">P. Unitario <span
                                class="font-medium text-xs text-gray-500">(Incl. IGV)</span> </span>
                          </p>
                          <input
                              class="text-right mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                              type="text" placeholder="0.00" x-model="item.precio_unitario_con_igv">
                        </div>

                        <!-- Total -->
                        <div class="mb-4 w-1/3">
                          <label
                              class="text-gray-700 block mb-1 font-semibold text-sm text-right tracking-wide">Total</label>
                          <input
                              class="text-right mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                              type="text" placeholder="0.00"
                              x-model="item.total = item.cantidad * item.precio_unitario_con_igv">
                        </div>
                      </div>

                      <div class="flex">
                        <!-- Unidad -->
                        <div class="mb-4 w-40 mr-2">
                          <div class="relative">
                            <label class="text-gray-700 block mb-1 font-semibold text-sm tracking-wide">
                              Medida
                            </label>
                            <select
                                class="text-gray-700 block appearance-none w-full bg-gray-200 border-2 border-gray-200 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                x-model="item.unidad">
                              <option value="UND" x-bind:selected="item.unidad=='UND'">Unidad</option>
                              <option value="GR" x-bind:selected="item.unidad==='GR'">Gramos</option>
                              <option value="KG" x-bind:selected="item.unidad==='KG'">Kilogramos</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-600">
                              <svg class="fill-current h-4 w-4 mt-6" xmlns="http://www.w3.org/2000/svg"
                                   viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                              </svg>
                            </div>
                          </div>
                        </div>

                        <!-- IGV -->
                        <div class="mb-4 w-32 mr-2">
                          <div class="relative">
                            <label class="text-gray-700 block mb-1 font-semibold text-sm uppercase tracking-wide">
                              IGV
                            </label>
                            <select
                                class="text-gray-700 block appearance-none w-full bg-gray-200 border-2 border-gray-200 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                x-model="item.igv">
                              <option value="18">IGV 18%</option>
                              <option value="28">IGV 28%</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-600">
                              <svg class="fill-current h-4 w-4 mt-6" xmlns="http://www.w3.org/2000/svg"
                                   viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="mt-8 text-right">
                        <button type="button"
                                class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded shadow-sm mr-2"
                                @click="openModal = !openModal">
                          Cancelar
                        </button>
                        <button type="button"
                                class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded shadow-sm"
                                @click="addItem()">
                          Agregar Item
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Modal -->

              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </main>
</div>


<!-- JS -->
<script src="new.js"></script>
</body>

<!-- Footer -->
<?php include "../layouts/footer_.php" ?>