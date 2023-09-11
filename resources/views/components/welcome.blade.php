<div
    class="p-6 bg-white border-b border-gray-200 lg:p-8 dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent dark:border-gray-700">
    <x-application-logo class="block w-auto h-12" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Aplicación de Gestión y Control de Entrega de Uniformidades
    </h1>

    <p class="mt-6 leading-relaxed text-gray-500 dark:text-gray-400">
        Desde esta aplicación se puede controlar la entrega de uniformidades a trabajadores. Queda registrada la fecha
        de entrega así como el item del que se le hace entrega al trabajador.
    </p>
    <p class="mt-6 leading-relaxed text-gray-500 dark:text-gray-400">
        Los trabajadores tienen las siguientes propiedades: NOMBRE, APELLIDOS, DNI, DESTINO, EMAIL, TALLA CAMISETA,
        TALLA PANTALÓN, TALLA CALZADO, FECHA DE CREACIÓN, ACTUALIZACIÓN Y BORRADO.
        ****Se puede añadir alguna propiedad más como TFNO.
    </p>
    <p class="mt-6 leading-relaxed text-gray-500 dark:text-gray-400">
        La uniformidad tiene las siguientes propiedades: NOMBRE, TIPO, DESCRIPCIÓN, COLOR, TALLA, FECHA DE CREACIÓN,
        ACTUALIZACIÓN Y BORRADO.
        ****Se puede añadir alguna propiedad más como STOCK.
    </p>
</div>

<div class="grid grid-cols-1 gap-6 p-6 bg-gray-200 bg-opacity-25 dark:bg-gray-800 md:grid-cols-2 lg:gap-8 lg:p-8">
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="https://laravel.com/docs">Documentation</a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            Desarrollado en PHP 8.2.9 sobre Laravel Framework version 10.21.0.
        </p>
        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            TALL Stack. Tailwind, Alpine Livewire y Laravel.
        </p>
        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            Se ha usado el scafold de Jetstream para autenticación.
        </p>
        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            Se ha usado spatie/laravel-permission para la gestión de roles y permisos
        </p>
        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            Se ha usado laravelcollective/html
        </p>
        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            Alojado para test en IONOS.
        </p>

        {{-- <p class="mt-4 text-sm">
            <a href="https://laravel.com/docs"
                class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                Explore the documentation

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    class="w-5 h-5 ml-1 fill-indigo-500 dark:fill-indigo-200">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p> --}}
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round"
                    d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="https://laracasts.com">Roles</a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            Esta Aplicación tiene unicamente dos roles: ADMINISTRADOR y GESTOR.
        </p>
        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            El ADMINISTRADOR puede dar de alta, borrar y actualizar GESTORES así como realizar las mismas acciones que
            el GESTOR.
            El GESTOR puede dar de alta trabajadores, uniformidades y asignar uniformidades a trabajadores.
        </p>

        {{-- <p class="mt-4 text-sm">
            <a href="https://laracasts.com"
                class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                Start watching Laracasts

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    class="w-5 h-5 ml-1 fill-indigo-500 dark:fill-indigo-200">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p> --}}
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="https://tailwindcss.com/">Futuras Implementaciones</a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            Se puede añadir un control de stock a los items de Uniformidad.
        </p>
        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            Se puede usar el "borrado blando" (sof deletes) tanto para la Uniformidad como los trabajadores
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                Autenticación
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            No está permito el REGISTRO de usuarios, los GESTORES deben ser añadidos por el ADMINISTRADOR.
        </p>
        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            Se usan middlewares en todas las rutas para evitar el uso incorrecto de la APP.
        </p>
    </div>
</div>
