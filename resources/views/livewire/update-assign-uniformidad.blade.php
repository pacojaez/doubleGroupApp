<div class="py-12">
    @if (session('updatedDate'))
        <div class="flex justify-center p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert"
            x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
            <svg class="inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium">Success alert!</span> {{ session('updatedDate') }}
            </div>
        </div>
    @endif
    <section class="container p-6 mx-auto font-mono bg-gray-400 rounded-lg shadow-lg">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="overflow-x-auto bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <table class="w-full">
                    <thead>
                        <tr
                            class="font-semibold tracking-wide text-left text-gray-900 uppercase bg-gray-100 border-b border-gray-600 text-md">
                            <th class="px-4 py-3">TRABAJADOR</th>
                            <th class="px-4 py-3">DNI</th>
                            <th class="px-4 py-3">UNIFORMIDAD DESCRIPCIÓN</th>
                            <th class="px-4 py-3">UNIFORMIDAD COLOR</th>
                            <th class="px-4 py-3">UNIFORMIDAD TALLA</th>
                            <th class="px-4 py-3">ENTREGADA</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <details class="group">
                                    <summary
                                        class="flex items-center justify-between font-medium list-none cursor-pointer">
                                        <div class="flex items-center text-sm">
                                            <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                                <div class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true">
                                                </div>
                                            </div>
                                            <a href="{{ route('show-trabajador', ['id' => $trabajador->id]) }} ">
                                                <p class="font-semibold text-black">{{ $trabajador->name }}</p>
                                                <p class="font-semibold text-black">{{ $trabajador->surname }}
                                                </p>
                                            </a>
                                        </div>
                                    </summary>
                                </details>
                            </td>
                            <td class="px-4 py-3 font-semibold border text-ms">{{ $trabajador->dni }}</td>
                            <td class="px-4 py-3 font-semibold border text-ms">{{ $uniformidad->description }}</td>
                            <td class="px-4 py-3 font-semibold border text-ms">{{ $uniformidad->color }}</td>
                            <td class="px-4 py-3 font-semibold border text-ms">{{ $uniformidad->talla }}</td>
                            <td class="px-4 py-3 font-semibold border text-ms">
                                @if ($pivot->updated_at != null)
                                    {{ $pivot->updated_at }}
                                @else
                                    {{ $pivot->created_at }}
                                @endif
                            </td>
                            {{-- <td class="px-4 py-3 font-semibold border text-ms">
                            <a
                                href="{{ route('update-assign-uniformidad', ['id_uniformidad' => $uniformidad->id, 'id_trabajador' => $trabajador->id]) }}">
                                <button type="button"
                                    class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm ring ring-red-200 ring-offset-2 hover:bg-red-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    MODIFICAR FECHA
                                </button>
                            </a>
                        </td> --}}
                        </tr>
                    </tbody>
                </table>

                <form wire:submit="updateAssign">
                    <!-- This is an example component -->
                    <div
                        class="w-full py-5 overflow-hidden font-bold text-center text-black bg-gray-300 shadow sm:text-3xl h-14 sm:rounded-md ">
                        Actualizar Fecha Entrega Uniformidad
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
                                            <label for="date" class="block text-sm font-medium text-gray-700">Fecha
                                                ENTREGA</label>
                                            <input type="date" name="date" id="date" wire:model="date"
                                                {{-- autocomplete="given-name" --}}
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="flex flex-col w-full h-full mt-5">
                                        <button type="submit"
                                            class="px-5 py-5 mb-3 text-base font-medium text-white transition duration-200 bg-blue-500 rounded-full hover:bg-blue-600 active:bg-blue-700">
                                            MODIFICAR FECHA ENTREGA UNIFORMIDAD
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
    </section>
</div>
