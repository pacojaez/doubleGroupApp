<div class="py-12">
    <section class="container p-6 mx-auto font-mono">
        <div class="w-full mb-2 overflow-hidden text-gray-200 bg-gray-600 rounded-lg shadow-lg">
            <div class="flex justify-center w-full overflow-x-auto">
                <h2 class="text-xl font-bold">ASIGNACIÓN UNIFORMIDAD A TRABAJADOR</h2>
            </div>
        </div>
    </section>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
            <form wire:submit="save">
                <!-- This is an example component -->
                <section class="relative p-0 m-0 text-gray-600 body-font"></section>
                <div class="container mx-auto">
                    <div class="flex flex-col w-full mb-1 text-center">
                    </div>
                    <div class="mt-10 md:mt-0 md:col-span-2">

                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="px-2 py-8 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="trabajador"
                                            class="block text-sm font-medium text-gray-700">TRABAJADOR</label>

                                        <div class="relative">
                                            <select wire:model.defer="trabajador"
                                                class="block w-full px-4 py-3 pr-8 border rounded appearance-none bg-grey-lighter border-grey-lighter text-grey-darker"
                                                id="grid-state" required>
                                                <option disabled value="null">SELECCIONA UN TRABAJADOR DE LA BASE
                                                    DE
                                                    DATOS</option>
                                                @foreach ($trabajadors as $trabajador)
                                                    <option value={{ $trabajador->id }}>
                                                        {{ $trabajador->name }}
                                                        {{ $trabajador->surname }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="uniformidad"
                                            class="block text-sm font-medium text-gray-700">UNIFORMIDAD</label>
                                        <div class="relative">
                                            <select wire:model.defer="uniformidad"
                                                class="block w-full px-4 py-3 pr-8 border rounded appearance-none bg-grey-lighter border-grey-lighter text-grey-darker"
                                                id="grid-state" required>
                                                <option disabled value="null">SELECIONA UN ITEM DE UNIFORMIDAD...
                                                </option>
                                                @foreach ($uniformidads as $uniformidad)
                                                    <option value={{ $uniformidad->id }}>
                                                        {{-- {{ $uniformidad->name }} --}}
                                                        {{ $uniformidad->type }} -
                                                        {{ $uniformidad->color }} -
                                                        {{ $uniformidad->talla }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="w-full px-4 py-3 text-right bg-white sm:px-6">
                            <div class="flex flex-col h-full mt-5">
                                <button type="submit"
                                    class="px-5 py-3 mb-3 text-base font-medium text-white transition duration-200 bg-blue-500 rounded-full hover:bg-blue-600 active:bg-blue-700">
                                    ASIGNAR UNIFORMIDAD AL TRABAJADOR
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                        <div class=""></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
