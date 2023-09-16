<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
            <form wire:submit="save">
                <!-- This is an example component -->
                <div
                    class="w-full pt-6 overflow-hidden text-3xl font-bold text-center text-black bg-gray-300 shadow h-14 sm:rounded-md ">
                    Formulario Añadir Uniformidad
                </div>

                <section class="relative p-0 m-0 text-gray-600 body-font"></section>


                <div class="container mx-auto">
                    <div class="flex flex-col w-full mb-1 text-center">
                    </div>
                    <div class="mt-10 md:mt-0 md:col-span-2">
                        {{-- <form action="#" method="POST"> --}}
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="px-2 py-8 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="name"
                                            class="block text-sm font-medium text-gray-700">Nombre</label>
                                        <input type="text" name="name" placeholder="Nombre" id="name"
                                            wire:model="name" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="surname"
                                            class="block text-sm font-medium text-gray-700">Tipo</label>
                                        <input type="text" name="type"
                                            placeholder="Sudadera, Polo, Pantalón, Zapato" id="type"
                                            wire:model="type" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="dni"
                                            class="block text-sm font-medium text-gray-700">Descripción</label>
                                        <input type="text" name="description" placeholder="Una descripción"
                                            id="dni" required wire:model="description" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="destiny"
                                            class="block text-sm font-medium text-gray-700">COLOR</label>
                                        <input type="text" name="color" placeholder="Color" id="color"
                                            wire:model="color" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">TALLA</label>
                                        <input type="text" name="talla" placeholder="XXL, 48, S, M, 52 ...."
                                            id="talla" wire:model="talla" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">STOCK</label>
                                        <input type="number" name="stock" placeholder="XXL, 48, S, M, 52 ...."
                                            id="stock" wire:model="stock" {{-- autocomplete="given-name" --}}
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    {{-- <button type="submit"
                                        class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium bg-indigo-600 border border-transparent rounded-md shadow-sm ring ring-indigo-500 ring-offset-4 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        Save
                                    </button> --}}


                                </div>
                                <div class="flex flex-col w-full h-full mt-5">
                                    <button type="submit"
                                        class="px-5 py-3 mb-3 text-base font-medium text-white transition duration-200 bg-blue-500 rounded-full hover:bg-blue-600 active:bg-blue-700">
                                        AÑADIR UNIFORMIDAD
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- </form> --}}
                    </div>
                    {{-- </section> --}}

                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-5">
                            <div class=""></div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
